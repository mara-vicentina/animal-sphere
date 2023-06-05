<!-- Modal -->
<div class="modal fade" id="clientes" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="px-4 pt-4">
        <div class="row">
            <div class="col-md-11">
                <h1 class="modal-title fs-4 text-center sec-color"">Cadastro de Cliente</h1>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
      </div>
      <div class="modal-body px-4">
        <form>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <label for="nome_cliente" class="form-label dark-gray">Nome Completo</label>
                <input type="text" class="form-control light-gray" id="nome_cliente" name="nome_cliente" placeholder="Insira seu nome completo">
            </div>
            <div class="mb-3">
                <label for="email_cliente" class="form-label dark-gray">E-mail</label>
                <input type="email" class="form-control light-gray" id="email_cliente" name="email_cliente" placeholder="Insira seu e-mail">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label for="cpf_cliente" class="form-label dark-gray">CPF</label>
                    <input type="text" class="form-control light-gray" id="cpf_cliente" name="cpf_cliente" placeholder="Insira seu CPF">
                </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="telefone_cliente" class="form-label dark-gray">Telefone</label>
                        <input type="text" pattern="^[0-9\s\(\)\-\+]{6,25}$" placeholder="Insira seu telefone" maxlength="25" class="form-control light-gray" id="telefone_cliente" name="telefone_cliente">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h2 class="fs-5 sec-color">Endereço</h2>
                <label for="cep_cliente" class="form-label dark-gray">CEP</label>
                <input type="text" class="form-control light-gray" id="cep_cliente" name="cep_cliente" placeholder="Insira seu CEP">
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="rua_cliente" class="form-label dark-gray">Rua</label>
                        <input type="text" class="form-control light-gray" id="rua_cliente" name="rua_cliente" placeholder="Insira sua rua">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="numero_cliente" class="form-label dark-gray">Número</label>
                        <input type="text" class="form-control light-gray" id="numero_cliente" name="numero_cliente" placeholder="Insira seu número">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="complemento_cliente" class="form-label dark-gray">Complemento</label>
                        <input type="text" class="form-control light-gray" id="complemento_cliente" name="complemento_cliente" placeholder="Insira seu complemento">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="bairro_cliente" class="form-label dark-gray">Bairro</label>
                        <input type="text" class="form-control light-gray" id="bairro_cliente" name="bairro_cliente" placeholder="Insira seu bairro">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="mb-3">
                        <label for="cidade_cliente" class="form-label dark-gray">Cidade</label>
                        <input type="text" class="form-control light-gray" id="cidade_cliente" name="cidade_cliente" placeholder="Insira sua cidade">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="estado_cliente" class="form-label dark-gray">Estado</label>
                        <input type="text" class="form-control light-gray" id="estado_cliente" name="estado_cliente" placeholder="Insira seu estado">
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary form-control custom-button">Salvar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

