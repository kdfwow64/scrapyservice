<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ScrapyGate</title>

    <!-- Style -->
    <link href="{{ asset('assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/logo/logo.png') }}">
    <link rel="icon" href="{{ asset('assets/logo/logo.png')}}">
</head>
<body>
    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">

            <div class="topbar-left">
                <button class="topbar-toggler">&#9776;</button>
                <a class="topbar-brand" href="#">
                    <img class="logo-default" src="{{ asset('assets/logo/logo.png') }}" alt="logo">
                    <img class="logo-inverse" src="{{ asset('assets/logo/logo.png') }}" alt="logo">
                </a>
            </div>


            <div class="topbar-right">
                <ul class="topbar-nav nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trial</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>


                    @if(!Auth::guest() && Auth::user()->name == 'Admin')
                    <li class="nav-item">
                        <a id="mail_navbar" class="nav-link" href="{{ url('mail/template') }}" role="button"   aria-expanded="false" v-pre>
                            Mail Template
                        </a>

                    </li>

                    <li class="nav-item">
                        <a id="blacklist_navbar" class="nav-link" href="{{ url('blacklist/manage') }}" role="button"   aria-expanded="false" v-pre>
                            Blacklist
                        </a>

                    </li>

                    <li class="nav-item">
                        <a id="permission_navbar" class="nav-link" href="{{ url('permission/manage') }}" role="button"   aria-expanded="false" v-pre>
                            Permissions
                        </a>

                    </li>
                    @endif
                    @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>
    <!-- END Topbar -->
        

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/thesaas.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

