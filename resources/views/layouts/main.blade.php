<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>{{ __('Oznámení') }}</title>

  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.min.css') }}" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      color: #666;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    @yield('header')

    @yield('navigation')

    @yield('main')

    @section('logout')
      <div class="modal modal-blur fade" id="logout-modal" data-bs-backdrop="static"
           data-bs-keyboard="false" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content shadow-lg">
            {{-- <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="{{ __('Close') }}"></button> --}}
            <div class="modal-status bg-warning"></div>
            <div class="modal-body py-4 text-center">
              <svg class="icon text-warning icon-lg mb-2" xmlns="http://www.w3.org/2000/svg"
                   width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                   stroke="currentColor" fill="none" stroke-linecap="round"
                   stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 9v2m0 4v.01" />
                <path
                      d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
              </svg>
              <h3>{{ __('Are you sure?') }}</h3>
              <div class="text-muted">
                {{ __('Do you really want to log out?') }}
              </div>
            </div>
            <div class="modal-footer">
              <div class="w-100">
                <div class="row">
                  <div class="col">
                    <button class="btn btn-muted w-100 hover-shadow" data-bs-dismiss="modal">
                      {{ __('Close') }}
                    </button>
                  </div>
                  <div class="col">
                    <form @submit.prevent action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button class="btn btn-warning w-100 hover-shadow"
                              type="submit">{{ __('Logout') }}</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection

  </div>

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/tabler.js') }}"></script>
  <script src="{{ asset('js/demo.js') }}"></script>
</body>

</html>
