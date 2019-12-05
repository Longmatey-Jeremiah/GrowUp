@extends('layouts.app')
@section('content')
@include('partials.navbar')
<section class="parallax-container" style="background:url({{ asset('images/lawyer-bg.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
    <div class="valign-wrapper container" style="padding:12% 0;">
        <div class="row">
        <div class="col center s12 white-text">
            <h6 class="header">MEET US & WE CAN HELP YOU</h6>
        </div>
        <div class="col s12">
            <h2 class="header center white-text text-lighten-1">EVERY CLIENT MATTERS</h2>
        </div>
        <div class="row center">
            <a href="#" id="download-button" class="btn-large white-text waves-effect waves-ripple orange small lighten-3">MAKE AN APPOINTMENT</a>
        </div>
    </div>
</div>
</section>

<!--credibility section-->
<section class="section valign-wrapper grey lighten-4">
  <div class="containerx ">
   <div class="row">
     <div class="col l3 m3 s12 center">
       <div class="icon-block">
         <h3 class="numbers black-text">1200+</h3>
         <p class="caption orange-text text-lighten-3">Trusted Clients</p>
       </div>
     </div>
     <div class="col l3 m3 s12 center">
       <div class="icon-block">
         <h3 class="numbers black-text">$13,000 000</h3>
         <p class="caption orange-text text-lighten-3">MONEY RECOVERED</p>
       </div>
     </div>
     <div class="col l3 m3 s12 center">
       <div class="icon-block">
         <h3 class="numbers black-text">98%</h3>
         <p class="caption orange-text text-lighten-3">SUCCESFUL CASES</p>
       </div>
     </div>
     <div class="col l3 m3 s12 center">
       <div class="icon-block">
         <h3 class="numbers black-text">5,100</h3>
         <p class="caption orange-text text-lighten-3">PERSONAL INJURY CASES</p>
       </div>
     </div>
    </div>
   </div>
</section>
<br><br><br>

<!--projects section-->
@include('partials.projects')

<section class="section valign-wrapper grey lighten-5">
    <div class="container pad-top">
        <div class="row">
            <div class="col center s12 white-text">
                <h6 class="para text-lighten-3">WHO WE ARE</h6>
            </div>
            <div class="col s12">
                <h5 class="head center orange-text text-lighten-3">OVER 20 YEARS EXPERIENCE</h5>
                <br>
                <br>
            </div>
            <div class="row center">
                <p class="paral grey-text text-darken-2">
                    We practice in personal injury, family, criminal and labor litigation, with an emphasis on complex contractual matters and mass tort litigation.
                    We are a leading group of highly professional lawyers whose goal is to protect you, your family and business.
                    We aim to assure our clients that with our help it is possible to quickly and effectively resolve any issue.
                </p>
            </div>
            <div class="row center">
                <a href="#" id="download-button" class="btn-large white-text waves-effect waves-light orange small lighten-3">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>

<!--services section-->
<section class="section">
    <div class="containerx">
        <div class="row">
        <div class="col m5 hide-on-small-only">
            <div class="card z-depth-0">
              <div class="card-image">
                <img src="{{ asset('images/info-man.png') }}" class="responsive-img" alt="services">
              </div>
            </div>
        </div>
        <div class="col m7 s12">
            <div style="padding-left:2%">
            <div class="col s12" style="padding-bottom:1%">
                <h6 class="small orange-text text-lighten-3">MORE INFO</h6>
                <h5 class="big orange-text text-lighten-3">WE ARE FIRST</h5>
            </div>
            <div class="col 12 containerx">
            <p class="paral blue-grey-text">
                People who already have strong trust relships with you akshay.
                This is expertsshop’s version akshay Lorem Ipsum.
                Proin gravida nibh vel velit auctor aliquet.
            </p>
            </div>
            <div class="col 12">
            <p>
                Simplify compelling innovation and long-term high-impact users tactical.
            </p>
            </div>
            <div class="col 12">
            <p>Quickly streamline focused deliverables whereas progressive through.</p>
            </div>
            <div class="col 12">
            <p>Appropriately morph 24/7 initiatives with team driven partnerships evisc.</p>
            </div>
            <div class="col 12 containerx">
                <p class="paral blue-grey-text">
                    People who already have strong trust relships with you akshay.
                    This is expertsshop’s version akshay Lorem Ipsum.
                    Proin gravida nibh vel velit auctor aliquet.
                </p>
            </div>
            <div class="col 12">
                <img src="{{asset('images/sign.png')}}" alt="sign">
            </div>
        </div>
        </div>
        </div>
    </div>
    <br>
</section>          


<!--clients section-->

<div class="col s12 center" style="padding-bottom:1%">
    <h6 class="small">GESTAS CURSUS</h6>
    <h5 class="big">OUR CLIENTS</h5>
</div>
@include('partials.clients')

<section class="section valign-wrapper grey lighten-5">
    <div class="container pad-top">
        <div class="row">
            <div class="col center s12 white-text">
                <h6 class="para text-lighten-3">FOR FREE</h6>
            </div>
            <div class="col s12">
                <h5 class="head center orange-text text-lighten-3">ARRANGE A FREE CALL BACK</h5>
                <br>
                <br>
            </div>
            <div class="row center">
                <p class="paral grey-text text-darken-2">
                    Innovate granular internal or “organic” sources whereas high ards
                    in web-readiness. Energistically scale future proof core petencies
                    impactful experiences with optimal networks. Innovate granular 
                    internal or “organic” sources whereas high ards in web-readiness.
                    Energistically scale future proof core petencies impactful experiences
                    with optimal networks.
                </p>
            </div>
            <div class="row center">
                <a href="#" id="download-button" class="btn-large white-text waves-effect waves-light orange small lighten-2">CALL BACK</a>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
@endsection