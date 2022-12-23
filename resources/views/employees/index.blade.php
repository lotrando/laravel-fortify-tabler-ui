@extends('layouts.employee')

@section('header')
  <header class="navbar navbar-expand-md navbar-light d-print-none">
    <div class="container-fluid">
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="btn hover-shadow-sm" href="{{ route('adversevents.index') }}" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg class="icon text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                   stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 16v-4a4 4 0 0 1 8 0v4"></path>
                <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                <rect x="6" y="16" width="12" height="4" rx="1">
                </rect>
              </svg>
              {{ __('Nežádoucí události') }}
            </a>
            <a class="btn hover-shadow-sm" href="{{ route('employees.index') }}" rel="noreferrer">
              <svg class="icon text-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                   fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              {{ __('Employees') }}
            </a>
            <a class="btn hover-shadow-sm" href="" rel="noreferrer">
              <svg class="icon text-red" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                   stroke-linecap="round" stroke-linejoin="round">
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
            <a class="btn hover-shadow-sm" href="{{ route('register') }}" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg class="icon icon-tabler icon-tabler-login" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                   stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                </path>
                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
              </svg>
              {{ __('Register') }}
            </a>
            <a class="btn hover-shadow-sm" href="{{ route('login') }}" rel="noreferrer">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg class="icon icon-tabler icon-tabler-lock-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                   stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#" aria-label="Open user menu">
              <div class="d-none d-xl-block ps-2 m-2">
                <div>{{ Auth::user()->name ?? '' }}</div>
                <div class="small text-muted mt-1">{{ Auth::user()->personal_number ?? '' }}</div>
              </div>
              <span class="avatar avatar-sm" style="background-image: url(./foto/{{ Auth::user()->personal_number . '.jpg' ?? 'no_image.png' }})">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a class="dropdown-item" href="#">{{ __('Status') }}</a>
              <a class="dropdown-item" href="#">{{ __('Profile') }}</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout-modal">{{ __('Logout') }}</a>
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
            {{-- Oznámení Dropdown --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-base" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                       fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item" href="{{ url('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f') }}" target="_blank">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                      <path d="M12 4v7l2 -2l2 2v-7"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Aktuální změny') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-building-hospital" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-urgent" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 16v-4a4 4 0 0 1 8 0v4"></path>
                      <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7"></path>
                      <rect x="6" y="16" width="12" height="4" rx="1"></rect>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Důležitá sdělení') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-tool" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Odstávky a servis') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-armchair" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z">
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
                    <svg class="icon icon-tabler icon-tabler-transform" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-info-square" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <line x1="12" y1="8" x2="12.01" y2="8"></line>
                      <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                      <polyline points="11 12 12 12 12 16 13 16"></polyline>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Informace') }}
                  </span>
                </a>
                <a class="dropdown-item" href="./navigation.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-masks-theater" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M13.192 9h6.616a2 2 0 0 1 1.992 2.183l-.567 6.182a4 4 0 0 1 -3.983 3.635h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183z">
                      </path>
                      <path d="M15 13h.01"></path>
                      <path d="M18 13h.01"></path>
                      <path d="M15 16.5c1 .667 2 .667 3 0"></path>
                      <path d="M8.632 15.982a4.037 4.037 0 0 1 -.382 .018h-1.5a4 4 0 0 1 -3.983 -3.635l-.567 -6.182a2 2 0 0 1 1.992 -2.183h6.616a2 2 0 0 1 2 2">
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
            {{-- Stravování --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-base" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-tools-kitchen-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19 3v12h-5c-.023 -3.681 .184 -7.406 5 -12zm0 12v6h-1v-3m-10 -14v17m-3 -17v3a3 3 0 1 0 6 0v-3">
                    </path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Stravování') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f') }}" target="_blank">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-meat" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M13.62 8.382l1.966 -1.967a2 2 0 1 1 3.414 -1.415a2 2 0 1 1 -1.413 3.414l-1.82 1.821">
                      </path>
                      <path
                            d="M5.904 18.596c2.733 2.734 5.9 4 7.07 2.829c1.172 -1.172 -.094 -4.338 -2.828 -7.071c-2.733 -2.734 -5.9 -4 -7.07 -2.829c-1.172 1.172 .094 4.338 2.828 7.071z">
                      </path>
                      <path d="M7.5 16l1 1"></path>
                      <path d="M12.975 21.425c3.905 -3.906 4.855 -9.288 2.121 -12.021c-2.733 -2.734 -8.115 -1.784 -12.02 2.121">
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
                    <svg class="icon icon-tabler icon-tabler-baguette" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                  <svg class="icon icon-tabler icon-tabler-mail" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
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
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-extra" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                  <svg class="icon icon-tabler icon-tabler-book" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-users" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-nurse" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z">
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
                    <svg class="icon icon-tabler icon-tabler-hand-sanitizer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-user-plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-microscope" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-radioactive" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="icon icon-tabler icon-tabler-devices-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6"></path>
                      <rect x="13" y="4" width="8" height="16" rx="1"></rect>
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
                    <svg class="icon icon-tabler icon-tabler-heartbeat" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572">
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
                      <svg class="icon icon-tabler icon-tabler-cards" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                           stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                              d="M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z">
                        </path>
                        <path d="M15 4h1a1 1 0 0 1 1 1v3.5"></path>
                        <path d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374">
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
                      <svg class="icon icon-tabler icon-tabler-clipboard-check" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                        </path>
                        <rect x="9" y="3" width="6" height="4" rx="2"></rect>
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
                      <svg class="icon icon-tabler icon-tabler-help" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                           stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#navbar-layout" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                  <svg class="icon icon-tabler icon-tabler-article" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="4" width="18" height="16" rx="2"></rect>
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
                        <svg class="icon icon-tabler icon-tabler-radio" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5">
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
                        <svg class="icon icon-tabler icon-tabler-movie" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <rect x="4" y="4" width="16" height="16" rx="2"></rect>
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
                  <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                       fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="10" cy="10" r="7" />
                    <line x1="21" y1="21" x2="15" y2="15" />
                  </svg>
                </span>
                <input class="form-control" type="text" aria-label="Search in website" placeholder="Hledej ...">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('main')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mb-2 mt-2 shadow-sm">
          <div class="card-header align-items-center justify-content-between bg-muted-lt d-flex">
            <h3 class="text-muted m-0 mb-0 p-0"><i class="fas fa-users"></i>
              {{ __('Employees of KHN') }}
            </h3>
          </div>
          <div class="card-body p-2">
            <div class="row">
              <div class="col-12">
                <span id="form_result_window"></span>
              </div>
            </div>
            <table class="table-bordered table-hover dataTable w-100 table">
              <thead>
                <tr class="bg-azure-lt table bg-opacity-50 text-center text-white">
                  <th class="text-center">{{ __('Image') }}</th>
                  <th class="text-center">{{ __('Number') }}</th>
                  <th>{{ __('Titles') }}</th>
                  <th>{{ __('Last name') }}</th>
                  <th>{{ __('First name') }}</th>
                  <th>{{ __('Vema') }}</th>
                  <th>{{ __('Department') }}</th>
                  <th>{{ __('Job title') }}</th>
                  <th>{{ __('Email') }}</th>
                  <th>{{ __('Phone') }}</th>
                  <th>{{ __('Mobile') }}</th>
                  <th>{{ __('Status') }}</th>
                  <th>{{ __('Start date') }}</th>
                  <th class="text-center"><i class="fas fa-bars"></i></th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modals')
  {{-- Main Form Modal --}}
  <div class="modal modal-blur fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-top" role="document">
      <div class="modal-content shadow-lg">
        <div id="modal-header">
          <h5 class="modal-title"></h5>
          <i id="modal-icon"></i>
          {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button> --}}
        </div>
        <form id="inputForm" action="{{ route('employees.create') }}">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <span id="form_result_modal"></span>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Personal number') }}</label>
                <input class="form-control" id="personal_number" name="personal_number" type="text" placeholder="{{ __('Personal number') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Titles preffix') }}</label>
                <select class="form-select" id="title_preffix" name="title_preffix">
                  <option value=""></option>
                  <option value="Bc.">Bc.</option>
                  <option value="Bc. PhDr.">Bc. PhDr.</option>
                  <option value="MUDr.">MUDr.</option>
                  <option value="Ing.">Ing.</option>
                  <option value="PharmDr.">PharmDr.</option>
                  <option value="Mgr.">Mgr.</option>
                  <option value="MUDr. Ing.">MUDr. Ing.</option>
                  <option value="Ing. Mgr.">Ing. Mgr.</option>
                </select>
              </div>
              <div class="col-3">
                <label class="form-label">{{ __('Last name') }}</label>
                <input class="form-control" id="last_name" name="last_name" type="text" placeholder="{{ __('Last name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('First name') }}</label>
                <input class="form-control" id="first_name" name="first_name" type="text" placeholder="{{ __('First name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Titles suffix') }}</label>
                <select class="form-select" id="title_suffix" name="title_suffix">
                  <option value=""></option>
                  <option value="DiS.">DiS.</option>
                  <option value="MBA">MBA</option>
                  <option value="LL.M.">LL.M.</option>
                  <option value="MBA, LL.M.">MBA, LL.M.</option>
                </select>
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Employment') }}</label>
                <select class="form-select" id="employment" name="employment">
                  <option value="HPP">HPP</option>
                  <option value="DPČ">DPČ</option>
                  <option value="DPP">DPP</option>
                  <option value="EVP">EVP</option>
                  <option value="ČSO">ČSO</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Middle name') }}</label>
                <input class="form-control" id="middle_name" name="middle_name" type="text" placeholder="{{ __('Middle name') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Married name') }}</label>
                <input class="form-control" id="married_name" name="married_name" type="text" placeholder="{{ __('Married name') }}">
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Bussines phone') }}</label>
                <input class="form-control" id="phone" name="phone" type="text" placeholder="{{ __('Phone') }}">
              </div>
              <div class="col">
                <label class="form-label">{{ __('Position') }}</label>
                <input class="form-control" id="position" name="position" type="text" placeholder="999">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Company cell phone') }}</label>
                <input class="form-control" id="mobile" name="mobile" type="text" placeholder="{{ __('Mobil') }}">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('ID Card') }}</label>
                <select class="form-select" id="id_card" name="id_card">
                  <option value="Nový nástup">Nový nástup</option>
                  <option value="Vytvořit kartu">Vytvořit kartu</option>
                  <option value="Vytvořit nálepku">Vytvořit nálepku</option>
                  <option value="Předat nálepku">Předat nálepku</option>
                  <option value="Aktual. nálepku">Aktual. nálepku</option>
                  <option value="Vydáno">Vydáno</option>
                  <option value="Vrácena">Vrácena</option>
                </select>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Status') }}</label>
                <select class="form-select" id="status" name="status">
                  <option value="Neaktivní">Neaktivní</option>
                  <option value="Aktivní">Aktivní</option>
                  <option value="Mateřská">Mateřská</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-3">
                <label class="form-label">{{ __('Email') }}</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="{{ __('Email') }}">
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Coffee') }}</label>
                <select class="form-select" id="coffee" name="coffee">
                  <option value="N">Ne</option>
                  <option value="A">Ano</option>
                </select>
              </div>
              <div class="col-4">
                <label class="form-label">{{ __('Department') }}</label>
                <select class="form-select" id="department_id" name="department_id">
                  <option value=""></option>
                  @foreach ($departments as $department)
                    <option value="{{ $department->id }}" @if (old('department_id') == $department->id) selected @endif>
                      {{ $department->center_code }} -
                      {{ $department->department_name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-1">
                <label class="form-label">{{ __('Center') }}</label>
                <input class="form-control" id="department_code" name="department_code" type="text" placeholder="{{ __('N/A') }}" readonly>
              </div>
              <div class="col-3">
                <div class="mb-3">
                  <label class="form-label">{{ __('Job') }}</label>
                  <select class="form-select" id="job_id" name="job_id">
                    <option value=""></option>
                    @foreach ($jobs as $job)
                      <option value="{{ $job->id }}" @if (old('job_id') == $job->id) selected @endif>{{ $job->job_title }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <label class="form-label">{{ __('Current photo') }}</label>
                <div class="d-flex justify-content-start align-items-start">
                  <span id="store_image"></span>
                </div>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Preview new photo') }}</label>
                <div class="d-flex justify-content-start align-items-start">
                  <img class="z-depth-1 img-thumbnail-big" id="preview_image" height='193px'></img>
                </div>
              </div>
              <div class="col-8">
                <label class="form-label">{{ __('Description') }}</label>
                <textarea class="form-control" id="comment" name="comment" type="text" placeholder="{{ __('Description') }}" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">{{ __('Select file with new photo') }}</label>
                  <input class="form-control" id="image" name="image" type="file">
                </div>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Start date') }}</label>
                <input class="form-control" id="start_date" name="start_date" type="date" placeholder="{{ __('Start date') }}" onkeydown="return false">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('End date') }}</label>
                <input class="form-control" id="end_date" name="end_date" type="date" placeholder="{{ __('End date') }}" onkeydown="return false">
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Created at') }}</label>
                <input class="form-control" id="created_at" name="created_at" type="date" placeholder="{{ __('Created at') }}" onkeydown="return false" readonly>
              </div>
              <div class="col-2">
                <label class="form-label">{{ __('Updated at') }}</label>
                <input class="form-control" id="updated_at" name="updated_at" type="date" placeholder="{{ __('Updated at') }}" onkeydown="return false" readonly>
              </div>
              <input id="action" name="action" type="hidden" />
              <input id="hidden_id" name="hidden_id" type="hidden" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-muted hover-shadow" data-bs-dismiss="modal" type="button">
              {{ __('Close') }}
            </button>
            <button class="btn btn-primary ms-auto hover-shadow" id="action_button" name="action_button" type="submit"></button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Delete Employee Modal --}}
  <div class="modal modal-blur fade" id="confirmModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content shadow-lg">
        {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
        <div class="modal-status bg-danger"></div>
        <div class="modal-body py-4 text-center">
          <svg class="icon text-danger icon-lg mb-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
               stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 9v2m0 4v.01" />
            <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
          </svg>
          <h3>{{ __('Are you sure?') }}</h3>
          <div class="text-muted">
            {{ __('Do you really want to remove employee?') }}<br>{{ __('This operation cannot be undone') }}
          </div>
        </div>
        <div class="modal-footer">
          <div class="w-100">
            <div class="row">
              <div class="col">
                <button class="btn btn-muted w-100 hover-shadow" data-bs-dismiss="modal">
                  {{ __('Cancel') }}
                </button>
              </div>
              <div class="col">
                <button class="btn btn-danger w-100 hover-shadow" id="ok_button"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    // Data Table
    $(document).ready(function() {
      $('.dataTable').DataTable({
        processing: true,
        processingAnim: false,
        serverSide: true,
        stateSave: true,
        pageSave: true,
        fixedHeader: {
          header: true,
          footer: false
        },
        order: [
          [3, "asc"]
        ],
        "lengthMenu": [
          [10, 20, 30, 60, 100, -1],
          [10, 20, 30, 60, 100, "Všechny"]
        ],
        language: {
          "url": "{{ asset('js/cs.json') }}",
          "sProcessing": "<img style='height:100px;' src='img/processing.gif' />",
          "search": "_INPUT_",
          "searchPlaceholder": "Hledej ..."
        },
        ajax: {
          url: "{{ route('employees.index') }}",
        },
        columnDefs: [{
          type: 'czech',
          targets: [3]
        }],
        columns: [{
            data: 'image',
            "width": "1%",
            render: function(data, type, row, full, meta) {
              return "<div class='img-hover-zoom'><center><img src={{ URL::to('/foto') }}/" +
                data + " class='zoom img-thumbnail' /></center></div>";
            },
            orderable: false,
          },
          {
            data: 'personal_number',
            "width": "1%",
            render: function(data, type, row, full, meta) {
              return "<span class='text-center text-" + row.department.color_id +
                "'><center><strong>" + data + "</strong></center></span>";
            },
          },
          {
            data: 'title_preffix',
            "width": "1%"
          },
          {
            data: 'last_name',
            "width": "3%",
          },
          {
            data: 'first_name',
            "width": "3%"
          },
          {
            data: 'department.center_code',
            "width": "1%",
            orderable: false,
          },
          {
            data: 'department.department_name',
            "width": "8%",
            orderable: false,
          },
          {
            data: 'job.job_title',
            "width": "7%",
            orderable: false,
          },
          {
            data: 'email',
            "width": "3%",
            render: function(data, type, full, meta) {
              if (data == null) {
                return ""
              } else {
                return "<a class='text-center' href='mailto:" + data + "'>" + data +
                  "</a>";
              }
            },
          },
          {
            data: 'phone',
            className: "text-center",
            "width": "1%"
          },
          {
            data: 'mobile',
            "width": "2%"
          },
          {
            data: 'status',
            "width": "0.5%",
            render: function(data, type, full, meta) {
              if (data == 'Neaktivní') {
                return "<span title='{{ __('Inactive') }}' class='cursor-help mx-3 badge bg-red p-1 me-1'></span>";
              }
              if (data == 'Aktivní') {
                return "<span title='{{ __('Active') }}' class='cursor-help mx-3 badge bg-green p-1 me-1'></span>";
              }
              if (data == 'Mateřská') {
                return "<span title='{{ __('Maternal') }}' class='cursor-help mx-3 badge bg-yellow p-1 me-1'></span>";
              }
            }
          },
          {
            data: 'start_date',
            "width": "1%",
            render: function(data, type, full, meta) {
              var date = moment(data).locale('cs');
              return date.format('DD. MM. YYYY');
            }
          },
          {
            data: 'action',
            "width": "1%",
            orderable: false,
            searchable: false
          },
        ],
      });
    });

    // Form Modal Functions
    $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');
      $('#form_result_modal, form_result_window').html('');
      $.ajax({
        url: "/employees/" + id + "/edit",
        dataType: "json",
        success: function(html) {
          $('#inputForm')[0].reset();
          $("#modal-header, #modal-icon").removeClass();
          $('#formModal').modal('show');
          $('#modal-icon').addClass('fas fa-user-edit fa-2x m-2');
          $('#modal-header').addClass("modal-header bg-" + html.data.department.color_id +
            "-lt");
          $('#action_button, .modal-title').text("{{ __('Edit employee') }}");
          $('#action').val("Edit");
          $('#personal_number').val(html.data.personal_number).attr('readonly', true);
          $('#title_preffix').val(html.data.title_preffix);
          $('#last_name').val(html.data.last_name);
          $('#middle_name').val(html.data.middle_name);
          $('#first_name').val(html.data.first_name);
          $('#title_suffix').val(html.data.title_suffix);
          $('#married_name').val(html.data.married_name);
          $('#phone').val(html.data.phone);
          $('#mobile').val(html.data.mobile);
          $('#id_card').val(html.data.id_card);
          $('#department_id').val(html.data.department_id);
          $('#job_id').val(html.data.job_id);
          $('#comment').val(html.data.comment);
          $('#status').val(html.data.status);
          $('#email').val(html.data.email);
          $('#coffee').val(html.data.coffee);
          $('#department_code').val(html.data.department.department_code);
          $('#employment').val(html.data.employment);
          $('#position').val(html.data.position);
          $('#start_date').val(html.data.start_date);
          $('#end_date').val(html.data.end_date);
          $('#created_at').val(html.data.created_at);
          $('#updated_at').val(html.data.updated_at);
          $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
          $('#store_image').html("<img src={{ URL::to('/') }}/foto/" + html.data.image +
            " height='193px' class='bg-" + html.data.department.color_id +
            "-lt z-depth-1 img-thumbnail-big'></a>");
          $('#store_image').append(
            "<input type='hidden' id='hidden_image' name='hidden_image' value='" + html
            .data.image + "' />");
          $('#hidden_id').val(html.data.id);
        }
      })
    });

    $('#openCreateModal').click(function() {
      $('#inputForm')[0].reset();
      $("#modal-icon, #modal-header").removeClass();
      $('#formModal').modal('show');
      $('#modal-icon').addClass('fas fa-user-plus fa-2x m-2');
      $('#modal-header').addClass("modal-header bg-muted-lt");
      $('#action_button, .modal-title').text("{{ __('Create new employee') }}");
      $('#action').val("Add");
      $('#personal_number').attr('readonly', false)
      $('#department_id, #job_id, #department_code').val('');
      $('#id_card').val('Nový nástup');
      $('#status').val('Neaktivní');
      $('#employment').val('HPP');
      $('#position').val(999);
      $('#coffee').val('N');
      $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
      $('#store_image').html(
        "<img src={{ URL::to('/') }}/foto/no_image.png height='193px' class='bg-muted-lt z-depth-1 img-thumbnail-big'></a>"
      );
      $('#store_image').append(
        "<input type='hidden' id='hidden_image' name='hidden_image' value='' />");
    })

    $('#exportTable').click(function() {
      $('#exportForm')[0].reset();
      $("#modal-export-icon, #modal-export-header").removeClass();
      $('#exportModal').modal('show');
      $('#modal-export-icon').addClass('fas fa-file-export fa-2x m-2');
      $('#modal-export-header').addClass("modal-header bg-purple-lt");
      $('#export_button, .modal-title').text("{{ __('Export employees to file') }}");
      $('#action').val("Export");
    })

    $('#inputForm').on('submit', function(event) {
      event.preventDefault();
      if ($('#action').val() == 'Add') {
        $.ajax({
          url: "{{ route('employees.store') }}",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul>';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html +=
                '</ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' +
                data.success +
                '</li></ul><a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a></div>';
              $('#inputForm')[0].reset();
              $("#preview_image").attr("src", "{{ URL::to('/') }}/foto/no_image.png");
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_modal').html(html);
            }
          }
        })
      }

      if ($('#action').val() == "Edit") {
        event.preventDefault();
        $.ajax({
          url: "{{ route('employees.update') }}",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          success: function(data) {
            var html = '';
            if (data.errors) {
              html = '<div class="alert alert-danger text-danger shadow-sm"><ul>';
              for (var count = 0; count < data.errors.length; count++) {
                html += '<li>' + data.errors[count] + '</li>';
              }
              html += '</ul></div>';
              $('#form_result_modal').html(html);
            }
            if (data.success) {
              html = '<div class="alert alert-success text-success shadow-sm"><ul><li>' +
                data.success + '</li></ul></div>';
              $('.dataTable').DataTable().ajax.reload(null, false);
              $('#form_result_window').html(html);
              $('#formModal').modal('hide');
            }
          }
        });
      }
    });

    // Delete Employee
    $(document).on('click', '.delete', function() {
      employee_id = $(this).attr('id');
      $('#ok_button').text("{{ __('Delete') }}");
      $('#confirmModal').modal('show');
    })

    $('#ok_button').click(function() {
      $.ajax({
        url: "employees/destroy/" + employee_id,
        beforeSend: function() {
          $('#ok_button').text("{{ __('Deleting ...') }}");
        },
        success: function(data) {
          setTimeout(function() {
            $('#confirmModal').modal('hide');
            $('#ok_button').text("{{ __('Delete') }}");
            $('.dataTable').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    })

    // Remove Employee Foto
    $(document).on('click', '.remove', function() {
      employee_id = $(this).attr('id');
      $('#remove_button').text("{{ __('Remove') }}");
      $('#photoModal').modal('show');
    })

    $('#remove_button').click(function() {
      $.ajax({
        url: "employees/destroy-photo/" + employee_id,
        beforeSend: function() {
          $('#remove_button').text("{{ __('Removing ...') }}");
        },
        success: function(data) {
          setTimeout(function() {
            $('#photoModal').modal('hide');
            $('#remove_button').text("{{ __('Remove') }}");
            $('.dataTable').DataTable().ajax.reload(null, false);
          }, 1000);
        }
      })
    })

    $('.export-option').mousedown(function(e) {
      e.preventDefault();
      $(this).prop('selected', !$(this).prop('selected'));
      return false;
    });
  </script>
@endsection
