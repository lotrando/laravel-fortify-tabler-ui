<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $category ?? 'Intranet' }} - {{ $title ?? 'KHN' }}</title>
  @yield('favicon')

  <link href="{{ asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fixedHeader.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/scroller.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      color: #666;
    }
  </style>
</head>

<body>
  <!-- Header Start -->
  @include('layouts.partials.header')
  <!-- Header End -->

  <!-- Navigation Start -->
  @include('layouts.partials.navigation')
  <!-- Navigation End -->
  <div class="page">
    <div class="page-wrapper">
      <!-- Page header -->

      <!-- Page body -->
      <div class="page-body">
        <div class="container-fluid">
          <main>
            @yield('main')
          </main>
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-fluid">
          <div class="row align-items-center flex-row-reverse text-center">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mx-3">
                <li class="list-inline-item"><a class="link-secondary" href="./docs/">Documentation</a></li>
                <li class="list-inline-item"><a class="link-secondary" href="./license.html">License</a></li>
                <li class="list-inline-item"><a class="link-secondary" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a class="link-secondary" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg class="icon text-pink icon-filled icon-inline" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                      </path>
                    </svg>
                    Sponsor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-lg-0 mx-3">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright © 2022 pro Karvinskou hornickou nemocnici a.s. vytvořil
                  <a class="link-secondary" href=".">Klika Miroslav</a>
                </li>
                <li class="list-inline-item">
                  <a class="link-secondary" href="./changelog.html" rel="noopener">
                    v1.0.1
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <section>
    @yield('modals')
  </section>

  @include('layouts.partials.logout')

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
  <script src="{{ asset('js/czech-string.js') }}"></script>
  <script src="{{ asset('js/moment-with-locales.js') }}"></script>

  @yield('scripts')
</body>

</html>
