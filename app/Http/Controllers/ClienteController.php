<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Cliente;
use App\Models\Animal;
use Redirect;
use Validator;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        foreach ($clientes as $cliente) {
            $cliente->json_data = $cliente->toJson();
        }

        return view('dashboard/clientes/index', [
            'currentPage' => 'client',
            'clientes'    => $clientes,
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome_completo' => ['required', 'string'],
            'email'         => ['required', 'email'],
            'telefone'      => ['required', 'string', 'max:11'],
            'cpf'           => ['required', 'string', 'max:11'],
            'cep'           => ['required', 'string', 'max:8'],
            'rua'           => ['required', 'string'],
            'numero'        => ['required', 'numeric', 'max_digits:10'],
            'complemento'   => ['required', 'string'],
            'bairro'        => ['required', 'string'],
            'cidade'        => ['required', 'string'],
            'estado'        => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/clientes?open_create_modal_client=true')->with('errors', $validator->messages());
        };

        $cliente = new Cliente();
        $cliente->name          = $request->nome_completo;
        $cliente->email         = $request->email;
        $cliente->phone         = $request->telefone;
        $cliente->cpf           = $request->cpf;
        $cliente->cep           = $request->cep;
        $cliente->street        = $request->rua;
        $cliente->number        = $request->numero;
        $cliente->complement    = $request->complemento;
        $cliente->neighborhood  = $request->bairro;
        $cliente->city          = $request->cidade;
        $cliente->state         = $request->estado;
        $cliente->user_id       = Auth::user()->id;
        $cliente->save();

        return Redirect::to('/dashboard/clientes');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome_completo' => ['required', 'string'],
            'email'         => ['required', 'email'],
            'telefone'      => ['required', 'string', 'max:11'],
            'cpf'           => ['required', 'string', 'max:11'],
            'cep'           => ['required', 'string', 'max:8'],
            'rua'           => ['required', 'string'],
            'numero'        => ['required', 'numeric', 'max_digits:10'],
            'complemento'   => ['required', 'string'],
            'bairro'        => ['required', 'string'],
            'cidade'        => ['required', 'string'],
            'estado'        => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/clientes?open_edit_modal_client=' . $request->client_id)->with('errors', $validator->messages());
        };

        $cliente = Cliente::where('id', $request->client_id)->first();
        $cliente->name          = $request->nome_completo;
        $cliente->email         = $request->email;
        $cliente->phone         = $request->telefone;
        $cliente->cpf           = $request->cpf;
        $cliente->cep           = $request->cep;
        $cliente->street        = $request->rua;
        $cliente->number        = $request->numero;
        $cliente->complement    = $request->complemento;
        $cliente->neighborhood  = $request->bairro;
        $cliente->city          = $request->cidade;
        $cliente->state         = $request->estado;
        $cliente->user_id       = Auth::user()->id;
        $cliente->save();

        return Redirect::to('/dashboard/clientes');
    }

    public function remove(Request $request)
    {
        Animal::where('client_id', $request->cliente_id)->delete();
        Cliente::where('id', $request->cliente_id)->delete();
        return Redirect::to('/dashboard/clientes');
    }
}
