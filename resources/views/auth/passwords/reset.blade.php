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
        <form method="POST" action="{{ route('password.update') }}">
                @csrf
                
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="row">
                    <div class="col s12">
                        <h6 class="center head">{{ __('Reset Password') }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-2">email</i>
                        <input id="email" type="email"
                        class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}"
                        value="{{ old('email') }}">
                        <label for="email">{{ __('E-Mail') }}</label>
                    </div>

                    @if ($errors->has('email'))
                        <span class="helper-text"
                            data-error="{{ $errors->first('email') }}" data-success="">
                        </span>    
                    @endif
                    </div>
                    <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-2">lock</i>
                        <input id="password" type="text" class="validate
                         {{ $errors->has('password') ? ' is-invalid' : '' }}"
                        value="{{ old('password') }}" name='password'>
                        <label for="password">Password</label>
                    </div>

                    @if ($errors->has('password'))
                        <span class="helper-text"
                            data-error="{{ $errors->first('password') }}" data-success="">
                        </span>    
                    @endif
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix blue-text text-darken-2">lock</i>
                            <input id="re_password" type="text" class="validate" name="password_confirmation">
                            <label for="re_password">{{ __('Confirm Password') }}</label>
                        </div>
                    </div>

        <div class="row center">
            <div class="col s12 center">
                <button type="submit" class="btn blueb waves-effect small waves-light" id="reset_btn">
                        {{ __('Reset Password') }}
                    <i class="material-icons right tiny">send</i>
                </button>
            </div>
        </div>
        </form>
    </div>
</div>    
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
