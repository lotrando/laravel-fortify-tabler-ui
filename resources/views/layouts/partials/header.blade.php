<header class="navbar navbar-expand-md navbar-light d-print-none">
  <div class="container-fluid">
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="https://www.khn.cz" target="_blank">
        <img class="navbar-brand-image" src="{{ asset('img/logo.png') }}" alt="Logo Intranetu KHN a.s.">
      </a>
    </h1>
    <div class="navbar-nav order-md-last flex-row">
      <div class="nav-item d-none d-md-flex">
        <div class="btn-list">
          @auth
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
          @endauth
          <a class="btn hover-shadow-sm" href="{{ route('adversevents.index') }}" rel="noreferrer">
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
          @guest
            <a class="btn hover-shadow-sm" href="{{ route('register') }}" rel="noreferrer">
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
          @endguest
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
