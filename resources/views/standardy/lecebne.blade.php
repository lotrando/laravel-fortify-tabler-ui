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
        <!-- Page title actions buttons -->
        <div class="ms-auto d-print-none col-auto">
          <div class="btn-list">
            <div class="d-flex justify-content-end">
              <button class="btn btn-yellow me-2 hover-shadow" id="showbtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M13 5h8"></path>
                  <path d="M13 9h5"></path>
                  <path d="M13 15h8"></path>
                  <path d="M13 19h5"></path>
                  <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                  <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                </svg>
                Zobrazit vše
              </button>
              <button class="btn btn-muted hover-shadow" <button class="btn btn-tabler btn-icon" id="closebtn">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <line x1="4" y1="6" x2="20" y2="6"></line>
                  <line x1="4" y1="12" x2="20" y2="12"></line>
                  <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
                Skrýt vše
              </button>
            </div>
          </div>
        </div>
        <!-- Wrapper End -->

        <div class="container-fluid">
          <div class="col-lg-12">
            <div id="standard-1" data-bs-parent="#accordion-standard">
              <div class="accordion mt-2" id="accordion-example">
                @foreach ($documents as $document)
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-{{ $document->position }}">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $document->position }}" type="button" aria-expanded="false">
                      {{ $document->accordion_name }}
                    </button>
                  </h2>
                  <div class="accordion-collapse collapse" id="collapse-{{ $document->position }}" data-bs-parent="#accordion-standard" style="">
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
                              <a class="text-primary d-block text-decoration-none" href="{{ url('standardy/lecebne/'.$document->file) }}" target="_blank">
                                <h3 style="margin-bottom: 0;">{{ $document->name }}</h3>
                              </a>
                              <div class="d-block text-muted text-truncate mt-n1">{{ $document->description }}</div>
                            </div>
                            <div class="col-auto">
                              @if ( Carbon\Carbon::parse($document->updated_at)->addDays(15) >= Carbon\Carbon::now())
                              <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Aktualizováno</span>
                              @endif
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
                              <span class="text-muted">aktualiziváno: {{ Carbon\Carbon::parse($document->updated_at)->diffForHumans() }}</span>
                            </div>
                          </div>
                          @foreach ($document->addon as $add)
                          <div class="row align-items-center mb-1">
                            <div class="col-auto">
                              <a href="{{ url('standardy/lecebne/'.$add->file) }}">
                                <span class="avatar">
                                  <img src="{{ asset('img/files/pdf-add.png') }}" alt="PDF - Příloha standardu">
                                </span>
                              </a>
                            </div>
                            <div class="col text-truncate">
                              <a class="text-primary d-block d-block text-primary text-decoration-none" href="{{ url('standardy/'.$add->file) }}">
                                <h3 style="margin-bottom: 0;">{{ $document->name }} - příloha : {{ $add->name }}</h3>
                              </a>
                              <div class="d-block text-muted text-truncate mt-n1">{{ $add->description }}</div>
                            </div>
                            <div class="col-auto">
                              @if ( $document->updated_at->addDays(15) >= Carbon\Carbon::now())
                              <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Aktualizováno</span>
                              @endif
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
      <script>
        $(document).ready(function() {
    $('.accordion-collapse').removeClass('show');
    $('#showbtn').click(function() {
      $('.accordion-collapse').addClass('show');
      $('.accordion-button').removeClass('collapsed');
    });
    $('#closebtn').click(function() {
      $('.accordion-collapse').removeClass('show');
      $('.accordion-button').addClass('collapsed');
    });
  });
      </script>

      @endsection
