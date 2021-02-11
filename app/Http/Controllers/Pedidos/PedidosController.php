<?php

namespace App\Http\Controllers\Pedidos;

use App\Http\Controllers\Controller;
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

    public function viewProdutos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('pedidos.produtos', compact('user', 'uriAtual'));
    }
}
