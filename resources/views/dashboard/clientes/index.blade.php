@extends('dashboard/template')
 
@section('page-content')
<div class="card m-5 shadow">
    <div class="row">
        <div class="col-md-10 col-sm-8">
            <div class="card-body fs-5 mid-gray">
                Clientes
            </div>
        </div>
        <div class="col-md-2 col-sm-4">
            <div class="card-body fs-5">
                <button type="button" class="btn btn-primary custom-button" data-bs-toggle="modal" data-bs-target="#clientes">
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
                        <th class="col title-head text-left">E-mail</th>
                        <th class="col title-head text-left">CPF</th>
                        <th class="col title-head text-left">Telefone</th>
                        <th class="col title-head text-left">Rua</th>
                        <th class="col title-head text-left">Número</th>
                        <th class="col title-head text-left">Bairro</th>
                        <th class="col title-head text-left">Cidade</th>
                        <th class="col title-head text-left">Estado</th>
                        <th class="col title-head text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td class="col subtitle-list text-left">{{ $cliente->name }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->email }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->cpf }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->phone }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->street }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->number }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->neighborhood }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->city }}</td>
                        <td class="col subtitle-list text-left">{{ $cliente->state }}</td>
                        <td class="col subtitle-list text-left">
                            <div class="row">
                                <div class="col-6 p-0">
                                    <button class="btn btn-link" onclick="editClient({{ $cliente->id }}, '{{ $cliente->json_data }}')">
                                        <i data-feather="edit" class="d-inline edit-info"></i>
                                    </button>
                                </div>
                                <div class="col-6 p-0">
                                    <form method="POST" action="{{ url('/client') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">
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
    </div>
</div>

@include('dashboard/clientes/cadastro-clientes')
@include('dashboard/clientes/edicao-clientes')
@endsection