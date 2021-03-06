<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@if ( !Request::is('/') ){{ $title }} | @endif {{ env('APP_NAME') }}</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">


  </head>
  <body>
    <div id="app">
      {{-- GlobalNav --}}
      <nav class="navbar bg-dark">
        <a class="navbar-brand text-white" href="{{ url('/') }}">{{ config('app.name') }}</a>
        {{-- 認証関連リンク --}}
        @guest
          <a class="nav-item btn btn-primary" href="{{ route('login') }}">
            {{ __('Login') }}
          </a>
        @else
          <div class="ml-auto">
            <span class="nav-item text-white nav-username">{{ Auth::user()->name }}</span>
            @if ( Auth::user()->name == 'admin')
              <a  class="nav-item btn btn-primary" href="{{ route('register') }}">
                {{ __('Register') }}
              </a>
            @endif
            <a class="nav-item btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="post">
              @csrf
            </form>
          </div>
        @endguest
      </nav>

      {{-- Include Contents --}}
      <main>
        @yield('content')
      </main>
    </div>

    {{-- Javascript --}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
