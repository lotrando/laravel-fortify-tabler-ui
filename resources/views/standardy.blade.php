@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/'.$categorie->category_icon) ?? '' }}" rel="shortcut icon">
@endsection

@section('content')
<div class="page-wrapper mb-4">
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
            {{ __($categorie->category_name) ?? '' }}
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
      <div class="accordion shadow-sm" id="accordion-standard">

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-1" aria-expanded="true">
              1
            </button>
          </h2>
          <div id="standard-1" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents1 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rehabilitacni/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/akreditacni/rehabilitacni/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-2" aria-expanded="true">
              2
            </button>
          </h2>
          <div id="standard-2" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents2 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/osetrovatelske/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/osetrovatelske/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-3" aria-expanded="true">
              3
            </button>
          </h2>
          <div id="standard-3" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents3 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/lecebne/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/lecebne/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-4" aria-expanded="true">
              4
            </button>
          </h2>
          <div id="standard-4" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents4 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/specialni/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/specialni/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-5" aria-expanded="true">
              5
            </button>
          </h2>
          <div id="standard-5" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents5 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/operacni/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/operacni/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-6" aria-expanded="true">
              6
            </button>
          </h2>
          <div id="standard-6" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents6 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/anesteziologicke/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/anesteziologicke/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-7" aria-expanded="true">
              7
            </button>
          </h2>
          <div id="standard-7" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents7 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-8" aria-expanded="true">
              8
            </button>
          </h2>
          <div id="standard-8" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents8 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-9" aria-expanded="true">
              9
            </button>
          </h2>
          <div id="standard-9" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents9 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-10" aria-expanded="true">
              10
            </button>
          </h2>
          <div id="standard-10" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents10 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-11" aria-expanded="true">
              11
            </button>
          </h2>
          <div id="standard-11" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents11 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="main-heading-12">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#standard-12" aria-expanded="true">
              12
            </button>
          </h2>
          <div id="standard-12" class="accordion-collapse collapse m-2" data-bs-parent="#accordion-standard">
            <div class="accordion" id="accordion-example">
              @foreach ($documents12 as $document)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $document->position }}">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                    {{ $document->position }} - {{ $document->accordion_name }}
                  </button>
                </h2>
                <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-example" style="">
                  <div class="accordion-body pt-0">
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center mb-3">
                          <div class="col-auto">
                            <a href="{{ url('standardy/rdg/'.$document->file) }}" target="_blank">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/rdg/'.$document->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                            </a>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @foreach ($document->addon as $add)
                        <div class="row align-items-center mb-1">
                          <div class="col-auto">
                            <a href="{{ url('standardy/'.$add->file) }}">
                              <span class="avatar">
                                <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                              </span>
                            </a>
                          </div>
                          <div class="col text-truncate">
                            <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                              <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                            </a>
                            <div class="d-block text-muted text-truncate mt-n1">{{ $add->descriptioon }}</div>
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
                            <span class="text-muted">Vytvořeno: {{ Carbon\Carbon::parse($document->crated_at)->format('d. m. Y') }}</span>
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
                            <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
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
