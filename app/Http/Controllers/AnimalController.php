<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Cliente;
use Redirect;
use DateTime;

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        $clientes = Cliente::get(['id', 'name']);
        
        foreach ($animais as $animal) {
            $animal->birth_date_formated = (new DateTime($animal->birth_date))->format('d/m/Y');
            $animal->sex_formated = $animal->sex == 0 ? 'Macho' : 'Fêmea';
            $animal->castrated_animal_formated = $animal->castrated_animal == 0 ? 'Não' : 'Sim';
            $animal->client_name = Cliente::whereId($animal->client_id)->first()->name;
            $animal->json_data = $animal->toJson();
        }

        return view('dashboard/animais/index', [
            'currentPage' => 'animal',
            'clientes' => $clientes,
            'animais' => $animais,
        ]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'nome_animal' => ['required', 'string'],
            'especie' => ['required', 'string'],
            'raca' => ['required', 'string'],
            'sexo' => ['required', 'string'],
            'animal_castrado' => ['required', 'string'],
            'cliente_id' => ['required', 'integer'],
            'data_nascimento' => ['required', 'date'],
        ]);

        $animal = new Animal();
        $animal->name              = $request->nome_animal;
        $animal->species           = $request->especie;
        $animal->race              = $request->raca;
        $animal->sex               = $request->sexo;
        $animal->castrated_animal  = $request->animal_castrado;
        $animal->client_id         = $request->cliente_id;
        $animal->birth_date        = $request->data_nascimento;
        $animal->save();

        return Redirect::to('/dashboard/animais');
    }

    public function update(Request $request)
    {
        info("dados", $request->all());
        $validated = $request->validate([
            'nome_animal' => ['required', 'string'],
            'especie' => ['required', 'string'],
            'raca' => ['required', 'string'],
            'sexo' => ['required', 'string'],
            'animal_castrado' => ['required', 'string'],
            'cliente_id' => ['required', 'integer'],
            'data_nascimento' => ['required', 'date'],
        ]);
        $animal = Animal::where('id', $request->animal_id)->first();
        $animal->name              = $request->nome_animal;
        $animal->species           = $request->especie;
        $animal->race              = $request->raca;
        $animal->sex               = $request->sexo;
        $animal->castrated_animal  = $request->animal_castrado;
        $animal->client_id         = $request->cliente_id;
        $animal->birth_date        = $request->data_nascimento;
        $animal->save();

        return Redirect::to('/dashboard/animais');
    }

    public function remove(Request $request)
    {
        Animal::where('id', $request->animal_id)->delete();
        return Redirect::to('/dashboard/animais');
    }
}
