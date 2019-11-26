@extends('layouts.app')

@section('content')
        <div class="row">
            <img class="col l9 valign-wrapper hide-on-med-and-down" src="{{ asset('images/background4.jpg') }}">    
        <div class="col s12 m8 push-m2 l3">
          <div><h4 class="center" style="margin-top:40px;">Grow<span class="teal-text">Up</span></h4></div>
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="col s10 push-s1 teal-text">
                            <h6> Create an Account here.</h6>
                        </div>
                    <div class="input-field col s10 push-s1 ">
                        <input  id="name" type="text"
                            class="validate {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}">
                        <label for="name">Name</label>

                        @if ($errors->has('name'))
                            <span class="helper-text"
                                data-error="{{ $errors->first('name') }}" data-success="">
                            </span>
                        @endif
                    </div>
                    
                    </div>
                    <div class="row">
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


                    <div class=" row">
                            
                        <div class="input-field col s10 push-s1">
                            <input id="password-confirm" type="text" name="password_confirmation" required>
                            <label for="password-confirm"> Confirm Password </label>
                        </div>

                    </div>
                </div>
                    <div class='row'>
                        <div class="col s4 push-s4">
                            <button type="submit" class="btn col s12 btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                </div>
        </div>
    </div>
@endsection
