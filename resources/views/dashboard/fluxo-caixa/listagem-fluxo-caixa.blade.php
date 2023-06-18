<div class="row flex-nowrap g-0 bg-light w-100">
    <div class="col-12">
    <div class="min-vh-100 d-flex flex-column">
        <div class="col-12">
            <div class="card rounded-0 border-0 shadow-sm">
                <div class="card-body fs-5">
                    Olá, João.
                </div>
            </div>
        </div>
        <div class="card m-5">
            <div class="row">
                <div class="col-md-10 col-sm-8">
                    <div class="card-body fs-5">
                        Fluxo de Caixa
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="card-body fs-5">
                        <button type="button" class="btn btn-primary custom-button" data-bs-toggle="modal" data-bs-target="#fluxo-caixa">
                        <i data-feather="plus" style="width:19px; height:19px;"></i>    
                        Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mx-5 p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col title-head text-left">Nome Completo</th>
                        <th class="col title-head text-left">Tipo</th>
                        <th class="col title-head text-left">Valor</th>
                        <th class="col title-head text-left">Data</th>
                        <th class="col title-head text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="subtitle-list fw-normal">Teste</th>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td>
                        <div class="row">
                                <div class="col-6 p-0">
                                    <button class="btn btn-link" onclick="">
                                        <i data-feather="edit" class="d-inline edit-info"></i>
                                    </button>
                                </div>
                                <div class="col-6 p-0">
                                    <form method="POST" action="{{ url('/client') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-link">
                                            <i data-feather="trash-2" class="d-inline delete-info"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('pages/fluxo-caixa/cadastro-fluxo-caixa')
    </div>
</div>

