<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('pages/animais/index');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
            'confirmacao_senha' => ['required', 'same:senha'],
            'telefone' => ['required', 'numeric', 'max_digits:11'],
            'nome_completo' => ['required', 'string'],
        ]);

        $usuario = new User();
        $usuario->name          = $request->nome_completo;
        $usuario->email         = $request->email;
        $usuario->password      = bcrypt($request->senha);
        $usuario->phone         = $request->telefone;
        $usuario->save();

        return Redirect::to('/');
    }
}
