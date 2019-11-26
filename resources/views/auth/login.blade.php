@extends('layouts.app')

@section('content')
    <div class="row ">
                <img class="col l9 hide-on-med-and-down" src="{{ asset('images/background4.jpg') }}">    
            <div class="col s12 m8 push-m2 l3" style="padding-top:40px;">
              <div>
                  <h4 class="center">
                    Grow<span class="teal-text">Up</span></h4>
                </div>
                <div class="row">
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="row">
                                
                                <div class="col s10 push-s1 teal-text">
                                    <h6 class="center">Sign In here. </h6>
                                </div>

                            <div class="input-field col s10 push-s1">
                                <input id="email" type="email"
                                class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email') }}">
                                <label for="email">Email</label>
                            </div>
        
                            @if ($errors->has('email'))
                                <span class="helper-text"
                                    data-error="{{ $errors->first('email') }}" data-success="">
                                </span>    
                            @endif
                        </div>
                        <div class="row">
                            <div class="input-field col s10 push-s1">
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
                            <div class="col s6 push-s1 m6 offset-m2">
                                <div class="form-check">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row center">
                            <div class="col s9 push-s2 l12">
                                <button type="submit" class="btn col push-s1">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn col push-s1" style="margin-left:4px;" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
        </div>
    
@endsection
