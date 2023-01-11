@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/zmeny.png') }}" rel="shortcut icon">
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
            {{ __($category) ?? '' }}
          </div>
          <h2 class="page-title text-primary">
            {{ __($title) ?? '' }}
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page body -->
  <div class="page-body">
    <div class="container-fluid">
      <div class="h-100">
        <div class="col-4">
          <div class="card" style="height: 35rem">
            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
              <div class="divide-y">
                <div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-2">
                        <div class="card-body p-1">
                          <div class="accordion" id="accordion-example">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true">
                                  Accordion Item #1
                                </button>
                              </h2>
                              <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                  <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                                  Accordion Item #2
                                </button>
                              </h2>
                              <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                                  Accordion Item #3
                                </button>
                              </h2>
                              <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false">
                                  Accordion Item #4
                                </button>
                              </h2>
                              <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                  <strong>This is the fourth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="card card-md">
                          <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                              <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7"></path>
                                <line x1="10" y1="10" x2="10.01" y2="10"></line>
                                <line x1="14" y1="10" x2="14.01" y2="10"></line>
                                <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="row align-items-center">
                              <div class="col-10">
                                <h3 class="h1">Tabler Icons</h3>
                                <div class="markdown text-muted">
                                  All icons come from the Tabler Icons set and are MIT-licensed. Visit
                                  <a href="https://tabler-icons.io" target="_blank" rel="noopener">tabler-icons.io</a>,
                                  download any of the 2979 icons in SVG, PNG or&nbsp;React and use them in your favourite design tools.
                                </div>
                                <div class="mt-3">
                                  <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Download icons</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <div>
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                </div>
                                <div class="col">
                                  <div class="card-title">Dunn Slane</div>
                                  <div class="card-subtitle">Research Nurse</div>
                                </div>
                              </div>
                            </div>
                            <div class="card-actions">
                              <div class="dropdown">
                                <a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                  </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                  <a class="dropdown-item" href="#">Edit user</a>
                                  <a class="dropdown-item" href="#">Change permissions</a>
                                  <a class="dropdown-item text-danger" href="#">Delete user</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-body p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none" width="400" height="200" viewBox="0 0 400 200" fill="transparent" stroke="var(--tblr-border-color, #b8cef1)">
                              <line x1="0" y1="0" x2="400" y2="200"></line>
                              <line x1="0" y1="200" x2="400" y2="0"></line>
                            </svg>
                          </div>
                        </div>
                      </div>
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
                      <div class="card mb-2 mt-2 shadow-sm">
                        <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
                          <h3 class="text-muted m-0 mb-0 p-0">
                            {{ __('Aktualizace AKORD') }}
                          </h3>
                        </div>
                        <div class="card-body p-2">
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
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Wrapper End -->
  @endsection

  @section('scripts')
  <script src="{{ asset('') }}"></script>
  @endsection
