@extends('layouts.app')

@section('main')
  <div class="page">
    <div class="container-fluid py-2 pt-3">
      <div class="card card-md shadow-sm">
        @if ($errors->any())
          <div class="alert alert-danger text-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="text-muted">You are logged in!</div>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-danger" type="submit">
                {{ __('Logout') }}
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
      @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
      @include('profile.update-password-form')
    @endif
  @endsection
