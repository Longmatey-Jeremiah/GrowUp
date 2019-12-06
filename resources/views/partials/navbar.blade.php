<header>
@include('partials.login-bar')
<nav role="navigation" class="white lighten-2 nav-extended">
  <div class="containerx">
    <div class="nav-wrapper">
      <a href="/" class="left brand-logo"><img src="{{ asset('images/logo-2.png')}}" alt="logo"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons blue-text">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
            <!--class="dropdown-trigger" data-target="dropdown1"--> 
          <a href="#" class="dropdown-trigger small blue-text" data-target="dropdown1">HOME PAGE<i class="material-icons right">arrow_drop_down</i></a>
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
            
          <ul class="sidenav" id="mobile-demo">
            <li><a href="#" class="small blue-text text-darken-1">Home Page</a></li>
            <li><a href="{{ route('page') }}" class="small blue-text text-darken-1">Page</a></li>
            <li><a href="{{ route('team') }}" class="small blue-text text-darken-1">Team</a></li>
            <li><a href="{{ route('portfolio') }}" class="small blue-text text-darken-1">Portfolio</a></li>
            <li><a href="{{ route('blog') }}" class="small blue-text text-darken-1">Blog</a></li>
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