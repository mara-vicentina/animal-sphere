<!-- Modal -->
<div class="modal fade" id="edicao-clientes" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="px-4 pt-4">
        <div class="row">
            <div class="col-md-11">
                <h1 class="modal-title fs-4 text-center sec-color"">Edição de Cliente</h1>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
      </div>
      <div class="modal-body px-4">
        <form method="POST" action="{{ url('/client') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="client_id" value="">
            <div class="mb-3">
                <label class="form-label dark-gray">Nome Completo</label>
                <input type="text" class="form-control light-gray" name="nome_completo" placeholder="Insira seu nome completo">
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">E-mail</label>
                <input type="email" class="form-control light-gray" name="email" placeholder="Insira seu e-mail">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label class="form-label dark-gray">CPF</label>
                    <input type="text" class="form-control light-gray" name="cpf" placeholder="Insira seu CPF">
                </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Telefone</label>
                        <input type="text" pattern="^[0-9\s\(\)\-\+]{6,25}$" placeholder="Insira seu telefone" maxlength="25" class="form-control light-gray" name="telefone">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h2 class="fs-5 sec-color">Endereço</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label dark-gray">CEP</label>
                        <input type="text" class="form-control light-gray" name="cep" placeholder="Insira seu CEP">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Rua</label>
                        <input type="text" class="form-control light-gray" name="rua" placeholder="Insira sua rua">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Número</label>
                        <input type="text" class="form-control light-gray" name="numero" placeholder="Insira seu número">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Complemento</label>
                        <input type="text" class="form-control light-gray" name="complemento" placeholder="Insira seu complemento">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Bairro</label>
                        <input type="text" class="form-control light-gray" name="bairro" placeholder="Insira seu bairro">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Cidade</label>
                        <input type="text" class="form-control light-gray" name="cidade" placeholder="Insira sua cidade">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Estado</label>
                        <input type="text" class="form-control light-gray" name="estado" placeholder="Insira seu estado">
                    </div>
                </div>
            </div>

            @include('alerts/error-message')
            @include('alerts/error-validation')
            
            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary form-control custom-button">Salvar Dados</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

