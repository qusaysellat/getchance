<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" class="">
                <span class="text-warning">{{ config('app.name', 'Laravel') }}</span>
            </a>

        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                @if(Auth::user() && Auth::user()->usertype == 0)
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('dashboard') }}" class="">
                            {{ 'Dashboard' }}
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('stats') }}" class="">
                            {{ 'Statistics' }}
                        </a>
                    </li> --}}
                @endif
                @guest
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                @else
                    @if(Auth::user()->usertype!=0)
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('users.show', Auth::user()->id) }}" >{{ __('My Profile') }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('posts.index') }}" >{{ __('My Posts') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('notifications.index') }}" >{{ __('Notifications') }}</a>
                    </li>
                    <li class="nav-item">
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                        class="navbar-brand"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>
          </div>
        </div>
    </nav>
    <div id="app" style="margin: 10px">
        @yield('content')
    </div>
</body>
</html>
