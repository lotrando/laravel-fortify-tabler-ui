@extends('layouts.main')

@section('header')
  <header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-fluid">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
              type="button" aria-controls="navbar-menu" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
        <a href="#">
          <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Logo KHN a.s.">
        </a>
      </h1>
      <div class="navbar-nav order-md-last flex-row">
        <div class="nav-item d-none d-md-flex">
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
              {{ __('Helpdesk') }}
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
              {{ __('Register') }}
            </a>
            <a class="btn" href="{{ route('login') }}" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg class="icon icon-tabler icon-tabler-lock-open" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                   stroke="currentColor" fill="none" stroke-linecap="round"
                   stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <rect x="5" y="11" width="14" height="10" rx="2">
                </rect>
                <circle cx="12" cy="16" r="1"></circle>
                <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
              </svg>
              {{ __('Login') }}
            </a>
          </div>
        </div>
        @auth
          <div class="nav-item dropdown">
            <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#"
               aria-label="Open user menu">
              <div class="d-none d-xl-block ps-2 m-2">
                <div>{{ Auth::user()->name ?? '' }}</div>
                <div class="small text-muted mt-1">{{ Auth::user()->personal_number ?? '' }}</div>
              </div>
              <span class="avatar avatar-sm"
                    style="background-image: url(./foto/{{ Auth::user()->personal_number . '.jpg' ?? 'no_image.png' }})">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a class="dropdown-item" href="#">{{ __('Status') }}</a>
              <a class="dropdown-item" href="#">{{ __('Profile') }}</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="./settings.html">{{ __('Setting') }}</a>
              <a class="dropdown-item" id="logoutModal">{{ __('Logout') }}</a>
            </div>
          </div>
        </div>
      @endauth
    </div>
  </header>
@endsection

@section('navigation')
  <div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-base" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                  <svg class="icon icon-tabler icon-tabler-info-circle"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="12" r="9"></circle>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Oznámení') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item"
                   href="{{ url('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f') }}"
                   target="_blank">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-album"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="4" y="4" width="16" height="16"
                            rx="2"></rect>
                      <path d="M12 4v7l2 -2l2 2v-7"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Aktuální změny') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-building-hospital"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <line x1="3" y1="21" x2="21" y2="21"></line>
                      <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16"></path>
                      <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                      <line x1="10" y1="9" x2="14" y2="9"></line>
                      <line x1="12" y1="7" x2="12" y2="11"></line>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Akord') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-urgent"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 16v-4a4 4 0 0 1 8 0v4"></path>
                      <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                      <rect x="6" y="16" width="12" height="4"
                            rx="1"></rect>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Důležitá sdělení') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-tool"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Odstávky a servis') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-armchair"
                         xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z">
                      </path>
                      <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5"></path>
                      <path d="M6 19v2"></path>
                      <path d="M18 19v2"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Semináře') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-transform"
                         xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M5 13v.875c0 3.383 2.686 6.125 6 6.125"></path>
                      <circle cx="6" cy="6" r="3"></circle>
                      <circle cx="18" cy="18" r="3"></circle>
                      <path d="M16 9l2 2l2 -2"></path>
                      <path d="M18 10v-.875c0 -3.383 -2.686 -6.125 -6 -6.125"></path>
                      <path d="M3 15l2 -2l2 2"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Změny služeb') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-info-square"
                         xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <line x1="12" y1="8" x2="12.01" y2="8"></line>
                      <rect x="4" y="4" width="16" height="16"
                            rx="2"></rect>
                      <polyline points="11 12 12 12 12 16 13 16"></polyline>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Informace') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-masks-theater"
                         xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M13.192 9h6.616a2 2 0 0 1 1.992 2.183l-.567 6.182a4 4 0 0 1 -3.983 3.635h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183z">
                      </path>
                      <path d="M15 13h.01"></path>
                      <path d="M18 13h.01"></path>
                      <path d="M15 16.5c1 .667 2 .667 3 0"></path>
                      <path
                            d="M8.632 15.982a4.037 4.037 0 0 1 -.382 .018h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183h6.616a2 2 0 0 1 2 2">
                      </path>
                      <path d="M6 8h.01"></path>
                      <path d="M9 8h.01"></path>
                      <path d="M6 12c.764 -.51 1.528 -.63 2.291 -.36"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Kultura') }}
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-base" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                  <svg class="icon icon-tabler icon-tabler-tools-kitchen-2"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Stravování') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item"
                   href="{{ url('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f') }}"
                   target="_blank">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-meat"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821">
                      </path>
                      <path
                            d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z">
                      </path>
                      <path d="M7.5 16l1 1"></path>
                      <path
                            d="M12.975 21.425c3.905 -3.906 4.855 -9.288 2.121 -12.021c-2.733 -2.734 -8.115 -1.784 -12.02 2.121">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Objednávka obědů') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg class="icon icon-tabler icon-tabler-baguette"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M5.628 11.283l5.644 -5.637c2.665 -2.663 5.924 -3.747 8.663 -1.205l.188 .181a2.987 2.987 0 0 1 0 4.228l-11.287 11.274a2.996 2.996 0 0 1 -4.089 .135l-.143 -.135c-2.728 -2.724 -1.704 -6.117 1.024 -8.841z">
                      </path>
                      <path d="M9.5 7.5l1.5 3.5"></path>
                      <path d="M6.5 10.5l1.5 3.5"></path>
                      <path d="M12.5 4.5l1.5 3.5"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Nabídka kantýny') }}
                  </span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://email.khn.cz" target="_blank">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                  <svg class="icon icon-tabler icon-tabler-mail" xmlns="http://www.w3.org/2000/svg"
                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="5" width="18" height="14"
                          rx="2"></rect>
                    <polyline points="3 7 12 13 21 7"></polyline>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Pošta') }}
                </span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="./form-elements.html">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="9 11 12 14 20 6" />
                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                  </svg>
                </span>
                <span class="nav-link-title">
                  Form elements
                </span>
              </a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-extra" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon icon-tabler icon-tabler-book" xmlns="http://www.w3.org/2000/svg"
                       width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round"
                       stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                    <line x1="3" y1="6" x2="3" y2="19"></line>
                    <line x1="12" y1="6" x2="12" y2="19"></line>
                    <line x1="21" y1="6" x2="21" y2="19"></line>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Dokumentace') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="./activity.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-users"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Personální') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-nurse"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z">
                      </path>
                      <path d="M10 12h4"></path>
                      <path d="M12 10v4"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Sesterská') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-hand-sanitizer"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z"></path>
                      <path d="M15 3h-6a2 2 0 0 0 -2 2"></path>
                      <path d="M12 3v5"></path>
                      <path d="M12 11v4"></path>
                      <path d="M10 13h4"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Hygiena') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-user-plus"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                      <path d="M16 11h6m-3 -3v6"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Pacient') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-microscope"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M5 21h14"></path>
                      <path d="M6 18h2"></path>
                      <path d="M7 18v3"></path>
                      <path d="M9 11l3 3l6 -6l-3 -3z"></path>
                      <path d="M10.5 12.5l-1.5 1.5"></path>
                      <path d="M17 3l3 3"></path>
                      <path d="M12 21a6 6 0 0 0 3.715 -10.712"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('OKB') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-radioactive"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6"></path>
                      <path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0"></path>
                      <path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('RDG') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-devices-2"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6"></path>
                      <rect x="13" y="4" width="8" height="16"
                            rx="1"></rect>
                      <line x1="7" y1="19" x2="10" y2="19"></line>
                      <line x1="17" y1="8" x2="17" y2="8.01"></line>
                      <circle cx="17" cy="16" r="1"></circle>
                      <line x1="9" y1="15" x2="9" y2="19"></line>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('IT') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./gallery.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg class="icon icon-tabler icon-tabler-heartbeat"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                            d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572">
                      </path>
                      <path d="M3 13h2l2 3l2 -6l1 3h3"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('KPR') }}
                  </span>
                </a>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./gallery.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg class="icon icon-tabler icon-tabler-cards"
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                           fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                              d="M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z">
                        </path>
                        <path d="M15 4h1a1 1 0 0 1 1 1v3.5"></path>
                        <path
                              d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374">
                        </path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Komunikační karty') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="./gallery.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg class="icon icon-tabler icon-tabler-clipboard-check"
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                           fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                              d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                        </path>
                        <rect x="9" y="3" width="6" height="4"
                              rx="2"></rect>
                        <path d="M9 14l2 2l4 -4"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Vyhodnocení dotazníků') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="./gallery.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg class="icon icon-tabler icon-tabler-help"
                           xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                           fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="12" y1="17" x2="12" y2="17.01"></line>
                        <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Návody') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="./wizard.html">
                    <span class="flag flag-country-ua me-2"></span>
                    <span class="nav-link-title">
                      {{ __('Ukrajinské dokumenty') }}
                    </span>
                  </a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                 data-bs-auto-close="outside" href="#navbar-layout" role="button"
                 aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                  <svg class="icon icon-tabler icon-tabler-article"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="4" width="18" height="16"
                          rx="2"></rect>
                    <path d="M7 8h10"></path>
                    <path d="M7 12h10"></path>
                    <path d="M7 16h10"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Media') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="http://192.168.81.121:8000/radio.m3u">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon icon-tabler icon-tabler-radio"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path
                                d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5">
                          </path>
                          <path d="M4 12h16"></path>
                          <path d="M7 12v-2"></path>
                          <path d="M17 16v.01"></path>
                          <path d="M13 16v.01"></path>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Radio
                      </span>
                    </a>
                    <a class="dropdown-item" href="./layout-vertical.html">
                      <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg class="icon icon-tabler icon-tabler-movie"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <rect x="4" y="4" width="16" height="16"
                                rx="2"></rect>
                          <line x1="8" y1="4" x2="8" y2="20">
                          </line>
                          <line x1="16" y1="4" x2="16" y2="20">
                          </line>
                          <line x1="4" y1="8" x2="8" y2="8">
                          </line>
                          <line x1="4" y1="16" x2="8" y2="16">
                          </line>
                          <line x1="4" y1="12" x2="20" y2="12">
                          </line>
                          <line x1="16" y1="8" x2="20" y2="8">
                          </line>
                          <line x1="16" y1="16" x2="20" y2="16">
                          </line>
                        </svg>
                      </span>
                      <span class="nav-link-title">
                        Videa
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="my-md-0 flex-grow-1 flex-md-grow-0 order-md-last order-first my-2">
            <form action="." method="get">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                       height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                  </svg>
                </span>
                <input class="form-control" type="text" aria-label="Search in website"
                       placeholder="Hledej ...">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('main')
  <div class="page-wrapper">
    <div class="container-fluid">
      <!-- Page title -->
      <div class="page-header d-print-none">
        <div class="row align-items-center">
          <div class="col">
            <!-- Page pre-title -->
            <h2 class="page-title text-primary">
              {{ __('Oznámení') }}
            </h2>
            <div class="page-pretitle text-mute">
              {{ __('Důležitá sdělení') }}
            </div>
          </div>
          <!-- Page title actions -->
          <div class="ms-auto d-print-none col-auto">
            <div class="btn-list">
              <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                 data-bs-target="#modal-report" href="#">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                {{ __('New item') }}
              </a>
              <a class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                 data-bs-target="#modal-report" href="#" aria-label="Create new report">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-body">
      <div class="container-fluid">
        <div class="row row-deck row-cards g-2 mb-2">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                Test 1
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illum cum possimus
                  hic voluptatum mollitia repellendus accusantium, ducimus dolore aliquam nisi
                  temporibus nam odio tempore voluptates nulla labore, sapiente dignissimos aliquid
                  facere consectetur sed! Itaque obcaecati sapiente consequuntur temporibus veniam
                  dolores, eum officia maxime illum incidunt optio quidem, in sequi. Lorem ipsum dolor
                  sit amet consectetur adipisicing elit. Laboriosam soluta aliquid nobis unde quae
                  odit placeat. In minus omnis eaque itaque ipsum, obcaecati assumenda? Similique
                  labore reiciendis illum modi quasi.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                Test 1
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illum cum possimus
                  hic voluptatum mollitia repellendus accusantium, ducimus dolore aliquam nisi
                  temporibus nam odio tempore voluptates nulla labore, sapiente dignissimos aliquid
                  facere consectetur sed! Itaque obcaecati sapiente consequuntur temporibus veniam
                  dolores, eum officia maxime illum incidunt optio quidem, in sequi. Lorem ipsum dolor
                  sit amet consectetur adipisicing elit. Laboriosam soluta aliquid nobis unde quae
                  odit placeat. In minus omnis eaque itaque ipsum, obcaecati assumenda? Similique
                  labore reiciendis illum modi quasi.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-deck row-cards mb-2">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                Test 2
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis illum cum possimus
                  hic voluptatum mollitia repellendus accusantium, ducimus dolore aliquam nisi
                  temporibus nam odio tempore voluptates nulla labore, sapiente dignissimos aliquid
                  facere consectetur sed! Itaque obcaecati sapiente consequuntur temporibus veniam
                  dolores, eum officia maxime illum incidunt optio quidem, in sequi.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-transparent d-print-none">
      <div class="container-fluid">
        <div class="row align-items-center flex-row-reverse text-center">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                <a class="link-secondary" href="mailto:klika@khn.cz" target="_blank"
                   rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg class="icon text-pink icon-filled icon-inline"
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                          d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                    </path>
                  </svg>
                  vytvořil Klika Miroslav
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-lg-0 mt-3">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                &copy; 2022 - <a class="link-secondary" href="https://www.khn.cz" target="_blank"
                   rel="noopener">KHN a.s.</a> - všechna práva vyhrazena
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection
