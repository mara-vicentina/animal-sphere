@extends('dashboard/template')
 
@section('page-content')
<div class="card m-5 shadow">
    <div class="row">
        <div class="col-md-10 col-sm-7">
            <div class="card-body fs-5 mid-gray">
                Fluxo de Caixa da Clínica
            </div>
        </div>
        <div class="col-md-2 col-sm-5">
            <div class="card-body fs-5">
                <button type="button" class="btn btn-primary custom-button" data-bs-toggle="modal" data-bs-target="#fluxo-caixa">
                <i data-feather="plus" style="width:19px; height:19px;"></i>    
                Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>
<div class="card mx-5 p-2 shadow overflow-auto custom-card">
    <table class="table">
        <thead>
            <tr>
                <th class="col title-head text-left">Nome</th>
                <th class="col title-head text-left">Tipo</th>
                <th class="col title-head text-left">Valor</th>
                <th class="col title-head text-left">Data</th>
                <th class="col title-head text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fluxo_caixas as $fluxo_caixa)
            <tr>
                <td class="col subtitle-list text-left">{{ $fluxo_caixa->name }}</td>
                <td class="col subtitle-list text-left">{{ $fluxo_caixa->type_formated }}</td>
                <td class="col subtitle-list text-left">{{ $fluxo_caixa->value }}</td>
                <td class="col subtitle-list text-left">{{ $fluxo_caixa->date_formated }}</td>
                <td class="col subtitle-list text-left">
                    <div class="row">
                        <div class="col-6 p-0">
                            <button id="button-edit-fluxo-caixa-{{ $fluxo_caixa->id }}" class="btn btn-link" onclick="editFluxoCaixa({{ $fluxo_caixa->id }}, '{{ $fluxo_caixa->json_data }}')">
                                <i data-feather="edit" class="d-inline edit-info"></i>
                            </button>
                        </div>
                        <div class="col-6 p-0">
                            <form method="POST" action="{{ url('/cash-flow') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="fluxo_caixa_id" value="{{ $fluxo_caixa->id }}">
                                <button type="submit" class="btn btn-link">
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
<div class="card mx-5 shadow">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="card-body py-2">
                <p class="title-head d-inline-block">Entradas:</p>
                <p class="dark-gray d-inline-block">{{ $soma_entrada }} reais</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="card-body py-2">
                <p class="title-head d-inline-block">Saídas:</p>
                <p class="dark-gray d-inline-block">{{ $soma_saida }} reais</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-2">
            <div class="card-body py-2">
                <p class="title-head d-inline-block">Total em Caixa:</p>
                <p class="dark-gray d-inline-block">{{ $soma_total }} reais</p>
            </div>
        </div>
    </div>
</div>

@include('dashboard/fluxo-caixa/cadastro-fluxo-caixa')
@include('dashboard/fluxo-caixa/edicao-fluxo-caixa')
@endsection