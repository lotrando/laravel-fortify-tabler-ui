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
      <div class="row row-cards mb-3">
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-auto">
                  <span class="bg-primary text-white avatar">
                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                      <path d="M12 3v3m0 12v3"></path>
                    </svg>
                  </span>
                </div>
                <div class="col">
                  <div class="font-weight-medium">
                    Akreditační
                  </div>
                  <div class="text-muted">
                    Počet dokumentů: {{ $akreditacni->count() }}
                  </div>
                  <div class="text-muted">
                    Počet příloh: {{ $akreditacni->count() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="card">
        <div class="card-header bg-muted-lt">
          <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" data-bs-toggle="tab" href="#tabs-home-13" role="tab" aria-selected="true" e>
                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                  <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                  <circle cx="6" cy="14" r="3"></circle>
                  <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                </svg>
                Akreditační
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#tabs-profile-13" role="tab" aria-selected="false" tabindex="-1">
                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1"></path>
                  <path d="M8 15a6 6 0 1 0 12 0v-3"></path>
                  <path d="M11 3v2"></path>
                  <path d="M6 3v2"></path>
                  <circle cx="20" cy="10" r="2"></circle>
                </svg>
                Ošetřovatelské
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#tabs-activity-13" role="tab" aria-selected="false" tabindex="-1">
                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784"></path>
                  <path d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z">
                  </path>
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
                        1. Bezpčnostní cíle
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse" id="collapse-1" data-bs-parent="#accordion-example" style="">
                      <div class="accordion-body pt-0">
                        <div class="list-group list-group-flush list-group-hoverable">

                          @foreach ($akreditacni as $document)
                          <div class="list-group-item">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <a href="#">
                                  <span class="avatar">
                                    <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                                  </span>
                                </a>
                              </div>
                              <div class="col text-truncate">
                                <a class="text-reset d-block" href="#">{{ $document->name }}</a>
                                <div class="d-block text-muted text-truncate mt-n1">{{ $document->descriptioon }}</div>
                              </div>
                              <div class="col-auto">
                                <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                                <span class="text-muted">revize č. {{ $document->revision }}</span>
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
                                <span class="text-muted">{{ $document->status }}</span>
                              </div>
                            </div>
                            @foreach ($document->addon as $add)
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <a href="#">
                                  <span class="avatar">
                                    <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                  </span>
                                </a>
                              </div>
                              <div class="col text-truncate">
                                <a class="text-reset d-block" href="#">{{ $add->name }}</a>
                                <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
                              </div>
                              <div class="col-auto">
                                <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                                <span class="text-muted">revize č. {{ $add->revision }}</span>
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
                                <span class="text-muted">{{ $add->status }}</span>
                              </div>
                            </div>
                            @endforeach
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="tab-pane" id="tabs-profile-13" role="tabpanel">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-1">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2" type="button" aria-expanded="false">
                    1. Oše
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-2" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">

                      @foreach ($osetrovatelske as $document)
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-reset d-block" href="#">{{ $document->name }}</a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $document->descriptioon }}</div>
                          </div>
                          <div class="col-auto">
                            <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                            <span class="text-muted">revize č. {{ $document->revision }}</span>
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
                            <span class="text-muted">{{ $document->status }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-reset d-block" href="#">{{ $add->name }}</a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
                          </div>
                          <div class="col-auto">
                            <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                            <span class="text-muted">revize č. {{ $add->revision }}</span>
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
                            <span class="text-muted">{{ $add->status }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tabs-activity-13" role="tabpanel">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-4">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-diagnostik" type="button" aria-expanded="false">
                    1. Léčebné
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-diagnostik" data-bs-parent="#accordion-example">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">

                      @foreach ($lecebne as $document)
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-reset d-block" href="#">{{ $document->name }}</a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $document->descriptioon }}</div>
                          </div>
                          <div class="col-auto">
                            <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                            <span class="text-muted">revize č. {{ $document->revision }}</span>
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
                            <span class="text-muted">{{ $document->status }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <a href="#">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-reset d-block" href="#">{{ $add->name }}</a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
                          </div>
                          <div class="col-auto">
                            <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                            </svg>
                            <span class="text-muted">revize č. {{ $add->revision }}</span>
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
                            <span class="text-muted">{{ $add->status }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      @endforeach
                    </div>
                  </div>
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
