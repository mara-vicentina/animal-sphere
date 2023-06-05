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
        <div class="card mx-5 p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="title-head">Nome Completo</th>
                        <th scope="col" class="title-head">E-mail</th>
                        <th scope="col" class="title-head">CPF</th>
                        <th scope="col" class="title-head">Telefone</th>
                        <th scope="col" class="title-head">Rua</th>
                        <th scope="col" class="title-head">Número</th>
                        <th scope="col" class="title-head">Bairro</th>
                        <th scope="col" class="title-head">Cidade</th>
                        <th scope="col" class="title-head">Estado</th>
                        <th scope="col" class="title-head">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="subtitle-list fw-normal">Teste</th>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td class="subtitle-list">Teste</td>
                        <td>
                            <i data-feather="edit" class="d-inline edit-info"></i>
                            <i data-feather="trash-2" class="d-inline delete-info"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('pages/clientes/cadastro-clientes')
    </div>
</div>

