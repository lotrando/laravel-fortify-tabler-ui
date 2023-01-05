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
    <!-- Page header End -->

    <!-- Page body -->
    <div class="page-body">
      <div class="container-fluid">
        <div class="row row-cards">
          <div class="col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h3 class="card-title">Youtube Player</h3>
                <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h3 class="card-title">Vimeo Player</h3>
                <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Wrapper End -->
@endsection
