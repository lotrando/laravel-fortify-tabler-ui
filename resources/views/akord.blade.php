@extends('layouts.blank')

@section('header')
  {{-- Header Start --}}
  <header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-fluid">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href="https://www.khn.cz" target="_blank">
          <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Logo KHN a.s.">
        </a>
      </h1>
      <div class="navbar-nav order-md-last flex-row">
        <div class="nav-item d-none d-md-flex me-3">
          <div class="btn-list">
            <a class="btn hover-shadow-sm" href="" rel="noreferrer">
              <svg class="icon text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                   stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="4"></circle>
                <circle cx="12" cy="12" r="9"></circle>
                <line x1="15" y1="15" x2="18.35" y2="18.35"></line>
                <line x1="9" y1="15" x2="5.65" y2="18.35"></line>
                <line x1="5.65" y1="5.65" x2="9" y2="9"></line>
                <line x1="18.35" y1="5.65" x2="15" y2="9"></line>
              </svg>
              {{ __('Helpdesk') }}
            </a>
            @guest
              <a class="btn hover-shadow-sm" href="{{ route('register') }}" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon icon-tabler icon-tabler-login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                  </path>
                  <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                </svg>
                {{ __('Register') }}
              </a>
              <a class="btn hover-shadow-sm" href="{{ route('login') }}" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon icon-tabler icon-tabler-lock-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <rect x="5" y="11" width="14" height="10" rx="2">
                  </rect>
                  <circle cx="12" cy="16" r="1"></circle>
                  <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
                </svg>
                {{ __('Login') }}
              </a>
            @endguest
          </div>
        </div>
        <div class="nav-item dropdown">
          @auth
            <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#" aria-label="Open user menu">
              <div class="d-none d-xl-block px-2">
                <div>{{ Auth::user()->name ?? '' }}</div>
                <div class="small text-muted mt-1">{{ Auth::user()->personal_number ?? '' }}</div>
              </div>
              <span class="avatar avatar-sm" style="background-image: url(./foto/{{ Auth::user()->personal_number . '.jpg' ?? 'no_image.png' }})"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" id="logoutModal">Logout</a>
            </div>
          @endauth
        </div>
      </div>
    </div>
  </header>
  {{-- Header End --}}
@endsection

@section('content')
  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Page pre-title -->
          <div class="col">
            <div class="page-pretitle text-primary">
              {{ __($category) }}
            </div>
            <h2 class="page-title text-primary">
              {{ __($title) }}
            </h2>
          </div>
          <!-- Page title actions buttons -->
          <div class="ms-auto d-print-none col-auto">
            <div class="btn-list">
              <span class="d-none d-sm-inline">
                <a class="btn" href="#">
                  {{ __('Secondary') }}
                </a>
              </span>
              <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal_primary">
                {{ __('Primary') }}
              </a>
              <a class="btn btn-warning d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal_warning">
                {{ __('Warning') }}
              </a>
              <a class="btn btn-danger d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal_danger">
                {{ __('Danger') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Wrapper End -->

  <!-- Page body -->
  <div class="page-body">
    <div class="container-fluid">
      <div class="row g-2 justify-content-center">
        <div class="col-6">
          <div class="card mb-2 mt-2 shadow-sm">
            <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
              <h3 class="text-muted m-0 mb-0 p-0">
                {{ __('Akord – klávesové zkratky') }}
              </h3>
            </div>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-6">
                  <span id="form_result_window"></span>
                </div>
              </div>
              <p class="text-justified">Znalost klávesových zkratek vede k vyšší produktivitě.
                Nechte se inspirovat</p>
            </div>
          </div>
          <div class="card mb-2 mt-2 shadow-sm">
            <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
              <h3 class="text-muted m-0 mb-0 p-0">
                {{ __('Aktualizace AKORD') }}
              </h3>
            </div>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-6">
                  <span id="form_result_window"></span>
                </div>
              </div>
              <p class="text-justified">

                21.09. 2022 od 12:00 dojde k aktualizace NIS AKORD. Může docházet k výpadku NIS. Pokud se vám po aktualizaci zobrazí hlášení o starší verzi programu, je nutné spustit
                ikonu aktualizace Akordu na ploše ručně.

                Aktualizace opravuje:
                Inventura skladu

                Byla opravena chyba ve formuláři Inventury skladu, kdy se chybně zobrazovala položka KOD
                Infuze

                Ukončeno se kopíruje při kopírování infuze, která již byla ukončena. Jedná se o chybu, která je opravena
                Amb.dekurs - kopie předchozí zprávy

                Ve formuláři ambulantní dekurs přibylo nové tlačítko na dolní liště vnořeného editoru Kopie
                Jiné druhy léčby
                Na záložce Jiné druhy léčby ve formuláři Medikací byla dopracována možnost měnit pořadí jednotlivých ordinací - posun pomocí šipek - nahoru a dolů
              </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-2 mt-2 shadow-sm">
            <div class="card-header align-items-center justify-content-between bg-lime-lt d-flex">
              <h3 class="text-muted m-0 mb-0 p-0">
                {{ __('Aktualizace - 30.12.2022') }}
              </h3>
            </div>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-6">
                  <span id="form_result_window"></span>
                </div>
              </div>
              <p class="text-justified">Změny</p>
            </div>
          </div>
          <div class="card mb-2 mt-2 shadow-sm">
            <div class="card-header align-items-center justify-content-between bg-warning-lt d-flex">
              <h3 class="text-muted m-0 mb-0 p-0">
                {{ __('Aktualizace - 20.12.2022') }}
              </h3>
            </div>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-6">
                  <span id="form_result_window"></span>
                </div>
              </div>
              <p class="text-justified">Změny:</p>
            </div>
          </div>
          <div class="card mb-2 mt-2 shadow-sm">
            <div class="card-header align-items-center justify-content-between bg-warning-lt d-flex">
              <h3 class="text-muted m-0 mb-0 p-0">
                {{ __('Aktualizace - 12.12.2022') }}
              </h3>
            </div>
            <div class="card-body p-2">
              <div class="row">
                <div class="col-6">
                  <span id="form_result_window"></span>
                </div>
              </div>
              <p class="text-justified">Změny:</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  {{-- Delete Employee Photo --}}
  <div class="modal modal-blur fade" id="modalReport" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-warning"></div>
        <div class="modal-body py-4 text-center">
          <div class="row">
            <div class="col-12">
              <span id="form_result_modal"></span>
            </div>
          </div>
          <svg class="icon icon-tabler icon-tabler-photo-off text-warning icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="3" y1="3" x2="21" y2="21"></line>
            <line x1="15" y1="8" x2="15.01" y2="8"></line>
            <path d="M19.121 19.122a3 3 0 0 1 -2.121 .878h-10a3 3 0 0 1 -3 -3v-10c0 -.833 .34 -1.587 .888 -2.131m3.112 -.869h9a3 3 0 0 1 3 3v9">
            </path>
            <path d="M4 15l4 -4c.928 -.893 2.072 -.893 3 0l5 5"></path>
            <path d="M16.32 12.34c.577 -.059 1.162 .162 1.68 .66l2 2"></path>
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">
            {{ __('Do you really want to remove photo?') }}<br>{{ __('This operation cannot be undone') }}
          </div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col">
                <button class="btn btn-muted w-100 hover-shadow" data-bs-dismiss="modal">
                  {{ __('Cancel') }}
                </button>
              </div>
              <div class="col">
                <button class="btn btn-warning w-100 hover-shadow" id="remove_button"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('') }}"></script>
@endsection
