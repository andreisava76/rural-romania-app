<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Rural Romania') }}</title>

    <!-- Favicon links -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('assets/img/icons/favicon_16.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="{{ asset('assets/img/icons/favicon_32.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="{{ asset('assets/img/icons/favicon_48.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="64x64" href="{{ asset('assets/img/icons/favicon_64.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="96x96" href="{{ asset('assets/img/icons/favicon_96.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="128x128" href="{{ asset('assets/img/icons/favicon_128.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="192x192" href="{{ asset('assets/img/icons/favicon_192.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="512x512" href="{{ asset('assets/img/icons/favicon_512.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset(mix('css/app-layout.css')) }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Rural Romania') }}
                        </a>
                    </li>
                </ul>

                <div class="col-lg-4 mx-auto">
                    <div class="d-flex form-inputs">
                        <input class="form-control btn-outline-success" type="text" placeholder="Search anything..."
                               aria-label="search bar">
                        <span class="fa-solid fa-magnifying-glass"></span>
                    </div>
                </div>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('CONTACT') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('BLOG') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <hr class="menu-item-separator">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Book now') }}
                        </a>
                    </li>
                    <!-- Authentication Links -->
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('js')
</body>
</html>
