@extends('layouts.app')
@include('partials.navbar')
@section('content')
                  <div id="index-banner" class="parallax-container">
                    <div class="section no-pad-bot">
                      <div class="container">
                        <br><br>
                        <h1 class="header center white-text text-lighten-1 light">Grow<span class="yellow-text">Up</span></h1>
                        <div class="row center">
                          <h6 class="header col s12 white-text">Like the Internet, Bitcoin will change the way people interact
                               and do business around the world. <br> <span class="teal-text text-lighten-3">Erik Voorhees</span> <br>MAKE YOUR MONEY GROW</h6>
                        </div>
                        <div class="row center">
                          <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                        </div>
                        <br><br>
                
                      </div>
                    </div>
                    <div class="parallax"><img src="{{ asset('images/background4.jpg') }}" alt="Unsplashed background img 1"></div>
                  </div>
                
                
                  <div class="">
                    <div class="section">
                
                      <!--   Icon Section   -->
                      <div class="row">
                        <div class="col s12 m3">
                          <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>
                
                            <p class="light">We did most of the heavy lifting for you 
                                to provide a default stylings that incorporate our custom 
                                components. Additionally, we refined animations and transitions
                                 to provide a smoother experience for developers.</p>
                          </div>
                        </div>
                
                        <div class="col s12 m3">
                          <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>
                
                            <p class="light">By utilizing elements and principles of Material Design,
                                 we were able to create a framework that incorporates components
                                  and animations that provide more feedback to users.
                                 Additionally, a single underlying responsive system across
                                  all platforms allow for a more unified user experience.</p>
                          </div>
                        </div>
                
                        <div class="col s12 m3">
                          <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy to work with</h5>
                
                            <p class="light">We have provided detailed documentation as well
                                as specific code examples to help new users get started. We 
                                are also always open to feedback and can answer any questions
                                 a user may have about Materialize.</p>
                          </div>
                        </div>

                        <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">attach_money</i></h2>
                            <h5 class="center">Let your money work for you</h5>
                
                            <p class="light">We have provided detailed documentation as well
                                as specific code examples to help new users get started. We 
                                are also always open to feedback and can answer any questions
                                a user may have about Materialize.</p>
                        </div>
                        </div>
                      </div>
                
                    </div>
                  </div>
                
                
                  <div class="parallax-container valign-wrapper">
                    <div class="section no-pad-bot">
                      <div class="container">
                        <div class="row center">
                          <h5 class="header col s12 white-text light">A modern
                               responsive front-end framework based on Material Design</h5>
                        </div>
                      </div>
                    </div>
                    <div class="parallax"><img src="{{ asset('images/background1.jpg') }}"></div>
                  </div>
                
                  <div class="container">
                    <div class="section">
                
                      <div class="row">
                        <div class="col s12 center">
                          <h3><i class="mdi-content-send brown-text"></i></h3>
                          <h4>Contact Us</h4>
                          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                        </div>
                      </div>
                
                    </div>
                  </div>
                  <!--
                    <span>Currency:</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                    <select id='yration' class="slct_home" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                    <option value='1'>Ethereum</option >
                    <option value='1.5'>BITCOIN</option >
                    <option value='2'>S&P 500</option >
                    <option value='1.3'>Our megaplan</option >
                    </select>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="item">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                    <span>How much money:</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                    <input id="howmuchmoney" type="text">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="item">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                    <span>Increment rate:</span>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">
                    <input id="increment" type="text">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-12 col-md-12">
                    <button onclick='calculate();return false'>Calculate now</button>
                    </div>
                    </div>
                    </div>
                    </div>
                  -->
                
                  <div class="parallax-container valign-wrapper">
                    <div class="section no-pad-bot">
                      <div class="container">
                        <div class="row center">
                          <h5 class="header col s12 white-text light">I think Bitcoin really feels empowering in a sense.
                              </h5>
                        </div>
                      </div>
                    </div>
                    <div class="parallax"><img src="{{ asset('images/background2.jpg') }}" alt="Unsplashed background img 3"></div>
                  </div>
@include('partials.footer')
        </div>
@endsection
<!--<script>
    function calculate() {
      var howmuchmoney = $("#howmuchmoney").val();
      var increment = $("#increment").val().replace(/m|p|o/i,'').replace(/m|p|o/i,'').replace(/m|p|o/i,'')/12;
      var ration = $("#yration").val();
      
      profit = howmuchmoney*increment*ration-howmuchmoney*-1;
      $("#profit1").html("$"+profit);
      $("#fees").html("-$"+profit/10);
      $("#total").html("$"+(profit-profit/10));
    }
    </script>
  -->