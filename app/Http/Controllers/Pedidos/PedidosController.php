<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Linha;
use App\Pedido;
use App\Sabor;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    // PRODUTOS

    public function viewProdutos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $linhas = Linha::all();
        $sabores = Sabor::all();
                
        return view('pedidos.produtos', compact('user', 'uriAtual', 'linhas', 'sabores'));
    }
    
    public function inserirLinha(Request $request)
    {
        $linha = new Linha();
        $linha->linha = $request->linha;
        $linha->preco = $request->valor;
        $linha->save();

        return redirect()->route('produtos');

    }
    
    public function inserirProduto(Request $request)
    {
        $sabor = new Sabor();
        $sabor->sabor = $request->sabor_sabor;
        $sabor->linha = $request->sabor_linha;
        $sabor->save();

        return redirect()->route('produtos');

    }

    public function editProdutos(Sabor $produto)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $idProduto = $produto->id;
        
        $linhas = Linha::all();
        foreach ($linhas as $linha){
            
            if($produto->linha == $linha->id){
                $linhaProd = $linha->linha;
            }
        }

        return view('pedidos.produtosedit', compact('user', 'uriAtual', 'produto', 'linhaProd'));
    }

    public function editLinha(Linha $linha)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $produtos = $linha->sabor()->get();
        
        return view('pedidos.linhaedit', compact('user', 'uriAtual', 'linha', 'produtos' ));
    }

    public function delProd(Sabor $produto)
    {
        $produto->delete();
        
        return redirect()->route('produtos');
    }

    public function delLinha(Linha $linha)
    {
        $linha->delete();
        
        return redirect()->route('produtos');
    }

    // PEDIDOS

    public function viewPedidos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $pedidos = Pedido::all();

        //este metodo é para ordenar em modo decrescente, procurar na documentação por sotBy(), link no comentario abaixo
        //https://laravel.com/docs/5.8/collections#method-sortby
        $listaPedidos = $pedidos->sortByDesc('id'); 
        $listaPedidos->values()->all();

        return view('pedidos.index', compact('user', 'uriAtual', 'listaPedidos' ));
    }
    

    public function novoPedido(Request $request)
    {

        $pedido = new Pedido();
        $pedido->status = $request->status;
        $pedido->save();

        return redirect()->route('pedidos.novoItemPedido');
    }

    public function novoItemPedido()
    {

        $user = Auth()->user();
        $uriAtual = $this->request->route()->uri();

        $pegarTodosPedidos = Pedido::all();
        $pegarUltimoPedidoInserido = $pegarTodosPedidos->last();

        $linhas = Linha::all();
        $sabores = Sabor::all();


        return view('pedidos.pedidoNew', compact('user', 'uriAtual', 'pegarUltimoPedidoInserido', 'linhas', 'sabores'));
    }

    public function deletePedido(Pedido $pedido)
    {
        $pedido->delete();
        
        return redirect()->route('pedidos');
    }
}
