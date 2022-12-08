<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('Welcome') }}</title>
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
          <div class="nav-item d-none d-md-flex">
            <div class="btn-list">
              <a class="btn hover-shadow" href="#" rel="noreferrer">
                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                <svg class="icon text-red icon-tabler icon-tabler-help"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="12" r="9"></circle>
                  <line x1="12" y1="17" x2="12" y2="17.01"></line>
                  <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                </svg>
                Helpdesk
              </a>
              @if (!Auth::user())
                <a class="btn hover-shadow" href="{{ route('login') }}" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg class="icon text-success icon-tabler icon-tabler-lock-open"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="5" y="11" width="14" height="10"
                          rx="2">
                    </rect>
                    <circle cx="12" cy="16" r="1"></circle>
                    <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
                  </svg>
                  {{ __('Login') }}
                </a>
                <a class="btn hover-shadow" href="{{ route('register') }}" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg class="icon text-primary icon-tabler icon-tabler-login"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                    </path>
                    <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                  </svg>
                  {{ __('Register') }}
                </a>
            </div>
          </div>
        @endauth
        @auth
          <div class="nav-item dropdown">
            <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
               href="#" aria-label="Open user menu">
              <span class="avatar avatar-sm"
                    style="background-image: url(./foto/{{ Auth::user()->personal_number ?? '' }}.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>{{ Auth::user()->name ?? '' }}</div>
                <div class="small text-muted mt-1">{{ Auth::user()->personal_number ?? '' }}
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a class="dropdown-item" href="#">Status</a>
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/home">Settings</a>
              <a class="dropdown-item" id="logoutModal">Logout</a>
            </div>
          </div>
        @endauth
      </div>
    </div>
  </header>
  <!--/ Navbar -->}
  <div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Oznámení
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-base" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                    <line x1="12" y1="12" x2="20" y2="7.5"></line>
                    <line x1="12" y1="12" x2="12" y2="21"></line>
                    <line x1="12" y1="12" x2="4" y2="7.5"></line>
                    <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Interface
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./empty.html">
                      Empty page
                    </a>
                    <a class="dropdown-item" href="./accordion.html">
                      Accordion
                    </a>
                    <a class="dropdown-item" href="./blank.html">
                      Blank page
                    </a>
                    <a class="dropdown-item" href="./badges.html">
                      Badges
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./buttons.html">
                      Buttons
                    </a>
                    <div class="dropend">
                      <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                         data-bs-auto-close="outside" href="#sidebar-cards" role="button"
                         aria-expanded="false">
                        Cards
                        <span
                              class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./cards.html">
                          Sample cards
                        </a>
                        <a class="dropdown-item" href="./card-actions.html">
                          Card actions
                          <span
                                class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                        </a>
                        <a class="dropdown-item" href="./cards-masonry.html">
                          Cards Masonry
                        </a>
                      </div>
                    </div>
                    <a class="dropdown-item" href="./colors.html">
                      Colors
                    </a>
                    <a class="dropdown-item" href="./datagrid.html">
                      Data grid
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./datatables.html">
                      Datatables
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./dropdowns.html">
                      Dropdowns
                    </a>
                    <a class="dropdown-item" href="./modals.html">
                      Modals
                    </a>
                    <a class="dropdown-item" href="./maps.html">
                      Maps
                    </a>
                    <a class="dropdown-item" href="./map-fullsize.html">
                      Map fullsize
                    </a>
                    <a class="dropdown-item" href="./maps-vector.html">
                      Vector maps
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./navigation.html">
                      Navigation
                    </a>
                    <a class="dropdown-item" href="./charts.html">
                      Charts
                    </a>
                  </div>
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./pagination.html">
                      <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                      Pagination
                    </a>
                    <a class="dropdown-item" href="./placeholder.html">
                      Placeholder
                    </a>
                    <a class="dropdown-item" href="./steps.html">
                      Steps
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./tabs.html">
                      Tabs
                    </a>
                    <a class="dropdown-item" href="./tables.html">
                      Tables
                    </a>
                    <a class="dropdown-item" href="./carousel.html">
                      Carousel
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./lists.html">
                      Lists
                    </a>
                    <a class="dropdown-item" href="./typography.html">
                      Typography
                    </a>
                    <a class="dropdown-item" href="./offcanvas.html">
                      Offcanvas
                    </a>
                    <a class="dropdown-item" href="./markdown.html">
                      Markdown
                    </a>
                    <a class="dropdown-item" href="./dropzone.html">
                      Dropzone
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./lightbox.html">
                      Lightbox
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./tinymce.html">
                      TinyMCE
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./inline-player.html">
                      Inline player
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <div class="dropend">
                      <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                         data-bs-auto-close="outside" href="#sidebar-authentication"
                         role="button" aria-expanded="false">
                        Authentication
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./sign-in.html">
                          Sign in
                        </a>
                        <a class="dropdown-item" href="./sign-in-illustration.html">
                          Sign in with illustration
                        </a>
                        <a class="dropdown-item" href="./sign-in-cover.html">
                          Sign in with cover
                        </a>
                        <a class="dropdown-item" href="./sign-up.html">
                          Sign up
                        </a>
                        <a class="dropdown-item" href="./forgot-password.html">
                          Forgot password
                        </a>
                        <a class="dropdown-item" href="./terms-of-service.html">
                          Terms of service
                        </a>
                        <a class="dropdown-item" href="./auth-lock.html">
                          Lock screen
                        </a>
                      </div>
                    </div>
                    <div class="dropend">
                      <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                         data-bs-auto-close="outside" href="#sidebar-error" role="button"
                         aria-expanded="false">
                        <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                        <svg class="icon icon-inline me-1" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                          <path
                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                          </path>
                          <line x1="9" y1="14" x2="15" y2="14">
                          </line>
                        </svg>
                        Error pages
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="./error-404.html">
                          404 page
                        </a>
                        <a class="dropdown-item" href="./error-500.html">
                          500 page
                        </a>
                        <a class="dropdown-item" href="./error-maintenance.html">
                          Maintenance page
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('employees.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="9 11 12 14 20 6"></polyline>
                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Zaměstnanci
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-extra" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Extra
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./activity.html">
                      Activity
                    </a>
                    <a class="dropdown-item" href="./gallery.html">
                      Gallery
                    </a>
                    <a class="dropdown-item" href="./invoice.html">
                      Invoice
                    </a>
                    <a class="dropdown-item" href="./search-results.html">
                      Search results
                    </a>
                    <a class="dropdown-item" href="./pricing.html">
                      Pricing cards
                    </a>
                    <a class="dropdown-item" href="./pricing-table.html">
                      Pricing table
                    </a>
                    <a class="dropdown-item" href="./faq.html">
                      FAQ
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./users.html">
                      Users
                    </a>
                    <a class="dropdown-item" href="./license.html">
                      License
                    </a>
                  </div>
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./logs.html">
                      Logs
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./music.html">
                      Music
                    </a>
                    <a class="dropdown-item" href="./photogrid.html">
                      Photogrid
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./tasks.html">
                      Tasks
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./uptime.html">
                      Uptime monitor
                    </a>
                    <a class="dropdown-item" href="./widgets.html">
                      Widgets
                    </a>
                    <a class="dropdown-item" href="./wizard.html">
                      Wizard
                    </a>
                    <a class="dropdown-item" href="./settings.html">
                      Settings
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./job-listing.html">
                      Job listing
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-layout" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="6" height="5"
                          rx="2"></rect>
                    <rect x="4" y="13" width="6" height="7"
                          rx="2"></rect>
                    <rect x="14" y="4" width="6" height="7"
                          rx="2"></rect>
                    <rect x="14" y="15" width="6" height="5"
                          rx="2"></rect>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Layout
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./layout-horizontal.html">
                      Horizontal
                    </a>
                    <a class="dropdown-item" href="./layout-boxed.html">
                      Boxed
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <a class="dropdown-item" href="./layout-vertical.html">
                      Vertical
                    </a>
                    <a class="dropdown-item" href="./layout-vertical-transparent.html">
                      Vertical transparent
                    </a>
                    <a class="dropdown-item" href="./layout-vertical-right.html">
                      Right vertical
                    </a>
                    <a class="dropdown-item" href="./layout-condensed.html">
                      Condensed
                    </a>
                    <a class="dropdown-item" href="./layout-combo.html">
                      Combined
                    </a>
                  </div>
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="./layout-navbar-dark.html">
                      Navbar dark
                    </a>
                    <a class="dropdown-item" href="./layout-navbar-sticky.html">
                      Navbar sticky
                    </a>
                    <a class="dropdown-item" href="./layout-navbar-overlap.html">
                      Navbar overlap
                    </a>
                    <a class="dropdown-item" href="./layout-rtl.html">
                      RTL mode
                    </a>
                    <a class="dropdown-item" href="./layout-fluid.html">
                      Fluid
                    </a>
                    <a class="dropdown-item" href="./layout-fluid-vertical.html">
                      Fluid vertical
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./icons.html">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                    </path>
                    <line x1="10" y1="10" x2="10.01" y2="10"></line>
                    <line x1="14" y1="10" x2="14.01" y2="10"></line>
                    <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  2979 icons
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-help" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="4"></circle>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="15" y1="15" x2="18.35" y2="18.35"></line>
                    <line x1="9" y1="15" x2="5.65" y2="18.35"></line>
                    <line x1="5.65" y1="5.65" x2="9" y2="9"></line>
                    <line x1="18.35" y1="5.65" x2="15" y2="9"></line>
                  </svg>
                </span>
                <span class="nav-link-title">
                  Help
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./docs/">
                  Documentation
                </a>
                <a class="dropdown-item" href="./changelog.html">
                  Changelog
                </a>
                <a class="dropdown-item" href="https://github.com/tabler/tabler"
                   target="_blank" rel="noopener">
                  Source code
                </a>
                <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm"
                   target="_blank" rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg class="icon icon-inline me-1" xmlns="http://www.w3.org/2000/svg"
                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                    </path>
                  </svg>
                  Sponsor project!
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
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

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/tabler.min.js') }}"></script>
<script src="{{ asset('js/demo.min.js') }}"></script>
@yield('scripts')
</body>

</html>
