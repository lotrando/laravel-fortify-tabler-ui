<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intranet KHN</title>
  <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
  <link type="image/png" href="{{ asset('static/logo-khn.png') }}" rel="shortcut icon">
  <style>
    body {
      background-image: url("{{ asset('static/background-khn.jpg') }}");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      margin: 0;
      overflow: hidden;
      color: #666;
    }
  </style>
</head>

<body>
  <main>
    @yield('main')
  </main>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo.min.js') }}"></script>
</body>

</html>
