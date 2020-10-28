<?php

namespace App\Http\Controllers\Financeiro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DespesasController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function viewDespesas()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('despesas.index', compact('user', 'uriAtual'));
    }
}
