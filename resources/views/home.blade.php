@extends('layouts.default')

@section('main')
  <div class="container-fluid mt-2">
    <div class="col-12">
      <div class="card">
        <div class="card-header card-header-light d-flex align-items-center justify-content-between">
          <h1 class="text-muted mb-0">
            {{ __('Home') }}
          </h1>
        </div>
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
          <div class="container-fluid py-2">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
              @include('profile.update-profile-information-form')
            @endif
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
              @include('profile.update-password-form')
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection
