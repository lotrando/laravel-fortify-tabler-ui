<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intranet KHN - {{ __('Training') }}</title>
  <link type="image/png" href="{{ asset('static/logo-khn.png') }}" rel="shortcut icon">
  <link href="{{ asset('https://use.fontawesome.com/releases/v5.11.2/css/all.css') }}" rel="stylesheet">
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

    /* Slideshow container */
    .slideshow-container {
      max-width: 750px;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
      overflow: hidden;
    }

    /* Next & previous buttons */
    .prev {
      cursor: pointer;
      position: absolute;
      top: 50%;
      left: -12%;
      width: auto;
      margin-top: -45px;
      font-weight: bold;
      transition: 0.6s ease;
      border-radius: 5px;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      right: -12%;
      width: auto;
      margin-top: -45px;
      font-weight: bold;
      transition: 0.6s ease;
      border-radius: 5px;
      user-select: none;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-family: 'Roboto Condensed';
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Slide numbers text */
    .numbertext {
      color: #f2f2f2;
      font-size: 25px;
      padding: 3px 8px;
      position: absolute;
      font-family: 'Roboto Condensed';
      top: 0;
    }

    /* Dots indicators */
    .dot {
      cursor: none;
      color: white;
      padding-top: 1px;
      height: 22px;
      width: 22px;
      margin: 0 0px;
      background-color: rgba(114, 121, 134, 0.659);
      font-family: 'Roboto Condensed';
      font-size: 14px;
      border-radius: 15%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    /* Active Dot */
    .active-dot {
      background-color: #206bc4;
    }
  </style>
</head>

<body>
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-fluid">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{ url('/train/1') }}">
            <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Logo KHN a.s.">
          </a>
        </h1>
        {{-- <div class="navbar-nav order-md-last flex-row">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
              <a class="btn" href="#" target="_blank" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon text-red icon-tabler icon-tabler-help" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="12" y1="17" x2="12" y2="17.01"></line>
                  <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                </svg>
                Helpdesk
              </a>
            </div>
          </div>
          <div class="d-none d-md-flex">
            <a class="nav-link hide-theme-dark px-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Enable dark mode" href="?theme=dark"
              aria-label="Enable dark mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
              </svg>
            </a>
            <a class="nav-link hide-theme-light px-0" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Enable light mode" href="?theme=light"
              aria-label="Enable light mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
              </svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a class="nav-link px-0" data-bs-toggle="dropdown" href="#" aria-label="Show notifications" tabindex="-1">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                  <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                </svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a class="text-body d-block" href="#">Example 1</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a class="list-group-item-actions" href="#">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg class="icon text-muted" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a class="text-body d-block" href="#">Example 2</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a class="list-group-item-actions show" href="#">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg class="icon text-yellow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a class="text-body d-block" href="#">Example 3</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Update change-version.js (#29736)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a class="list-group-item-actions" href="#">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg class="icon text-muted" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                        <div class="col text-truncate">
                          <a class="text-body d-block" href="#">Example 4</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a class="list-group-item-actions" href="#">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg class="icon text-muted" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./foto/61625.jpg)"></span>
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
          </div>
        </div> --}}
      </div>
    </header>
    <div class="page-wrapper">
      <!-- Page header -->
      {{-- <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Overview
              </div>
              <h2 class="page-title">
                Dashboard
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="ms-auto d-print-none col-auto">
              <div class="btn-list">
                <span class="d-none d-sm-inline">
                  <a class="btn" href="#">
                    New view
                  </a>
                </span>
                <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report" href="#">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  Create new report
                </a>
                <a class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" href="#" aria-label="Create new report">
                  <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
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
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
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
  @yield('scripts')
</body>

</html>
