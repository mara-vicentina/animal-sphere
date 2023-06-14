<!-- Modal -->
<div class="modal fade" id="edicao-fluxo-caixa" tabindex="-1" aria-hidden="true">
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
        <form method="POST" action="{{ url('/cash-flow') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="fluxo_caixa_id" value="">
            <div class="row">
                <div class="col-6">
                <div class="mb-3">
                    <label class="form-label dark-gray">Nome</label>
                    <input type="text" class="form-control light-gray" name="nome" placeholder="Insira o nome">
                </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Data de Nascimento</label>
                        <input type="date" class="form-control light-gray" name="data" placeholder="Insira a data">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label dark-gray d-block">Tipo</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" value="1">
                            <label class="form-check-label light-gray">Entrada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" value="0">
                            <label class="form-check-label light-gray">Saída</label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label dark-gray">Valor</label>
                        <input type="text" class="form-control light-gray" name="valor" placeholder="Insira o valor">
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

