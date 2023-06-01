
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="px-4 pt-4">
      <div class="row">
          <div class="col-md-11">
            <h1 class="modal-title fs-5 text-center main-color" id="exampleModalLabel">Acesse sua conta</h1>
          </div>
          <div class="col-md-1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      </div>
      <div class="modal-body px-4">
        <form>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <label for="email" class="form-label dark-gray">E-mail</label>
                <input type="email" class="form-control light-gray" id="email" name="email" placeholder="Insira seu e-mail">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label dark-gray">Senha</label>
                <input type="password" class="form-control light-gray" id="senha" name="senha" placeholder="Insira sua senha">
            </div>
            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary form-control custom-button">Entrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

