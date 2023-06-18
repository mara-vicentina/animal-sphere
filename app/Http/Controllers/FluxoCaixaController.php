<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FluxoCaixa;
use Redirect;
use DateTime;
use Validator;

class FluxoCaixaController extends Controller
{
    public function index()
    {
        $fluxo_caixas = FluxoCaixa::all();
        
        $soma_saida   = 0;
        $soma_entrada = 0;
        $soma_total   = 0;
        
        foreach ($fluxo_caixas as $fluxo_caixa) {
            $fluxo_caixa->date_formated = (new DateTime($fluxo_caixa->date))->format('d/m/Y');
            $fluxo_caixa->type_formated = $fluxo_caixa->type == 0 ? 'Saída' : 'Entrada';
            $fluxo_caixa->json_data     = $fluxo_caixa->toJson();
            
            if($fluxo_caixa->type == 0){
                $soma_saida += $fluxo_caixa->value;
            } else {
                $soma_entrada += $fluxo_caixa->value;
            }
        }
        $soma_total += $soma_entrada - $soma_saida;
        
        return view('dashboard/fluxo-caixa/index', [
            'currentPage'   => 'cash-flow',
            'fluxo_caixas'  => $fluxo_caixas,
            'soma_saida'    => $soma_saida,
            'soma_entrada'  => $soma_entrada,
            'soma_total'    => $soma_total,
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome'  => ['required', 'string'],
            'tipo'  => ['required', 'string'],
            'data'  => ['required', 'date'],
            'valor' => ['required', 'decimal:2'],
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/fluxo-caixa?open_create_modal_fluxo_caixa=true')->with('errors', $validator->messages());
        };

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
        $validator = Validator::make($request->all(), [
            'nome'  => ['required', 'string'],
            'tipo'  => ['required', 'string'],
            'data'  => ['required', 'date'],
            'valor' => ['required', 'decimal:2'],
        ]);

        if ($validator->fails()) {
            return redirect('/dashboard/fluxo-caixa?open_edit_modal_fluxo_caixa=' . $request->fluxo_caixa_id)->with('errors', $validator->messages());
        };

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
