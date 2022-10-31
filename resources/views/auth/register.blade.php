@extends('layouts.app')

@section('main')
  <div class="container-fluid">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="mb-4 text-center">
          <a class="navbar-brand navbar-brand-autodark" href="."><img src="{{ asset('static/logo-khn.png') }}" alt="Tabler logo" height="100"></a>
        </div>
        <form class="card card-md shadow-sm" action="{{ route('register') }}" method="POST">
          @csrf
          <div class="card-body">
            <h2 class="text-upercase mb-2 text-center">{{ __('Create new account') }}</h2>
            <div class="mb-6">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Personal number') }}</label>
              <input class="form-control" name="personal_number" type="text" value="{{ old('personal_number') }}" placeholder="{{ __('Personal number') }}">
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Name') }}</label>
              <input class="form-control" name="name" type="text" value="{{ old('name') }}" placeholder="{{ __('Name') }}">
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Email address') }}</label>
              <input class="form-control" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __('Email address') }}">
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Password') }}</label>
              <div class="input-group input-group-flat">
                <input class="form-control" id="password" name="password" type="password" value="{{ old('password') }}" placeholder="{{ __('Password') }}" autocomplete="off">
                <span class="input-group-text">
                  <a class="link-secondary cursor-pointer" data-bs-toggle="tooltip" title="{{ __('Click to show passwords') }}" onclick="showPasswords()">
                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="12" cy="12" r="2" />
                      <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                    </svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">{{ __('Password confirmation') }}</label>
              <div class="input-group input-group-flat">
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}"
                  placeholder="{{ __('Password confirmation') }}" autocomplete="off">
                <span class="input-group-text">
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input class="form-check-input" type="checkbox" />
                <span class="form-check-label">{{ __('Agree the') }} <a href="./terms-of-service.html" tabindex="-1">{{ __('terms and policy') }}</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button class="btn btn-primary w-100 text-uppercase" type="submit">{{ __('Sign up') }}</button>
            </div>
          </div>
        </form>
        <div class="text-muted mt-3 text-center">
          {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
        </div>
      </div>
    </div>
  </div>
  <script>
    function showPasswords() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }

      var y = document.getElementById("password_confirmation");
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>
@endsection
