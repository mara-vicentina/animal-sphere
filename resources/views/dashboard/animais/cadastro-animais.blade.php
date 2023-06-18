<!-- Modal -->
<div class="modal fade" id="animais" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="px-4 pt-4">
        <div class="row">
            <div class="col-md-11">
                <h1 class="modal-title fs-4 text-center sec-color">Cadastro de Animal</h1>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
      </div>
      <div class="modal-body px-4">
        <form method="POST" action="{{ url('/animal') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <label class="form-label dark-gray">Nome Completo</label>
                <input type="text" class="form-control light-gray" name="nome_animal" placeholder="Insira o nome completo">
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Espécie</label>
                <input type="text" class="form-control light-gray" name="especie" placeholder="Insira a espécie">
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Raça</label>
                <input type="text" class="form-control light-gray" name="raca" placeholder="Insira a raça">
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Sexo</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" value="0">
                  <label class="form-check-label light-gray">Macho</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexo" value="1">
                  <label class="form-check-label light-gray">Fêmea</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Animal Castrado?</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="animal_castrado" value="1">
                  <label class="form-check-label light-gray">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="animal_castrado" value="0">
                  <label class="form-check-label light-gray">Não</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Tutor</label>
                <select class="form-select light-gray" name="cliente_id">
                  <option selected disabled>Selecione um Tutor</option>
                  @foreach ($clientes as $cliente)
                  <option value="{{ $cliente->id }}">[ID: {{ $cliente->id }}] {{ $cliente->name }}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label dark-gray">Data de Nascimento</label>
                <input type="date" class="form-control light-gray" name="data_nascimento" placeholder="Insira a espécie">
            </div>
            
            @include('alerts/error-message')
            @include('alerts/error-validation')

            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary form-control custom-button">Cadastrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

