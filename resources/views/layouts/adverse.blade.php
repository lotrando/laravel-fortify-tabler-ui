<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('Adverse events') }}</title>
  <link type="image/png" href="{{ asset('img/employees.png') }}" rel="shortcut icon">
  <link href="{{ asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css') }}"
        rel="stylesheet">
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
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-fluid">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                type="button" aria-controls="navbar-menu" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{ url('/') }}">
            <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Logo KHN a.s.">
          </a>
        </h1>
        <div class="navbar-nav order-md-last flex-row">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
              <a class="btn" href="" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon text-red" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="4"></circle>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="15" y1="15" x2="18.35" y2="18.35"></line>
                  <line x1="9" y1="15" x2="5.65" y2="18.35"></line>
                  <line x1="5.65" y1="5.65" x2="9" y2="9"></line>
                  <line x1="18.35" y1="5.65" x2="15" y2="9"></line>
                </svg>
                Helpdesk
              </a>
              <a class="btn" href="{{ route('register') }}" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon icon-tabler icon-tabler-login" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path
                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                  </path>
                  <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                </svg>
                Register
              </a>
              <a class="btn" href="{{ route('login') }}" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon icon-tabler icon-tabler-lock-open"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <rect x="5" y="11" width="14" height="10"
                        rx="2"></rect>
                  <circle cx="12" cy="16" r="1"></circle>
                  <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
                </svg>
                Login
              </a>
            </div>
          </div>
          <div class="nav-item dropdown">
            @auth
              <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                 href="#" aria-label="Open user menu">
                <span class="avatar avatar-sm"
                      style="background-image: url(./foto/{{ Auth::user()->personal_number . '.jpg' ?? 'no_image.png' }})"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>{{ Auth::user()->name ?? '' }}</div>
                  <div class="small text-muted mt-1">{{ Auth::user()->personal_number ?? '' }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a class="dropdown-item" href="#">Status</a>
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Feedback</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./settings.html">Settings</a>
                <a class="dropdown-item" id="logoutModal">Logout</a>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
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
                <li class="list-inline-item"><a class="link-secondary"
                     href="./docs/">Documentation</a></li>
                <li class="list-inline-item"><a class="link-secondary"
                     href="./license.html">License</a></li>
                <li class="list-inline-item"><a class="link-secondary"
                     href="https://github.com/tabler/tabler" target="_blank"
                     rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a class="link-secondary" href="https://github.com/sponsors/codecalm"
                     target="_blank" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg class="icon text-pink icon-filled icon-inline"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
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
