<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function viewPerfil()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('perfil.index', compact('user', 'uriAtual'));
    }
}
