<?php

namespace App\Http\Controllers\Colaboradores;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }


    public function viewUsuarios()
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        $usuarios = User::all();

        return view('usuarios.index', compact('user', 'uriAtual', 'usuarios'));
    }


    public function dadosUsuario(User $usuario)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('usuarios.usuario', compact('user', 'uriAtual', 'usuario'));
    }

    public function novoUsuario(User $usuario)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('usuarios.novoUsuario', compact('user', 'uriAtual', 'usuario'));
    }

    public function salvarUsuario(Request $request)
    {
        $user = new User();

        $user->name = $request->inputNome;
        $user->email = $request->inputEmail;
        $user->password = Hash::make($request->inputPassword);

        $user->save();

        return redirect()->route('usuarios');
    }

    public function editarFormUsuario(User $usuario)
    {
        $user = Auth()->user();

        $uriAtual = $this->request->route()->uri();

        return view('usuarios.editUsuario',  compact('user', 'uriAtual', 'usuario'));
    }

    public function editarUsuario(User $usuario, Request $request)
    {
        $usuario->name = $request->inputNome;

        //Fazendo a validação do campo de email
        if(filter_var($request->inputEmail, FILTER_VALIDATE_EMAIL)){
            $usuario->email = $request->inputEmail;
        }

        //fazendo validação do campo senha, caso esteja vazio
        if(!empty($request->inputPassword)){
            $usuario->password = Hash::make($request->inputPassword);
        }

        $usuario->save();

        return redirect()->route('usuarios');
    }

    public function deletarUsuario(User $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios');
    }
}
