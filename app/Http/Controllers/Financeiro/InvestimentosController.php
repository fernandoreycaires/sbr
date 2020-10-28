<?php

namespace App\Http\Controllers\Financeiro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestimentosController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function viewInvestimentos()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('investimentos.index', compact('user', 'uriAtual'));
    }
}
