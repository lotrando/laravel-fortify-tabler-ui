<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link type="image/png" href="{{ asset('img/akord.png') }}" rel="shortcut icon">

  <title>{{ $category ?? 'Intranet' }} - {{ $title ?? 'KHN' }}</title>

  <link href="{{ asset('css/tabler.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-flags.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-payments.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/tabler-vendors.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
  </style>
  <style>
    body {
      font-family: 'Roboto Condensed';
      min-height: 100vh;
      color: #777777;
    }
  </style>
</head>

<body>
  <!-- Header Start -->
  @include('layouts.partials.header')
  <!-- Header End -->

  <!-- Navigation Start -->
  @include('layouts.partials.navigation')
  <!-- Navigation End -->

  <section>

    @yield('content')

  </section>

  @include('layouts.partials.footer')

  @yield('modals')

  @include('layouts.partials.logout')

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/tabler.min.js') }}"></script>
  <script src="{{ asset('js/demo.min.js') }}"></script>
  <script src="{{ asset('js/moment-with-locales.js') }}"></script>
  @include('layouts.partials.scripts')

</body>

</html>
