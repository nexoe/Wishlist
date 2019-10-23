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

    <style>

    </style>
</head>
<body>
<div id="app">
  <nav class="navbar is-fixed-top is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
      <h4 class="is-size-4 has-text-primary">Wyshlist</h4>
    </a>

    <div class="navbar-burger" v-on:click="openMenu">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </div>
  <div class="navbar-menu">
    <div class="navbar-end">
      @if(Auth::check())
        <div class="navbar-item has-dropdown is-hoverable">
          <div class="navbar-link">
            {{Auth::user()->email}}
          </div>
          <div class="navbar-dropdown">
            <a class="navbar-item" href="{{Route('home')}}"><i class="fa fa-user"></i> {{_i('Your Profile')}}</a>
            <span class="navbar-divider"></span>
            <a class="navbar-item" href="{{Route('logout')}}"><i class="fa fa-sign-out"></i> {{_i('Logout')}}</a>
          </div>
        </div>
      @endif
    </div>
  </div>
</nav>
        @yield('content')
      </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>
