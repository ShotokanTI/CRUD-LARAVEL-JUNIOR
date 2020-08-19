<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Argon Dashboard') }}</title>
  <!-- Favicon -->
  <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
  <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD SUPERA</title>
  <link href=" {{ asset('argon') }}/css/argon.css " rel="stylesheet" type="text/css" />
  <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <style>
    .alert {
      position: relative;
      margin-bottom: 1rem;
      border: 0px solid transparent;
      border-radius: .375rem;
      border: 2px solid transparent;
      max-height: 25px;
      text-align: center;
      padding-top: 1px;
    }

    .alert-danger {
      background-color: red;
    }
  </style>
</head>

<body>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @yield('main')
  @yield('unidade')
  <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('argon') }}/js/argon.js" type="text/js"></script>

  <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  @stack('js')

  <!-- Argon JS -->
  <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>

</html>
