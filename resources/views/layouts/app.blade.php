<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" id="css-main" href="{{asset ('/css/codebase.min-4.3.css')}}">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    @yield('styleLink')
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <div class="logo">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                   <h1> intern <span> Finder</span></h1>
                </a> --}}
                <h1> intern <span> Finder</span></h1>
            </div>
            <div class="push-left">
                <button id="menu-toggler" data-class="menu-active" class="hamburger">
                    <span class="hamburger-line hamburger-line-top"></span>
                    <span class="hamburger-line hamburger-line-middle"></span>
                    <span class="hamburger-line hamburger-line-bottom"></span>
                </button>
                <ul id="primary-menu" class="menu nav-menu">
                    @guest
                        @if (Route::has('login'))
                            <li class="menu-item dropdown">
                                <a class="logs nav__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="menu-item ">
                                <a class="logs nav__link"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @endguest
                    <!-- <li class="menu-item current-menu-item">
                        <a class="nav__link" href="#">Home</a>
                    </li> -->
                    <!-- <li class="menu-item dropdown"><a class="nav__link" href="#">About</a>
                        <ul class="sub-nav">
                            <li><a class="sub-nav__link" href="#">link 1</a></li>
                            <li><a class="sub-nav__link" href="#">link 2</a></li>
                            <li><a class="sub-nav__link" href="#">link 3 - long link - long link - long link</a>
                            </li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </nav>
       
    </div>
    <main>
        @yield('content')
    </main>

    @yield('script')
    <script>
        $(document).ready(function() {
           
            $("#menu-toggler").click(function() {
                toggleBodyClass("menu-active");
            });

            function toggleBodyClass(className) {
                document.body.classList.toggle(className);
            }

        });
    </script>
</body>

</html>
