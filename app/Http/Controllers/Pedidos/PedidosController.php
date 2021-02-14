<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Linha;
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

    public function viewPedidos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('pedidos.index', compact('user', 'uriAtual'));
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
}
