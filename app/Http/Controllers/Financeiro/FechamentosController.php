<?php

namespace App\Http\Controllers\Financeiro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FechamentosController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function viewFechamentos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('fechamentos.index', compact('user', 'uriAtual'));
    }

    public function formAdicionar()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('fechamentos.adicionar', compact('user', 'uriAtual'));
    }

    public function listFechamentos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('fechamentos.listar', compact('user', 'uriAtual'));
    }
}
