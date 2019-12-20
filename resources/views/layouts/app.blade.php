<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wyshlist </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
    <navbar is_logged_in="{{Auth::check()}}" home_url="{{Route('home')}}" logout_url="{{Route('logout')}}"></navbar>
    @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>
