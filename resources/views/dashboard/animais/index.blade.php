@extends('dashboard/template')
 
@section('page-content')
<div class="card m-5 shadow">
    <div class="row">
        <div class="col-md-10 col-sm-8">
            <div class="card-body fs-5 mid-gray">
                Animais
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card-body fs-5">
                <button type="button" class="btn btn-primary custom-button" data-bs-toggle="modal" data-bs-target="#animais">
                <i data-feather="plus" style="width:19px; height:19px;"></i>    
                Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="card mx-5 p-2 shadow">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col title-head text-left">Nome Completo</th>
                        <th class="col title-head text-left">Espécie</th>
                        <th class="col title-head text-left">Raça</th>
                        <th class="col title-head text-left">Sexo</th>
                        <th class="col title-head text-left">Animal Castrado</th>
                        <th class="col title-head text-left">Tutor</th>
                        <th class="col title-head text-left">Data de Nascimento</th>
                        <th class="col title-head text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animais as $animal)
                    <tr>
                        <td class="col subtitle-list text-left">{{ $animal->name }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->species }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->race }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->sex_formated }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->castrated_animal_formated }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->client_name }}</td>
                        <td class="col subtitle-list text-left">{{ $animal->birth_date_formated }}</td>
                        <td class="col subtitle-list text-left">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <button class="btn btn-link d-inline-block p-0" onclick="editAnimal({{ $animal->id }}, '{{ $animal->json_data }}')">
                                        <i data-feather="edit" class="d-inline edit-info"></i>
                                    </button>
                                </div>
                                <div class="col-6 p-0">
                                    <form method="POST" action="{{ url('/animal') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="animal_id" value="{{ $animal->id }}">
                                        <button type="submit" class="btn btn-link d-inline-block p-0">
                                            <i data-feather="trash-2" class="d-inline delete-info"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('dashboard/animais/cadastro-animais')
@include('dashboard/animais/edicao-animais')
@endsection