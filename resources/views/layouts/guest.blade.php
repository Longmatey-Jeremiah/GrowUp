<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet  media="screen,projection" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/exstyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

<header>
    @include('partials.login-bar')
    @section('login-bar-color','indigo darken-4')
    <nav role="navigation" class="white lighten-2 nav-extended">
        <div class="containerx">
            <div class="nav-wrapper">
                <a href="/" class="left brand-logo"><img src="{{ asset('images/logo-2.png')}}" alt="logo"></a>
                <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons blue-text">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <!--class="dropdown-trigger" data-target="dropdown1"--> 
                        <a href="#" class="dropdown-trigger blue-text small" data-target="dropdown1">HOME PAGE<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <li>
                        <a class="@yield('nav-link-color') small blue-text" href="{{ route('page') }}">PAGE</a>
                    </li>
                    <li>
                    <a class="@yield('nav-link-color') small blue-text" href="{{ route('team') }}">TEAM</a>
                    </li>
                    <li>
                        <a class="@yield('nav-link-color') small blue-text" href="{{ route('portfolio') }}">PORTFOLIO</a>
                    </li>
                    <li>
                        <a class="@yield('nav-link-color') small blue-text" href="{{ route('blog') }}">BLOG</a>
                    </li>
                </ul>
    
        </div>
    </div>
    </nav>
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
        <div class="background">
            <img src="{{asset('images/bitcoin/chart-bg.jpg')}}">
        </div>
        <a href="javasript:void(0)"><img class="circle" src=" {{asset('images/bitcoin/chart-bg.jpg')}}"></a>
        <a href="javasript:void(0)"><span class="white-text name">John Doe</span></a>
        <a href="javasript:void(0)"><span class="white-text email"></span></a>
        </div>
    </li>
    <li>
        <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header waves-effect waves-light">HOME PAGE</a>
                <div class="collapsible-body">
                <ul class="small">
                    <li><a href="/">MAIN FINANCE</a></li>
                    <li><a href="{{ route('chart') }}">MAIN CHART</a></li>
                    <li><a href="{{ route('escrow') }}">ESCROW</a></li>
                    <li><a href="{{ route('broker') }}">BROKER</a></li>
                    <li><a href="{{ route('law-firm') }}">LAW FIRM</a></li>
                    <li><a href="{{ route('lawyer') }}">PRIVATE LAWYER</a></li>
                </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="{{ route('page') }}">PAGE</a></li>
    <li><a href="{{ route('team') }}">TEAM</a></li>
    <li><a href="{{ route('portfolio') }}">PORTFOLIO</a></li>
    <li><a href="{{ route('blog') }}">BLOG</a></li>
</ul>
<ul class="dropdown-content" id="dropdown1">
    <li><a href="/">MAIN FINANCE</a></li>
    <li><a href="{{ route('chart') }}">MAIN CHART</a></li>
    <li><a href="{{ route('escrow') }}">ESCROW</a></li>
    <li><a href="{{ route('broker') }}">BROKER</a></li>
    <li><a href="{{ route('law-firm') }}">LAW FIRM</a></li>
    <li><a href="{{ route('lawyer') }}">PRIVATE LAWYER</a></li>
</ul>
</header>
<section class="vh20" style="background:url({{ asset('images/breadcrumbs-bg.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
    <div class="section review">
        <div class="row containerx center">
            <h6 class="white-text para center">Subtitle Page</h6>
            <h5 class="white-text header center">@yield('route-name')</h5>
            <i><a href="/" class="small light-blue-text center">Home</a></i> <span class="white-text small"> > @yield('route-name')</span>

        </div>
    </div>
</section>
</div>
</section>
<main>
    @yield('content')
</main>
<footer class="page-footer indigo darken-4" style="padding: 5% 0 0 0;">
    <div class="containerx">
        <div class="row">
        <div class="col l3 m6 s12">
            <img src="{{ asset('images/logo.png')}}" alt="logo">
            <p class="grey-text text-lighten-4">We are a team of 
            college students working on this project like it's our
            full time job.We love to code.Just do it, Ipsum. Proin gravida nibh vel.
            <div class="divider"></div>
            <br>
            <a href="#!"><img class="picons" src="{{ asset('icons/whatsapp.png')}}" alt="logo"></a>
            <a href="#!"><img class="picons" src="{{ asset('icons/youtube.png')}}" alt="logo"></a>
            <a href="#!"><img class="picons" src="{{ asset('icons/snapchat.png')}}" alt="logo"></a>
            <a href="#!"><img class="picons" src="{{ asset('icons/pinterest1.png')}}" alt="logo"></a>
            <a href="#!"><img class="picons" src="{{ asset('icons/linkedin.png')}}" alt="logo"></a>
            <a href="#!"><img class="picons" src="{{ asset('icons/twitter.png')}}" alt="logo"></a>
            </p>


        </div>
        <div class="col l3 m6 s12">
            <h5 class="white-text">CERTIFICATES </h5>
            <ul>
            <li><a href="#!"><p>Ipsum. Proin gravida nibh vel</p></a></li>

            <li><a href="#!"><p>Auctor aliquet. Aenean</p></a></li>

            <li><a href="#!"><p>Din, lorem quis bibendum</p></a></li>

            <li><a href="#!"><p>Nisi elit consequat ipsum</p></a></li>

            <li><a href="#!"><p>Nisi elit consequat ipsum</p></a></li>

            </ul>
        </div>
        <div class="col l3 m6 s12">
            <h5 class="white-text">INSTAGRAM</h5>
            <ul>
                <li><a href="#!"><p>Ipsum. Proin gravida nibh vel</p></a></li>

                <li><a href="#!"><p>Auctor aliquet. Aenean</p></a></li>

                <li><a href="#!"><p>Din, lorem quis bibendum</p></a></li>

                <li><a href="#!"><p>Nisi elit consequat ipsum</p></a></li>

                <li><a href="#!"><p>Nisi elit consequat ipsum</p></a></li>

            </ul>
        </div>
        <div class="col l3 m6 s12">
            <h5 class="white-text">NEWSLETTER</h5>
            <p>
                Please write your email and get our amazing updates,news
                and support. Proin gravida nibh vel velit auctor aliquet.
            </p>
            <a href="#">Get latest updates and offers</a>
            <div class="input-field col s12">
                <i class="material-icons prefix white-text">email</i>
                <input id="subscribe" type="email" class="validate"/>
                <label for="subscribe">Email Address</label>
            </div>
        </div>
        </div>
    </div>
    <div class="footer-copyright indigo darken-2">
        <div class="containerx">
        Made by <a class="brown-text text-lighten-3" href="#">Elinix Solutions Ltd.</a>
        </div>
    </div>
    </footer>


    </div>
    <!-- Compiled and minified JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.AutoInit();
        });
        $(document).ready(function (){
           $(".dropdown-trigger").dropdown({ hover:true });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
