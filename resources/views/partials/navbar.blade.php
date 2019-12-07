<header>
@include('partials.login-bar')
<nav role="navigation" class="white lighten-2 nav-extended">
  <div class="containerx">
    <div class="nav-wrapper">
      <a href="/" class="left brand-logo"><img src="{{ asset('images/logo-2.png')}}" alt="logo"></a>
      <a href="javasript:void(0)" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons blue-text">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
            <!--class="dropdown-trigger" data-target="dropdown1"--> 
          <a href="javasript:void(0)" class="dropdown-trigger small blue-text" data-target="dropdown1">HOME PAGE<i class="material-icons right">arrow_drop_down</i></a>
        </li>
        <li>
          <a href="{{ route('page') }}" class="small blue-text text-darken-1">PAGE</a>
        </li>
        <li>
          <a href="{{ route('team') }}" class="small blue-text text-darken-1">TEAM</a>
        </li>
        <li>
          <a href="{{ route('portfolio') }}" class="small blue-text text-darken-1">PORTFOLIO</a>
        </li>
        <li>
          <a href="{{ route('blog') }}" class="small blue-text text-darken-1">BLOG</a>
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
  <script>
    $(document).ready(function (){
      $(".dropdown-trigger").dropdown({ hover:true });
    })
  </script>
</header>