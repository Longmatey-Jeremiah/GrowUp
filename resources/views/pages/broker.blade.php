@extends('layouts.app')

@section('content')
    
<!--navbar section-->
@include('partials.navbar')

<section style="background:url({{ asset('images/background/broker-bg.jpg')}}) 50% 0 repeat fixed;" data-speed="10" data-type="background">
    <div class="valign-wrapper containerx">
        
        <div class="row pad-top">
                <br><br><br>
            <div class="col s12">
                <h6 class="med white-text text-lighten-1">SHOW ME WHAT YOU CAN DO</h6>
                <h2 class="header  white-text">WE ARE BROKER</h2>
            </div>

        <br><br><br><br>

        <div class="col s12 m9 l5 pad-top">
                <div class="row">
                    <div class="col s12">
                        <p class="med white-text">
                            One of the challenges in networking is everybody thinks
                             it's making cold calls to strangers. Actually, it's the
                              people who already have strong.
                            </p> 
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="col s6">
                            <a href="#" id="download-button" class="btn-large waves-effect waves-light lighten-3 small white-text">LEARN MORE</a>
                        </div>
                        <div class="col s6">
                            <a href="#" id="download-button" class="btn-large waves-effect waves-light small white-text">GET STARTED</a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </section>
       
    
    <!--services section-->
    <section class="section lighten-5">
        <div class="containerx">
            <div class="row pad-top">
                <div class="col l6 hide-on-med-and-down right">
                    <div class="video-container">
                        <iframe width="853" height="500" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col l6 s12 containerx">
            <div>
            <div class="col s12" style="padding-bottom:1.2%">
                    <h6 class="small">WHAT WE CAN DO</h6>
                <h5 class="big">WHY CHOOSE US</h5>
            </div>
            <div class="col 12 containerx pad-top">
                <p class="small indigo-text-darken-4">IN 5 EASY STEPS: BUYER AND SELLER AGREE TO TERMS</p>
            <p class="paral blue-grey-text text-lighten-2">
                People who already have strong trust relships with you
                    akshay. This is Photoshop's version akshay Lorem Ipsum.
                    Proin gravida nibh vel velit auctor aliquet.
                </p>
            </div>
            <div class="col 12 center">
                <a href="#" class="btn-large waves-effect blue-text waves-light small">GET IN TOUCH</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
</div>
<br><br>
</section>          

<!--experts section-->
<section class="grey lighten-5">
    <div class="section containerx">
        <div class="row pad-top">
            <div class="s12">
                <h6 class="small center">If Any Question?</h6>
                <h5 class="center header indigo-text text-darken-4">ASK THE EXPERTS</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m3">
                <div class="card center z-depth-0">
                    <div class="experts">
                        <img class="responsive-img" src="{{ asset('images/snr-1.png') }}">
                    </div>
                </div>
            <p class="center para"><i>(Snr.Advisor)</i></p>
            <h5 class="center head">Jane Doe</h5>
            <p class="center para">
                People who already have strong trust
                relships with you. akshay hello world.
            </p>
            <div class="row center">
                <a href="#"><img  class="ficons" src="{{ asset('icons/whatsapp.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/twitter.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/linkedin.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/pinterest1.png')}}" alt="icon" class="responsive-img"></a                </a>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card center z-depth-0">
                <div class="experts">
                    <img class="responsive-img" src="{{ asset('images/snr-2.png') }}">
                </div>
            </div>
            <p class="center para"><i>(Snr.Advisor)</i></p>
            <h5 class="center head">John Doe</h5>
            <p class="center para">
                People who already have strong trust
                relships with you. akshay hello world.
            </p>
            <div class="row center">
                <a href="#"><img  class="ficons" src="{{ asset('icons/whatsapp.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/twitter.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/linkedin.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/pinterest1.png')}}" alt="icon" class="responsive-img"></a                </a>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card center z-depth-0">
            <div class="experts">
                <img class="responsive-img" src="{{ asset('images/snr-2.png') }}">
            </div>
        </div>
        <p class="center para"><i>(Snr.Advisor)</i></p>
        <h5 class="center head">John Doe</h5>
        <p class="center para">
            People who already have strong trust
            relships with you. akshay hello world.
        </p>
        <div class="row center">
                <a href="#"><img  class="ficons" src="{{ asset('icons/whatsapp.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/twitter.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/linkedin.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/pinterest1.png')}}" alt="icon" class="responsive-img"></a                </a>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card center z-depth-0">
                <div class="experts">
                    <img class="responsive-img" src="{{ asset('images/snr-3.png') }}">
            </div>
            </div>
            <p class="center para"><i>(Snr.Advisor)</i></p>
            <h5 class="center head">Alice Doe</h5>
            <p class="center para">
                People who already have strong trust
                relships with you. akshay hello world.
            </p>
            <div class="row center">
                <a href="#"><img  class="ficons" src="{{ asset('icons/whatsapp.png')}}" alt="icon" class="responsive-img"></a>               
                <a href="#"><img  class="ficons" src="{{ asset('icons/twitter.png')}}" alt="icon" class="responsive-img"></a>  
                <a href="#"><img  class="ficons" src="{{ asset('icons/linkedin.png')}}" alt="icon" class="responsive-img"></a>
                <a href="#"><img  class="ficons" src="{{ asset('icons/pinterest1.png')}}" alt="icon" class="responsive-img"></a                </a>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- client testimonial section-->
<section >
    <div class="section">
        <div class="row pad-top">
            <div class="s12">
                <h6 class="small center">If Any Question?</h6>
                <h5 class="center header indigo-text text-darken-4">ASK THE EXPERTS</h5>
            </div>
        </div>
        <div class="row containerx pad-top">
        <div class="col s12 l4 center">
            <img src="{{ asset('images/clients/contact-bg.png')}}" alt="reviews" class="circle responsive-img" style="max-height:230px;">
            <p class="para">
                <i>
                “Donec id elit non mi porta gravida at eget metus.
                Donec id elit non mi porta gravida at eget metus.
                </i>
            </p>
            <p class="header indigo-text text-darken-4">Jhon Doe<br>
                <span class="para">(lawyer)</span></p>
            </div>
            <div class="col s12 l4 center">
                <img src="{{ asset('images/clients/contact-bg.png')}}" alt="reviews" class="circle responsive-img" style="max-height:230px;">
                <p class="para">
                    <i>
                        “Donec id elit non mi porta gravida at eget metus.
                        Donec id elit non mi porta gravida at eget metus.
                    </i>
                </p>
                <p class="header indigo-text text-darken-4">Jhon Doe<br>
                    <span class="para">(lawyer)</span></p>
                </div>
                <div class="col s12 l4 center">
                    <img src="{{ asset('images/clients/contact-bg.png')}}" alt="reviews" class="circle responsive-img" style="max-height:230px;">
            <p class="para">
                <i>
                “Donec id elit non mi porta gravida at eget metus.
                Donec id elit non mi porta gravida at eget metus.
                </i>
            </p>
            <p class="header indigo-text text-darken-4">Jhon Doe<br>
                <span class="para">(lawyer)</span></p>
        </div>
    </div>
</div>
</section>

<!--contact details section-->
<section class="section">
    <div class="containerx">
        <div class="row">
            <div class="col m6 hide-on-small-only right">
                <div class="card z-depth-0">
                    
                    <div class="card-image">
                        <img src="{{ asset('images/anyquestions.jpg') }}" class="responsive-img" alt="services">
                    </div>
              </div>
            </div>
            <div class="col m6 s12">
              <div>
                  <div class="col s12" style="padding-bottom:5%">
                        <h6 class="small">CONTACT US</h6>
                        <h5 class="header indigo-text text-darken-4">ANY QUESTIONS?</h5>
                    </div>
                    <div class="col 12 containerx pad-top" style="padding-bottom:10%;">
                            <p class="small blue-grey-text text-lighten-2">
                                Whether you are working toward financial security, providing a steady
                                ream of income, or planing for retirement, we can help . This is
                                Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                auctor aliquet.Aenean sollcitin, lorem quis bibendum auctor, nisi elit consequat.
                            </p>
                        </div> 
                        <br>
              <div class="row">
                  <div class="col s12">
                      <div class="col s2 blue center" style="border-radius:50%;padding:30px 0;">
                            <i class="material-icons white-text">phone</i>
                        </div>
                        <div class="col s10 containerx">
                            <p class="header indigo-text text-darken-4">CALL FOR HELP</p>
                            <p class="small">+81 125.254.1254 OR +14 547 254 5487</p>
                        </div>
                    </div>
              </div>
              <div class="row">
                  <div class="col s12">
                      <div class="col s2 blue center" style="border-radius:50%;padding:30px 0;">
                            <i class="material-icons white-text">email</i>
                        </div>
                        <div class="col s10 containerx">
                            <p class="header indigo-text text-darken-4">SUPPORT MAIL</p>
                            <p class="small">webstrot@email.com</p>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s2 blue center" style="border-radius:50%;padding:30px 0;">
                                    <i class="material-icons white-text">social</i>
                                </div>
                                <div class="col s10 containerx">
                                    <p class="header indigo-text text-darken-4">CHAT WITH US</p>
                            <p class="small">webstrot/broker</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>          
    <!--projects section-->
    @include('partials.projects')
 
<!--calc info section-->
<section class="" style="background:url('{{ asset('images/calculate-bg2.png') }}') repeat fixed" data-type="background" data-speed="10">
    <div class="row pad-top">
        <div class="col s12">
          <div class="row center pad-top">
              <h6 class="small">WE INFORM</h6>
               <h5 class="header col s12 indigo-text text-darken-4">OUR CALCULATOR</h5>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col m6 hide-on-small-only">
            <img src="{{ asset('images/calc-girl.png') }}" class="responsive-img" alt="services">
        </div>    
    <div class="col s12 m6 grey lighten-5 card-panel"  style="margin-bottom:0;min-height:480px;padding-top:5%;">
      <div class="">
          <div class="row">
              <div class="container">
                  <div class="container col s12">
                      <p class="paral blue-grey-text" style="border-bottom:1px solid lightgrey">INSTRUMENT EUR/USD</p>
            </div>
        </div>

          <div class="row">
              <div class="container">
                  <div class="container col s12">
                      <p class="paral blue-grey-text" style="border-bottom:1px solid lightgrey">AMOUNT 10000</p>
                    </div>
                </div>
            </div>

        <div class="container">
          <div class="row center" style="border-bottom:1px solid lightgrey">
                <div class="row">
                    <div class="container col s6" style="border-right:1px solid lightgrey">
                        <p class="head right col s12 pink-text text-darken-1">SELL</p>
                        <p class="head right col s12 pink-text text-darken-1">1.12124</p>
                    </div>
                    <div class="container col  s6">
                        <p class="head left col s12 blue-text">BUY</p>
                        <p class="head left col s12 blue-text">1.12132</p>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col s8">
                <p class="header pink-text">SHORT <span class="black-text"> -10000EURUSD</span></p>
            </div>
            <div class="col s4">
                <p class="header pink-text">-$0.8 <span class="black-text">X</span></p>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
    </div>
</div>
        </div>
      </div>
    </div>
    <br><br>
</section>

<!--blog post section-->
@include('partials.blog-post')

<!--pricing plans info section-->
<section>
    <div class="section">
      <div class="row containerx" style="padding-bottom:10%">
        <div class="col s12 center" style="padding-bottom:10px;">
            <div class="row">
              <h6 class="small">PLANS INFO</h6>
              <h5 class="big">PRICING PLANS</h5>
            </div>
        </div>
        <div class="row">
             <div class="col s12 m6 l3">
                <div class="card-panel">
                    <p class="center">PERSONAL</p>
                    <p class="center head black white-text" style="padding:5%">$100 / Per Month</p>
                    <p class="center para">Business Support</p>
                    <p class="center para">Tax Managment</p>
                    <p class="center para">Property Listing</p>
                    <p class="center para">Client Services</p>
                    <p class="center para">24x7 Support</p>
                    <p class="center"><a href="#" class="btn-large grey-text text-lighten-2 small waves-effect waves-light">BUT NOW!</a></p>
                </div>
            </div>
             <div class="col s12 m6 l3">
                <div class="card-panel">
                    <p class="center">BUSINESS</p>
                    <p class="center head blue white-text" style="padding:5%">$100 / Per Month</p>
                    <p class="center para">Business Support</p>
                    <p class="center para">Tax Managment</p>
                    <p class="center para">Property Listing</p>
                    <p class="center para">Client Services</p>
                    <p class="center para">24x7 Support</p>
                    <p class="center"><a href="#" class="btn-large white-text blue small waves-effect waves-light">BUT NOW!</a></p>
                </div>
            </div>
             <div class="col s12 m6 l3">
                <div class="card-panel">
                    <p class="center">GOLD</p>
                    <p class="center head black white-text" style="padding:5%">$250 / Per Month</p>
                    <p class="center para">Business Support</p>
                    <p class="center para">Tax Managment</p>
                    <p class="center para">Property Listing</p>
                    <p class="center para">Client Services</p>
                    <p class="center para">24x7 Support</p>
                    <p class="center"><a href="#" class="btn-large grey-text text-lighten-2 small waves-effect waves-light">BUT NOW!</a></p>
                </div>
            </div>
             <div class="col s12 m6 l3">
                <div class="card-panel">
                    <p class="center">ULTIMATE</p>
                    <p class="center head black white-text" style="padding:5%">$300 / Per Month</p>
                    <p class="center para">Business Support</p>
                    <p class="center para">Tax Managment</p>
                    <p class="center para">Property Listing</p>
                    <p class="center para">Client Services</p>
                    <p class="center para">24x7 Support</p>
                    <p class="center"><a href="#" class="btn-large grey-text text-lighten-2 small waves-effect waves-light">BUT NOW!</a></p>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
<!--contact us form section -->
@include('partials.contact')

<!--clients section-->
@include('partials.clients')

<!--footer section-->
@include('partials.footer')

@endsection