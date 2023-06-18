<div class="row flex-nowrap">
  <div class="bg-green-animal min-vh-100 d-flex flex-column justify-content-between">
    <div class="bg-green-animal p-3">
      <a class="d-flex align-items-center text-decoration-none mt-4">
        <img class="img-sidebar" src="{{ asset('public/img/testeside.png') }}" alt="">
        <span class="d-none fs-3 d-sm-inline custom-title-sidebar ms-3 text-white">Animal Sphere</span>
      </a>
      <div class="align-items-left mt-5">
        <p class="text-white fs-5">MENU DO PAINEL</p>
      </div>
      <ul class="nav nav-pills flex-column mt-3">
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('dashboard/clientes') }}" class="nav-link text-white {{ $currentPage == 'client' ? 'active-sidebar' : '' }}">
            <i data-feather="users"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Clientes</span>
          </a>
        </li>
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('dashboard/animais') }}" class="nav-link text-white {{ $currentPage == 'animal' ? 'active-sidebar' : '' }}">
            <i data-feather="heart"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Animais</span>
          </a>
        </li>
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('dashboard/fluxo-caixa') }}" class="nav-link text-white {{ $currentPage == 'cash-flow' ? 'active-sidebar' : '' }}">
            <i data-feather="dollar-sign"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Financeiro</span>
          </a>
        </li>
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('dashboard/receituario') }}" class="nav-link text-white {{ $currentPage == 'prescription' ? 'active-sidebar' : '' }}">
            <i data-feather="file-text"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Receituário</span>
          </a>
        </li>
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('dashboard/agendamentos') }}" class="nav-link text-white {{ $currentPage == 'schedules' ? 'active-sidebar' : '' }}">
            <i data-feather="calendar"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Agendamentos</span>
          </a>
        </li>
        <li class="nav-item py-3 py-sm-0 mt-3">
          <a href="{{ url('/logout') }}" class="nav-link text-white">
            <i data-feather="power"></i>
            <span class="fs-5 ms-3 d-none d-sm-inline custom-title-sidebar">Sair da Conta</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>