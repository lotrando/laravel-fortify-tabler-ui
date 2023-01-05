@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="{{ asset('img/akord.png') }}" rel="shortcut icon">
@endsection

@section('content')
  <div class="page-wrapper scrollable">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Page pre-title -->
          <div class="col">
            <div class="page-pretitle text-primary">
              {{ __($category) ?? '' }}
            </div>
            <h2 class="page-title text-primary">
              {{ __($title) ?? '' }}
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
              <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-success" href="#">
                Success modal
              </a>
              <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-warning" href="#">
                Warning modal
              </a>
              <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-danger" href="#">
                Danger modal
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page header End -->
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

                  21.09. 2022 od 12:00 dojde k aktualizace NIS AKORD. Může docházet k výpadku NIS. Pokud se vám po aktualizaci zobrazí hlášení o starší verzi programu, je nutné
                  spustit
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
    <!-- Page body end -->
  </div>
  <!-- Wrapper End -->
@endsection

@section('modals')
  {{-- Success Modal --}}
  <div class="modal fade" id="modal-success" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-status bg-success"></div>
        <div class="modal-body py-4 text-center">
          <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
          <svg class="icon text-green icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
               fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <circle cx="12" cy="12" r="9" />
            <path d="M9 12l2 2l4 -4" />
          </svg>
          <h3>Payment succedeed</h3>
          <div class="text-muted">Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                  Go to dashboard
                </a></div>
              <div class="col"><a class="btn btn-success w-100" data-bs-dismiss="modal" href="#">
                  View invoice
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Warning Modal --}}
  <div class="modal fade" id="modal-warning" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-status bg-warning"></div>
        <div class="modal-body py-4 text-center">
          <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
          <svg class="icon text-warning icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
               stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>Are you sure?</h3>
          <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                  Cancel
                </a></div>
              <div class="col"><a class="btn btn-warning w-100" data-bs-dismiss="modal" href="#">
                  Ok
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Danger Modal --}}
  <div class="modal fade" id="modal-danger" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
          <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
               stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>Are you sure?</h3>
          <div class="text-muted">Do you really want to remove 84 files? What you've done cannot be undone.</div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col"><a class="btn w-100" data-bs-dismiss="modal" href="#">
                  Cancel
                </a></div>
              <div class="col"><a class="btn btn-danger w-100" data-bs-dismiss="modal" href="#">
                  Delete 84 items
                </a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
