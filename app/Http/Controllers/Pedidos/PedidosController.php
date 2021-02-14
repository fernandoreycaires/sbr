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
}
