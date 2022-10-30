@extends('layouts.app')

@section('main')
  <div class="page page-center">
    <div class="container-tight py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="."><img src="{{ asset('static/logo.svg') }}" alt="Tabler logo" height="36"></a>
      </div>
      <form class="card card-md" action="{{ route('password.email') }}" method="POST" autocomplete="off">
        @csrf
        <div class="card-body">
          <h2 class="mb-4 text-center">{{ __('Sign in') }}</h2>
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
            <label class="form-label">{{ __('Email address') }}</label>
            <input class="form-control" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __('Email address') }}">
          </div>
          <div class="form-footer">
            <button class="btn btn-primary w-100 text-uppercase" type="submit">{{ __('Password reset') }}</button>
          </div>
        </div>
      </form>
      <div class="text-muted mt-3 text-center">
        {{ __('Don\'t have account yet?') }} <a href="{{ route('register') }}" tabindex="-1">{{ __('Sign up') }}</a>
      </div>
    </div>
  </div>
  <script>
    function showPassword() {
      var element = document.getElementById("password");
      if (element.type === "password") {
        element.type = "text";
      } else {
        element.type = "password";
      }
    };
  </script>
@endsection
