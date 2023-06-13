<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FluxoCaixa;
use Redirect;
use DateTime;

class FluxoCaixaController extends Controller
{
    public function index()
    {
        $fluxo_caixas = FluxoCaixa::all();
        foreach ($fluxo_caixas as $fluxo_caixa) {
            $fluxo_caixa->date_formated = (new DateTime($fluxo_caixa->date))->format('d/m/Y');
            $fluxo_caixa->type_formated = $fluxo_caixa->type == 0 ? 'Saída' : 'Entrada';
            $fluxo_caixa->json_data = $fluxo_caixa->toJson();
        }
        return view('dashboard/fluxo-caixa/index', [
            'currentPage' => 'cash-flow',
            'fluxo_caixas' => $fluxo_caixas,
        ]);
    }

    public function create(Request $request)
    {
        info($request->all());
        $validated = $request->validate([
            'nome' => ['required', 'string'],
            'tipo' => ['required', 'string'],
            'data' => ['required', 'date'],
            'valor' => ['required', 'decimal:2'],
        ]);

        $fluxo_caixa = new FluxoCaixa();
        $fluxo_caixa->name           = $request->nome;
        $fluxo_caixa->type           = $request->tipo;
        $fluxo_caixa->date           = $request->data;
        $fluxo_caixa->value          = $request->valor;
        $fluxo_caixa->save();
        info($request->all());

        return Redirect::to('/dashboard/fluxo-caixa');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nome' => ['required', 'string'],
            'tipo' => ['required', 'string'],
            'data' => ['required', 'date'],
            'valor' => ['required', 'decimal:2'],
        ]);

        $fluxo_caixa = FluxoCaixa::where('id', $request->fluxo_caixa_id)->first();
        $fluxo_caixa->name           = $request->nome;
        $fluxo_caixa->type           = $request->tipo;
        $fluxo_caixa->date           = $request->data;
        $fluxo_caixa->value          = $request->valor;
        $fluxo_caixa->save();

        return Redirect::to('/dashboard/fluxo-caixa');
    }

    public function remove(Request $request)
    {
        FluxoCaixa::where('id', $request->fluxo_caixa_id)->delete();
        return Redirect::to('/dashboard/fluxo-caixa');
    }
}
