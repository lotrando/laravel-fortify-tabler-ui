<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ __('Employees') }}</title>
  <link type="image/png" href="{{ asset('img/employees.png') }}" rel="shortcut icon">
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
  <div class="page">
    <!-- Header Start -->
    @include('layouts.partials.header')
    <!-- Header End -->

    <!-- Navbar -->
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
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
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-base" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                      <line x1="12" y1="12" x2="20" y2="7.5"></line>
                      <line x1="12" y1="12" x2="12" y2="21"></line>
                      <line x1="12" y1="12" x2="4" y2="7.5"></line>
                      <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Stravování
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./empty.html">
                        Nabídka kantýny
                      </a>
                      <a class="dropdown-item" href="./accordion.html">
                        Objednávka obědů
                      </a>
                      <a class="dropdown-item" href="./badges.html">
                        Rezervace
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#sidebar-cards" role="button"
                           aria-expanded="false">
                          Podmenu
                          <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="./cards.html">
                            Podmenu 1
                          </a>
                          <a class="dropdown-item" href="./card-actions.html">
                            Podmenu 1
                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                          </a>
                          <a class="dropdown-item" href="./cards-masonry.html">
                            Podmenu 1
                          </a>
                        </div>
                      </div>
                      <a class="dropdown-item" href="./colors.html">
                        Colors
                      </a>
                      <a class="dropdown-item" href="./datagrid.html">
                        Data grid
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <a class="dropdown-item" href="./datatables.html">
                        Datatables
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
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
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
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
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <a class="dropdown-item" href="./tabs.html">
                        Tabs
                      </a>
                      <a class="dropdown-item" href="./tables.html">
                        Tables
                      </a>
                      <a class="dropdown-item" href="./carousel.html">
                        Carousel
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
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
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <a class="dropdown-item" href="./lightbox.html">
                        Lightbox
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <a class="dropdown-item" href="./tinymce.html">
                        TinyMCE
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <a class="dropdown-item" href="./inline-player.html">
                        Inline player
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#sidebar-authentication" role="button"
                           aria-expanded="false">
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
                        <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#sidebar-error" role="button"
                           aria-expanded="false">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                          <svg class="icon icon-inline me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                               stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
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
                <a class="nav-link" href="./form-elements.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <polyline points="9 11 12 14 20 6"></polyline>
                      <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Form elements
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-extra" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Média
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./activity.html">
                        Radio
                      </a>
                      <a class="dropdown-item" href="./gallery.html">
                        Videa
                      </a>
                    </div>
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./music.html">
                        Nutriční terapeuti
                      </a>
                      <a class="dropdown-item" href="./photogrid.html">
                        Fotografie
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-layout" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="4" y="4" width="6" height="5" rx="2"></rect>
                      <rect x="4" y="13" width="6" height="7" rx="2"></rect>
                      <rect x="14" y="4" width="6" height="7" rx="2"></rect>
                      <rect x="14" y="15" width="6" height="5" rx="2"></rect>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Aplikace
                  </span>
                </a>
                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./layout-horizontal.html">
                        První sloupec
                      </a>
                      <a class="dropdown-item" href="./layout-boxed.html">
                        Položka prvního sloupce
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Nové</span>
                      </a>
                    </div>
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item" href="./layout-navbar-dark.html">
                        Druhý sloupec
                      </a>
                      <a class="dropdown-item" href="./layout-navbar-sticky.html">
                        Položka druhého sloupce
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="//email.khn.cz" target="_blank">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                    <svg class="icon icon-tabler icon-tabler-mail" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                      <polyline points="3 7 12 13 21 7"></polyline>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Pošta
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-help" role="button" aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    Pomoc
                  </span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./docs/">
                    Helpdesk
                  </a>
                  <a class="dropdown-item" href="./changelog.html">
                    Návody
                  </a>
                </div>
              </li>
            </ul>
            @auth
              <div class="ms-auto d-print-none col-auto">
                <div class="btn-list">
                  <a class="btn btn-azure" id="exportPhoneList" data-bs-toggle="tooltip" data-bs-placement="bottom"
                     data-bs-original-title="{{ __('Generate phonelist to Excel file') }}" href="{{ route('employees.phonelist') }}">
                    <svg class="icon icon-tabler icon-tabler-address-book" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                      </path>
                      <path d="M10 16h6"></path>
                      <circle cx="13" cy="11" r="2"></circle>
                      <path d="M4 8h3"></path>
                      <path d="M4 12h3"></path>
                      <path d="M4 16h3"></path>
                    </svg>
                    {{ __('Phonelist') }}
                  </a>
                  <a class="btn btn-blue" id="exportList" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="{{ __('Quick data to table') }}"
                     href="{{ route('employees.list') }}">
                    <svg class="icon icon-tabler icon-tabler-file-spreadsheet" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                      <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                      </path>
                      <path d="M8 11h8v7h-8z"></path>
                      <path d="M8 15h8"></path>
                      <path d="M11 11v7"></path>
                    </svg>
                    {{ __('Quick table') }}
                  </a>
                  </a>
                  <button class="btn btn-purple" id="exportTable" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          data-bs-original-title="{{ __('Export data to CSV of XLS') }}">
                    <svg class="icon icon-tabler icon-tabler-file-export" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                      <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3">
                      </path>
                    </svg>
                    {{ __('Export') }}
                  </button>
                  <button class="btn btn-success d-none d-sm-inline-block" id="openCreateModal" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          data-bs-original-title="{{ __('Creates a Nové employee') }}">
                    <svg class="icon icon-tabler icon-tabler-user-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                      <path d="M16 11h6m-3 -3v6"></path>
                    </svg>
                    {{ __('Nové employee') }}
                  </button>
                </div>
              </div>
            @endauth
            {{-- <div class="my-md-0 flex-grow-1 flex-md-grow-0 order-md-last order-first my-2">
              <form action="./" method="get" autocomplete="off" novalidate="">
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="10" cy="10" r="7"></circle>
                      <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg>
                  </span>
                  <input class="form-control" type="text" value="" aria-label="Search in website" placeholder="Search…">
                </div>
              </form>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
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
