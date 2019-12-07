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
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Lora:400,400i,700,700i|Raleway|Roboto:300,400,500,700&display=swap" rel="stylesheet  media="screen,projection" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/exstyle.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app" class="vh" style="background-color:whitesmoke">
    <div class="row container">
     <div class="col s12 m8 offset-m2 l6 offset-l3 container valign-wrapper"  style="padding:20vh 0 0 0">
      <div class="col s12 container">
       <div class="row">
         <div class="col s12">
            <h6 class="center head">{{ __('Verify Your Email Address') }}</h6>
        </div>
       </div>
       <div class="row">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <a href="{{ route('verification.resend') }}" class="small">{{ __('click here to request another') }}</a>.
       </div>
       </div>
     </div>    
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

