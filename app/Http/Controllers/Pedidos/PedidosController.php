<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
use App\Linha;
use App\Pedido;
use App\Pedido_Item;
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

        $pedidos = Pedido::all(); //Busca os Pedidos 

        //este metodo abaixo é para ordenar em modo decrescente, procurar na documentação por sotBy(), link no comentario abaixo
        //https://laravel.com/docs/5.8/collections#method-sortby
        $listaPedidos = $pedidos->sortByDesc('id'); 
        $listaPedidos->values()->all();

        
        //Exemplo de soma  (Funciona mas não vai servir neste caso)
        //$sum = Model::where('status', 'paid')->sum('sum_field');
        //Exemplo funcional, de um dd na variavel "$soma_qtd_solicitado " abaixo 
        //$pedido_itens = Pedido_Item::all(); // Busca os itens do pedido
        //$soma_qtd_solicitado = Pedido_Item::where('pedido', '15')->sum('qtd_solicitado');
        
        return view('pedidos.index', compact('user', 'uriAtual', 'listaPedidos'));
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
    
    public function inserirProdutos(Pedido $pedido,Request $request)
    {
        //Foi muuuito dificil aprender essa parte sozinho, MAASS eu consegui !!!!
        //Esta parte é a inserção de Itens na tabela Pedido_Itens

        $contador = $request->i;
        $valor_final = 0;
        $volume_final = 0;
        
        for ($i = 0; $i < $contador; $i++){

            $produto = new Pedido_Item();
            $produto->pedido = $request->num_pedido[$i];
            $produto->linha = $request->num_linha[$i];
            $produto->nome_linha = $request->nome_linha[$i];
            $produto->produto = $request->num_produto[$i];
            $produto->nome_produto = $request->nome_produto[$i];
            $produto->valor = $request->valor[$i];
            $produto->qtd_estoque = $request->qtd_estoque[$i];
            $produto->qtd_solicitado = $request->qtd_comprar[$i];
            $produto->valor_total_solicitado = $request->valor[$i] * $request->qtd_comprar[$i]; //Aqui é feito o calculo do valor total de cada sabor solicitado 
            
            $somando_valor = $produto->valor_total_solicitado; //Aqui é armazenado o valor do calculo do pedido do produto
            $somando_volume = $produto->qtd_solicitado; //Aqui é armazenado o valor da quantidade solicitada de cada volume
            
            $produto->save();
            
            $volume_final  += $somando_volume; // aqui é feito a soma das quantidades de cada volume ao final de cada loop e armazenada na variavel
            $valor_final += $somando_valor ; //aqui é feito a soma do valor do pedido de cado produto ao final de cada loop feito e armazenada na variavel

        } 

        //Aqui é feito a edição na tabela Pedidos para a inserção do valor "solicitado" total e quantidade de volumes total do pedido 
        $pedido->valor_solicitado = $valor_final ;
        $pedido->volume_solicitado = $volume_final;
        $pedido->save();
        
        return redirect()->route('pedidos');
    }

    //AQUI VISUALIZA O PEDIDO
    public function visualizarPedido(Pedido $pedido)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $itensDoPedido = $pedido->itens()->get();

        //dd($itensDoPedido);
        
        return view('pedidos.pedidoView', compact('user', 'uriAtual', 'pedido', 'itensDoPedido'));
    }

    //AQUI IMPRIME O PEDIDO
    public function visualizarPedidoPrint(Pedido $pedido)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $itensDoPedido = $pedido->itens()->get();
        
        return view('pedidos.pedidoViewPrint', compact('user', 'uriAtual', 'pedido', 'itensDoPedido'));
    }

    //AQUI MOSTRA TELA QUE EDITA O PEDIDO
    public function editaPedido(Pedido $pedido)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $itensDoPedido = $pedido->itens()->get();

        //dd($itensDoPedido);

        return view('pedidos.pedidoEdit', compact('user', 'uriAtual', 'pedido', 'itensDoPedido'));
    }

    //AQUI EDITA O PEDIDO E OS ITENS PARA INSERIR OS VALORES E ITENS LIBERADOS PELO OGGI
    public function editaPedidoDb(Pedido $pedido, Request $request)
    {
                
        $somando_valor = 0;
        $somando_volume = 0;
        $valor_final = 0;
        $volume_final = 0;
                
        for ($i = 0; $i < $request->contador; $i++){
            
            $itensDoPedido = Pedido_Item::where('id', $request->id_item[$i])->first(); //Aqui instancia os Itens do pedido
            $itensDoPedido->qtd_liberado = $request->qtd_lib[$i];
            $itensDoPedido->valor_total_liberado = $request->valor[$i] * $request->qtd_lib[$i]; //Aqui é feito o calculo do valor total de cada item liberado 
            
            $somando_valor = $itensDoPedido->valor_total_liberado; //Aqui é armazenado o valor do calculo do pedido do produto
            $somando_volume = $itensDoPedido->qtd_liberado; //Aqui é armazenado o valor da quantidade solicitada de cada volume
            
            $itensDoPedido->save();
            
            $volume_final  += $somando_volume; // aqui é feito a soma das quantidades de cada volume ao final de cada loop e armazenada na variavel
            $valor_final += $somando_valor; //aqui é feito a soma do valor do pedido de cado produto ao final de cada loop feito e armazenada na variavel

        }

        //Aqui é feito a edição na tabela Pedidos para a inserção do valor "solicitado" total e quantidade de volumes total do pedido 
        $pedido->valor_liberado = $valor_final ;
        $pedido->volume_liberado = $volume_final ;
        $pedido->status = "Fechado" ;
        $pedido->num_pedido_oggi = $request->pedidoOggi ;
        $pedido->observacao = $request->observacao ;
        $pedido->save();

        return redirect()->route('pedidos');
    }

    public function deletePedido(Pedido $pedido)
    {
        $pedido->delete();
        
        return redirect()->route('pedidos');
    }
}
