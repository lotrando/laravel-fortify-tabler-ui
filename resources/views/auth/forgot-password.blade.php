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
          <div class="alert alert-info text-justify shadow-sm" role="alert">
            <h4 class="alert-title">{{ __('Forgot your password?') }}</h4>
            <div class="text-muted">
              {{ __('No problem. Just let us your email address and we will email you a password reset link that will allow you to enter a new one.') }}
            </div>
          </div>
          <div class="mb-6">
            @if ($errors->any())
              <div class="alert alert-danger text-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
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
          <div class="hr-text">{{ __('or') }}</div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <a class="btn btn-white w-100 hover-shadow" href="{{ route('login') }}">
                  {{ __('Sign in') }}
                </a>
              </div>
              <div class="col">
                <a class="btn btn-white w-100 hover-shadow" href="{{ route('register') }}">
                  {{ __('Sign up') }}
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>
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
