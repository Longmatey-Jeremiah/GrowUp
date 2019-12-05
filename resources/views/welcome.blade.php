@extends('layouts.app')
@section('content')


<section class="parallax-container" style="background:url({{ asset('images/background4.jpg')}}) fixed" data-speed="6" data-type="background">
  
  <!--navbar section -->
<header class="containerx" style="border:none;outline:none;padding:2% 0;border-bottom:1px solid lightgrey">
  <nav role="navigation" class="lighten-2" style="background-color:transparent;outline:none;border:none;">
    <div class="containerx">
      <div class="nav-wrapper">
          <a href="/" class="left brand-logo"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
                <!--navbar dropdown--> 
              <a href="#" class="dropdown-trigger blue-text small" data-target="dropdown1">HOME PAGE<i class="material-icons right">arrow_drop_down</i></a>
            </li>
            <li>
              <a href="{{ route('page') }}" class="blue-text small">PAGE</a>
            </li>
            <li>
              <a href="{{ route('team') }}" class="blue-text small">TEAM</a>
            </li>
            <li>
              <a href="{{ route('portfolio') }}" class="blue-text small">PORTFOLIO</a>
            </li>
            <li>
              <a href="{{ route('blog') }}" class="blue-text small">BLOG</a>
            </li>
            @guest 
            <li> 
              <a
                href="{{ route('login') }}" class="blue-text small">{{ __('LOGIN') }}
              </a> 
            </li>
            <li>
              @if (Route::has('register')) 
              <a 
                  href="{{ route('register') }}" class="blue-text small">{{ __('REGISTER') }}
              </a> 
              @endif
            </li>
              @else
              <!--this should reveal  a dropdown menu for the user to logout-->
              <li>
                <a role="button" class='dropdown-trigger btn' class="blue-text small" 
                      href='#' data-target='logout_btn'
                      aria-haspopup="true" 
                      aria-expanded="false" v-pre> 
                      {{ Auth::user()->name }}
                </a>
                //this should be the dropdown menu for logout
                <div id='logout_btn class='dropdown-content' >
                    <a  href="{{ route('logout') }}"   class="blue-text small" 
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
      </div>
    </nav>
          
        <ul class="sidenav" id="mobile-demo">
          <li><a href="#">Home Page</a></li>
          <li><a href="{{ route('page') }}">Page</a></li>
          <li><a href="{{ route('team') }}">Team</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
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

  <div class="valign-wrapper container" style="padding-top:4%;padding-bottom:1%;">
    <div class="row">
      <br><br><br>
      <div class="col center s12 white-text">
      
      <p class="center small white-text">TRUST YOUR SUCCESS WITH PROFESSIONALS</span></p> 
          <h1 class="header center">WE MAKE YOUR MONEY GROW</h1>
          
          <p class="center containerx hide-on-small-only">One of the challenges in networking is everybody thinks it's making cold calls to strangers. Actually, it's the people who already have strong trust relationships with you, who know you're dedicated, smart, a team player.</p>
          <br><br>
      </div>
          <div class="row center">
            <a href="#" id="download-button" class="btn waves-effect waves-light teal lighten-1">BUY NOW!</a>  
            <a href="#" id="download-button" class="btn waves-effect waves-light teal lighten-1">REVIEWS</a>
          </div>
      </div>
  </div>
</section>
     <br><br><br>             
  <!--   Icon Section   -->
  @include('partials.icon')
  
  <!--services section-->
  @include('partials.services')

  <!-- credibility section-->
  @include('partials.credibility')

  <!--projects section-->
  @include('partials.projects')
  
  <!--offers section-->
  @include('partials.offers')

  <!--experts section-->
  @include('partials.experts')
  
  <!--Profit calculator-->
  @include('partials.profit_calc')
 
  <!--We render our graph here -->

  <!--We render our blog post in this section-->
  @include('partials.blog-post')

  <!-- Contact section-->
  @include('partials.contact')

  <!--We render our reviews in this section-->
  @include('partials.reviews')      

  <!--We render our skills in this section -->
  @include('partials.skills')

  <!--we render map here-->

  <!--Clients section-->
  @include('partials.clients')

  <!--add the footer view at the bottom of this page-->
  @include('partials.footer')

@endsection
          