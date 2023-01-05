@extends('layouts.blank')

@section('favicon')
  <link type="image/png" href="{{ asset('img/akreditacni.png') }}" rel="shortcut icon">
@endsection

@section('content')
  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Page pre-title -->
          <div class="col">
            <h2 class="page-title text-primary">
              {{ __($category) ?? '' }}
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Wrapper End -->

    <!-- Page body -->
    <div class="page-body">
      <div class="container-fluid">
        <div class="h-100 d-flex align-items-center justify-content-center">

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-blue-lt">
            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#tabs-home-13" role="tab" aria-selected="true">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg class="icon icon-tabler me-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z"></path>
                    <path d="M5 21h14"></path>
                  </svg>
                  Akreditační
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-profile-13" role="tab" aria-selected="false" tabindex="-1">
                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  </svg>
                  Ošetřovatelské
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#tabs-activity-13" role="tab" aria-selected="false" tabindex="-1">
                  <!-- Download SVG icon from http://tabler-icons.io/i/activity -->
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 12h4l3 8l4 -16l3 8h4"></path>
                  </svg>
                  Léčebné
                </a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active show" id="tabs-home-13" role="tabpanel">
                <h2>Akreditační standardy</h2>
                <div class="card-body">
                  <div class="accordion" id="accordion-example">

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-1" type="button" aria-expanded="false">
                          1. Bezpečnostní cíle
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="collapse-1" data-bs-parent="#accordion-example" style="">
                        <div class="accordion-body pt-0">
                          <div class="list-group list-group-flush list-group-hoverable">

                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="#">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-reset d-block" href="#">Akreditační standard č. 2.1</a>
                                  <div class="d-block text-muted text-truncate mt-n1">Správná identifikace pacientů</div>
                                </div>
                                <div class="col-auto">
                                  <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                  </svg>
                                  <span class="text-muted">revize č. 3</span>
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">23. 02. 2022</span>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="#">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-reset d-block" href="#">Akreditační standard č. 1.2</a>
                                  <div class="d-block text-muted text-truncate mt-n1">Efektivní komunikace</div>
                                </div>
                                <div class="col-auto">
                                  <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                  </svg>
                                  <span class="text-muted">revize č. 7</span>
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">10. 10. 2022</span>
                                </div>
                              </div>
                            </div>

                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                  <a href="#">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-reset d-block" href="#">Akreditační standard č. 1.3</a>
                                  <div class="d-block text-muted text-truncate mt-n1">Zvýšení bezpečí u rizikových léků</div>
                                </div>
                                <div class="col-auto">
                                  <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                  </svg>
                                  <span class="text-muted">revize č. 2</span>
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">01. 02. 2022</span>
                                </div>
                              </div>
                            </div>

                            <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                              <div class="list-group-item">
                                <div class="row align-items-center">
                                  <div class="col-auto">
                                  </div>
                                  <div class="col-auto">
                                    <a href="#">
                                      <span class="avatar">
                                        <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                      </span>
                                    </a>
                                  </div>
                                  <div class="col text-truncate">
                                    <a class="text-reset d-block" href="#">Příloha č.1</a>
                                    <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                  </div>
                                  <div class="col-auto">
                                    <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                    </svg>
                                    <span class="text-muted">revize č. 2</span>
                                    <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                      <line x1="16" y1="3" x2="16" y2="7"></line>
                                      <line x1="8" y1="3" x2="8" y2="7"></line>
                                      <line x1="4" y1="11" x2="20" y2="11"></line>
                                      <line x1="11" y1="15" x2="12" y2="15"></line>
                                      <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                    <span class="text-muted">01. 02. 2022</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <a href="#">
                                  <span class="avatar">
                                    <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                  </span>
                                </a>
                              </div>
                              <div class="col text-truncate">
                                <a class="text-reset d-block" href="#">Akreditační standard č. 1.4</a>
                                <div class="d-block text-muted text-truncate mt-n1">Zvýšení bezpečí u rizikových léků</div>
                              </div>
                              <div class="col-auto">
                                <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                                <span class="text-muted">revize č. 2</span>
                                <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                  <line x1="16" y1="3" x2="16" y2="7"></line>
                                  <line x1="8" y1="3" x2="8" y2="7"></line>
                                  <line x1="4" y1="11" x2="20" y2="11"></line>
                                  <line x1="11" y1="15" x2="12" y2="15"></line>
                                  <line x1="12" y1="15" x2="12" y2="18"></line>
                                </svg>
                                <span class="text-muted">01. 02. 2022</span>
                              </div>
                            </div>
                          </div>

                          <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                </div>
                                <div class="col-auto">
                                  <a href="#">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-reset d-block" href="#">Příloha č.1</a>
                                  <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                </div>
                                <div class="col-auto">
                                  <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                  </svg>
                                  <span class="text-muted">revize č. 2</span>
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">01. 02. 2022</span>
                                </div>
                              </div>
                            </div>
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col-auto">
                                </div>
                                <div class="col-auto">
                                  <a href="#">
                                    <span class="avatar">
                                      <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                    </span>
                                  </a>
                                </div>
                                <div class="col text-truncate">
                                  <a class="text-reset d-block" href="#">Příloha č.1</a>
                                  <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                </div>
                                <div class="col-auto">
                                  <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                  </svg>
                                  <span class="text-muted">revize č. 2</span>
                                  <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                  </svg>
                                  <span class="text-muted">01. 02. 2022</span>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2" type="button" aria-expanded="false">
                          2. Dostupnost a kontinuita péče
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="collapse-2" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                              <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-1" type="button" aria-expanded="false">
                                1. Bezpečnostní cíle
                              </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse-1" data-bs-parent="#accordion-example" style="">
                              <div class="accordion-body pt-0">
                                <div class="list-group list-group-flush list-group-hoverable">

                                  <div class="list-group list-group-flush list-group-hoverable">

                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <a href="#">
                                            <span class="avatar">
                                              <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                            </span>
                                          </a>
                                        </div>
                                        <div class="col text-truncate">
                                          <a class="text-reset d-block" href="#">Akreditační standard č. 2.1</a>
                                          <div class="d-block text-muted text-truncate mt-n1">Správná identifikace pacientů</div>
                                        </div>
                                        <div class="col-auto">
                                          <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                          </svg>
                                          <span class="text-muted">revize č. 3</span>
                                          <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                          </svg>
                                          <span class="text-muted">23. 02. 2022</span>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <a href="#">
                                            <span class="avatar">
                                              <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                            </span>
                                          </a>
                                        </div>
                                        <div class="col text-truncate">
                                          <a class="text-reset d-block" href="#">Akreditační standard č. 1.2</a>
                                          <div class="d-block text-muted text-truncate mt-n1">Efektivní komunikace</div>
                                        </div>
                                        <div class="col-auto">
                                          <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                          </svg>
                                          <span class="text-muted">revize č. 7</span>
                                          <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                          </svg>
                                          <span class="text-muted">10. 10. 2022</span>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                          <a href="#">
                                            <span class="avatar">
                                              <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                            </span>
                                          </a>
                                        </div>
                                        <div class="col text-truncate">
                                          <a class="text-reset d-block" href="#">Akreditační standard č. 1.3</a>
                                          <div class="d-block text-muted text-truncate mt-n1">Zvýšení bezpečí u rizikových léků</div>
                                        </div>
                                        <div class="col-auto">
                                          <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                          </svg>
                                          <span class="text-muted">revize č. 2</span>
                                          <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                          </svg>
                                          <span class="text-muted">01. 02. 2022</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-auto">
                                        </div>
                                        <div class="col-auto">
                                          <a href="#">
                                            <span class="avatar">
                                              <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                            </span>
                                          </a>
                                        </div>
                                        <div class="col text-truncate">
                                          <a class="text-reset d-block" href="#">Příloha č.1</a>
                                          <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                        </div>
                                        <div class="col-auto">
                                          <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                          </svg>
                                          <span class="text-muted">revize č. 2</span>
                                          <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                               stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                            <line x1="16" y1="3" x2="16" y2="7"></line>
                                            <line x1="8" y1="3" x2="8" y2="7"></line>
                                            <line x1="4" y1="11" x2="20" y2="11"></line>
                                            <line x1="11" y1="15" x2="12" y2="15"></line>
                                            <line x1="12" y1="15" x2="12" y2="18"></line>
                                          </svg>
                                          <span class="text-muted">01. 02. 2022</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="list-group-item">
                                  <div class="row align-items-center">
                                    <div class="col-auto">
                                      <a href="#">
                                        <span class="avatar">
                                          <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                        </span>
                                      </a>
                                    </div>
                                    <div class="col text-truncate">
                                      <a class="text-reset d-block" href="#">Akreditační standard č. 1.4</a>
                                      <div class="d-block text-muted text-truncate mt-n1">Zvýšení bezpečí u rizikových léků</div>
                                    </div>
                                    <div class="col-auto">
                                      <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                      </svg>
                                      <span class="text-muted">revize č. 2</span>
                                      <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                      </svg>
                                      <span class="text-muted">01. 02. 2022</span>
                                    </div>
                                  </div>
                                </div>

                                <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                                  <div class="list-group-item">
                                    <div class="row align-items-center">
                                      <div class="col-auto">
                                      </div>
                                      <div class="col-auto">
                                        <a href="#">
                                          <span class="avatar">
                                            <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                          </span>
                                        </a>
                                      </div>
                                      <div class="col text-truncate">
                                        <a class="text-reset d-block" href="#">Příloha č.1</a>
                                        <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                      </div>
                                      <div class="col-auto">
                                        <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                        </svg>
                                        <span class="text-muted">revize č. 2</span>
                                        <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                          <line x1="16" y1="3" x2="16" y2="7"></line>
                                          <line x1="8" y1="3" x2="8" y2="7"></line>
                                          <line x1="4" y1="11" x2="20" y2="11"></line>
                                          <line x1="11" y1="15" x2="12" y2="15"></line>
                                          <line x1="12" y1="15" x2="12" y2="18"></line>
                                        </svg>
                                        <span class="text-muted">01. 02. 2022</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="list-group-item">
                                    <div class="row align-items-center">
                                      <div class="col-auto">
                                      </div>
                                      <div class="col-auto">
                                        <a href="#">
                                          <span class="avatar">
                                            <img src="{{ asset('img/files/pdf.svg') }}" alt="PDF">
                                          </span>
                                        </a>
                                      </div>
                                      <div class="col text-truncate">
                                        <a class="text-reset d-block" href="#">Příloha č.1</a>
                                        <div class="d-block text-muted text-truncate mt-n1">Riziková léčiva s podobným názvem, balením ( injekční forma )</div>
                                      </div>
                                      <div class="col-auto">
                                        <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                        </svg>
                                        <span class="text-muted">revize č. 2</span>
                                        <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                          <line x1="16" y1="3" x2="16" y2="7"></line>
                                          <line x1="8" y1="3" x2="8" y2="7"></line>
                                          <line x1="4" y1="11" x2="20" y2="11"></line>
                                          <line x1="11" y1="15" x2="12" y2="15"></line>
                                          <line x1="12" y1="15" x2="12" y2="18"></line>
                                        </svg>
                                        <span class="text-muted">01. 02. 2022</span>
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

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-prava" type="button" aria-expanded="false">
                          3. Práva pacientů a jejich blízkých
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="collapse-prava" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to
                          style
                          each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
                          CSS or
                          overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                          limit
                          overflow.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-diagnostik" type="button" aria-expanded="false">
                          4. Diagnostická péče
                        </button>
                      </h2>
                      <div class="accordion-collapse collapse" id="collapse-diagnostik" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                          <strong>This is the fourth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to
                          style
                          each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
                          CSS or
                          overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does
                          limit
                          overflow.
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-profile-13" role="tabpanel">
                <h4>Profile tab</h4>
                <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
              </div>
              <div class="tab-pane" id="tabs-activity-13" role="tabpanel">
                <h4>Activity tab</h4>
                <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
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
