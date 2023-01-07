  <div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            {{-- Oznámení Dropdown --}}
            <li class="nav-item dropdown {{ request()->segment(1) == 'oznameni' ? 'active' : '' }}" href="">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
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
                <a class="dropdown-item {{ request()->segment(2) == 'zmeny' ? 'active' : '' }}" href="{{ route('oznameni.zmeny') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                      <path d="M12 4v7l2 -2l2 2v-7"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Změny v dokumentaci') }}
                  </span>
                </a>
                <a class="dropdown-item {{ request()->segment(2) == 'akord' ? 'active' : '' }}" href="{{ route('oznameni.akord') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item {{ request()->segment(2) == 'servis' ? 'active' : '' }}" href="{{ route('oznameni.servis') }}">
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
                <a class="dropdown-item {{ request()->segment(2) == 'seminare' ? 'active' : '' }}" href="{{ route('oznameni.seminare') }}">
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
                <a class="dropdown-item {{ request()->segment(2) == 'sluzby' ? 'active' : '' }}" href="{{ route('oznameni.sluzby') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-users" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="9" cy="7" r="4"></circle>
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Změny služeb') }}
                  </span>
                </a>
                <a class="dropdown-item {{ request()->segment(2) == 'informace' ? 'active' : '' }}" href="{{ route('oznameni.informace') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-info-square" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item {{ request()->segment(2) == 'kultura' ? 'active' : '' }}" href="{{ route('oznameni.kultura') }}">
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
            <li class="nav-item dropdown {{ request()->segment(1) == 'stravovani' ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
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
                <a class="dropdown-item {{ request()->segment(2) == 'obedy' ? 'active' : '' }}" href="{{ route('stravovani.obedy') }}">
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
                <a class="dropdown-item {{ request()->segment(2) == 'kantyna' ? 'active' : '' }}" href="{{ route('stravovani.kantyna') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-user" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Personální') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-old" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M11 21l-1 -4l-2 -3v-6"></path>
                      <path d="M5 14l-1 -3l4 -3l3 2l3 .5"></path>
                      <circle cx="8" cy="4" r="1"></circle>
                      <path d="M7 17l-2 4"></path>
                      <path d="M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Pacient') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-flask" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <line x1="9" y1="3" x2="15" y2="3"></line>
                      <line x1="10" y1="9" x2="14" y2="9"></line>
                      <path d="M10 3v6l-4 11a0.7 .7 0 0 0 .5 1h11a0.7 .7 0 0 0 .5 -1l-4 -11v-6"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('OKB') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-radioactive" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-checkup-list" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                           stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                        <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                        <path d="M9 14h.01"></path>
                        <path d="M9 17h.01"></path>
                        <path d="M12 16l1 1l3 -3"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Vyhodnocení dotazníků') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                  <a class="dropdown-item" href="#">
                    <span class="flag flag-country-ua me-2"></span>
                    <span class="nav-link-title">
                      {{ __('Ukrajinské dokumenty') }}
                    </span>
                  </a>
              </div>
            </li>
            <li class="nav-item dropdown {{ request()->segment(1) == 'standardy' ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-book-2" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                       stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path>
                    <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                    <path d="M9 8h6"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Standardy') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item {{ request()->segment(2) == 'akreditacni' ? 'active' : '' }}" href="{{ route('standardy.akreditacni') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-file-certificate" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                      <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                      <circle cx="6" cy="14" r="3"></circle>
                      <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Akreditační') }}
                  </span>
                </a>
                <a class="dropdown-item {{ request()->segment(2) == 'osetrovatelske' ? 'active' : '' }}" href="{{ route('standardy.osetrovatelske') }}">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-stethoscope" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1"></path>
                      <path d="M8 15a6 6 0 1 0 12 0v-3"></path>
                      <path d="M11 3v2"></path>
                      <path d="M6 3v2"></path>
                      <circle cx="20" cy="10" r="2"></circle>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Ošetřovatelské') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-hearts" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784"></path>
                      <path
                            d="M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Léčebné') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-report-medical" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                      <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                      <line x1="10" y1="14" x2="14" y2="14"></line>
                      <line x1="12" y1="12" x2="12" y2="16"></line>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Speciální') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-slice" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Operační') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-heart-rate-monitor" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <rect x="3" y="4" width="18" height="12" rx="1"></rect>
                      <path d="M7 20h10"></path>
                      <path d="M9 16v4"></path>
                      <path d="M15 16v4"></path>
                      <path d="M7 10h2l2 3l2 -6l1 3h3"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Anesteziologické') }}
                  </span>
                </a>
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-radioactive" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                <a class="dropdown-item" href="#">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg class="icon icon-tabler icon-tabler-physotherapist" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                         stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M9 15l-1 -3l4 -2l4 1h3.5"></path>
                      <circle cx="4" cy="19" r="1"></circle>
                      <circle cx="12" cy="6" r="1"></circle>
                      <path d="M12 17v-7"></path>
                      <path d="M8 20h7l1 -4l4 -2"></path>
                      <path d="M18 20h3"></path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('Rehabilitační') }}
                  </span>
                </a>
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-bandage" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                           stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="14" y1="12" x2="14" y2="12.01"></line>
                        <line x1="10" y1="12" x2="10" y2="12.01"></line>
                        <line x1="12" y1="10" x2="12" y2="10.01"></line>
                        <line x1="12" y1="14" x2="12" y2="14.01"></line>
                        <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('OPL') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-flask" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="1"
                           stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="9" y1="3" x2="15" y2="3"></line>
                        <line x1="10" y1="9" x2="14" y2="9"></line>
                        <path d="M10 3v6l-4 11a0.7 .7 0 0 0 .5 1h11a0.7 .7 0 0 0 .5 -1l-4 -11v-6"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('OKB') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-messages" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                           stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
                        <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Logopedické') }}
                    </span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg class="icon icon-tabler icon-tabler-certificate" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                           stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="15" cy="15" r="3"></circle>
                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                        <line x1="6" y1="9" x2="18" y2="9"></line>
                        <line x1="6" y1="12" x2="9" y2="12"></line>
                        <line x1="6" y1="15" x2="8" y2="15"></line>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      {{ __('Legislativní') }}
                    </span>
                  </a>
              </div>
            </li>
            <li class="nav-item dropdown {{ request()->segment(1) == 'media' ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" role="button" aria-expanded="false">
                <span class="nav-link-icon d-md-none d-lg-inline-block">
                  <svg class="icon icon-tabler icon-tabler-device-tv-old" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                       stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                    <path d="M16 3l-4 4l-4 -4"></path>
                    <path d="M15 7v13"></path>
                    <path d="M18 15v.01"></path>
                    <path d="M18 12v.01"></path>
                  </svg>
                </span>
                <span class="nav-link-title">
                  {{ __('Media') }}
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item{{ request()->segment(2) == 'radio' ? 'active' : '' }}" href="{{ route('media.radio') }}">
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
                        Rádio
                      </span>
                    </a>
                    <a class="dropdown-item {{ request()->segment(2) == 'videa' ? 'active' : '' }}" href="{{ route('media.videa') }}">
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
