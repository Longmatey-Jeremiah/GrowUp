<nav class="indigo darken-4">
    <div class="">
        <ul class="containerx">
            @guest 
                <li class="right"><a class="small white-text" href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                <li class="right">
                @if (Route::has('register')) 
                    <a class="white-text small" href="{{ route('register') }}">{{ __('REGISTER') }}</a> 
                @endif
                </li>
                @else
                    <!--dropdown menu for user logout-->
                <li class="right">
                    <a role="button" class='blue-text dropdown-trigger btn' 
                        href='#' data-target='logout_btn'
                        aria-haspopup="true" aria-expanded="false" v-pre> 
                        {{ Auth::user()->name }}
                    </a>

                    <div id='logout_btn class='dropdown-content' >
                        <a  href="{{ route('logout') }}"     
                            onclick="event.preventDefault();    
                            document.getElementById('logout.form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" 
                        method="POST" style="display: none;"> 
                        @csrf 
                        </form>
                    </div> 
                </li>
            @endguest 
        </ul>
    </div>
</nav>