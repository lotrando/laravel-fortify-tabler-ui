@extends('layouts.blank')

@section('favicon')
<link type="image/png" href="{{ asset('img/'.$categorie->category_icon) ?? '' }}" rel="shortcut icon">
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
      <div class="accordion shadow-sm" id="accordion-example">
        @foreach ($documents as $document)
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
                      <a href="{{ url('standardy/'.$document->file) }}" target="_blank">
                        <span class="avatar">
                          <img src="{{ asset('img/files/pdf.png') }}" alt="PDF - Standard">
                        </span>
                      </a>
                    </div>
                    <div class="col text-truncate">
                      <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/'.$document->file) }}">
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
                  <div class="row align-items-center mb-2">
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
@endsection

@section('scripts')
<script src="{{ asset('') }}"></script>
@endsection
