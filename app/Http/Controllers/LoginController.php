<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Redirect;
use Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);
 
        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            return Redirect::to('/dashboard/clientes');
        }
 
        Session::flash('error_message', 'E-mail ou senha incorreto(s).');
        return Redirect::to('/');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
