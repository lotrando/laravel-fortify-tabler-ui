@extends('layouts.app')

@section('main')
  <div class="page min-vh-100">
    <div class="container-fluid p-2">
      <div class="card card-md shadow-sm" action="#" method="POST" autocomplete="off">
        <div class="card-body">
          <h2 class="text-center">{{ __('Homepage') }}</h2>
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
        </div>
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
