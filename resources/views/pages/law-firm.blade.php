@extends('layouts.app')
@section('content')
@include('partials.navbar')
<section class="vh" style="background:url({{ asset('images/bitcoin/escrow-bg.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
    <div class="valign-wrapper container">
        <div class="row">
                <br><br><br>
                <div class="col s12">
                    <h1 class="header center white-text text-lighten-1">Grow<span class="yellow-text">Up</span></h1>
                </div>
                <div class="col center s12 white-text">
                <h4 class="header">Like the Internet, Bitcoin will change the way people interact
                    and do business around the world. <br> <span class="teal-text text-lighten-3">Erik Voorhees</span></h4> 
                    <h4 class="header">MAKE YOUR MONEY GROW</h4>
                    <br><br><br>
                </div>
                    <div class="row center">
                        <a href="#" id="download-button" class="btn-large info white-text waves-effect waves-light small">Get Started</a>
                    </div>
                </div>
            </div>
</section>

<section class="section">
    <div class="containerx">
        <div class="row">
            <br><br>
            <div class="col m6 hide-on-small-only right">
                <img src="{{ asset('images/law.png') }}" class="responsive-img" alt="services">
            </div>
        <div class="col m6 s12">
            <div style="padding-left:2%">
            <div class="col s12" style="padding-bottom:1%">
                <h6 class="small">More services</h6>
                <h5 class="big">WHY CHOOSE US</h5>
            </div>
            <div class="col 12 containerx">
            <p class="para">
                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                    Morbi alssan ipsuy veli. Nam nec tellus a odio tincidunt auctor
                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                    This is Php’s version of Lorem Ipsum. Proin gravida nibh vel.
            </p>
            </div>
            <div class="col 12">
            <p class="paral">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            </div>
            <div class="col 12">
            <p class="paral">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            </div>
            <div class="col 12">
            <a href="#" class="btn-large info small">GET IN TOUCH</a>
            </div>
        </div>
        </div>
        </div>
    </div>
</section>

<section class="grey lighten-5">
<div class="section containerx pad-top pad">
<div class="row pad">
    <div class="col s12 m6 l3 pad">
        <div class="icon-block center">
            <img alt="342" src="{{ asset('images/icon/law-1.png')}}">
            <h5 class="head pad">100% of Our Specialists</h5>
        <p class="para pad-top">
            This is Photoshop's version of Ipsum. 
            Proin gravida nibh vel velit auctor aliquet aenean.
        </p>
    </div>
</div>
    <div class="col s12 m6 l3 pad">
        <div class="icon-block center">
            <img alt="342" src="{{ asset('images/icon/law-2.png')}}">
            <h5 class="head pad">Succesful Projects</h5>
        <p class="para pad-top">
            This is Photoshop's version of Ipsum. 
            Proin gravida nibh vel velit auctor aliquet aenean.
        </p>
    </div>
</div>
    <div class="col s12 m6 l3 pad">
        <div class="icon-block center">
            <img alt="342" src="{{ asset('images/icon/law-3.png')}}">
            <h5 class="head pad">Great results</h5>
        <p class="para pad-top">
            This is Photoshop's version of Ipsum.
            Proin gravida nibh vel velit auctor aliquet aenean.
        </p>
    </div>
</div>
    <div class="col s12 m6 l3 pad">
        <div class="icon-block center">
            <img alt="342" src="{{ asset('images/icon/law-4.png')}}">
            <h5 class="head pad">Money in hand</h5>
        <p class="para pad-top">
            This is Photoshop's version of Ipsum.
            Proin gravida nibh vel velit auctor aliquet aenean.
        </p>
            </div>
        </div>
    </div>
</div>
</section>
<br><br>
<!--projects section-->
@include('partials.projects')

<!--experts section-->
<section>
    <div class="section containerx">
        <div class="row pad-top">
        <div class="s12">
            <h6 class="small center">We are happy for our Team</h6>
            <h5 class="center header indigo-text text-darken-4">OUR <span class="blue-text">TALENTED</span> ADVOCATES</h5>
        </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
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
        <div class="col s12 m4">
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
        <div class="col s12 m4">
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
<br><br><br>
     

<!--blog post section-->
@include('partials.blog-post')

<!--contact us section-->
<section>
    <div class="section containerx pad-top">
        <div class="row pad">
        <div class="col s12 m3 pad">
            <div class="icon-block center">
                <img alt="342" src="{{ asset('images/icon/address.png')}}">
                <h5 class="head pad-top">Address</h5>
                <h6 class="para">PO Box 16122 Collins Street West</h6>
                <h6 class="para">Victoria 8007 Australia</h6>
            </div>
            </div>
            <div class="divider hide show-on-small"></div>
            <div class="col s12 m3 pad">
                <div class="icon-block center">
                    <img alt="342" src="{{ asset('images/icon/phone.png')}}">
                    <h5 class="head pad-top">Phone</h5>
                    <h6 class="para">+1758246244</h6>
                    <h6 class="para">+8145789569</h6>
                </div>
            </div>
            <div class="divider hide show-on-small"></div>
            <div class="col s12 m3 pad">
                <div class="icon-block center">
                    <img alt="342" src="{{ asset('images/icon/email.png')}}">
                    <h5 class="head pad-top">Email</h5>
                    <h6 class="para">example@mail.com</h6>
                    <h6 class="para">email@company.com</h6>
                </div>
            </div>
            <div class="divider hide show-on-small"></div>
            <div class="col s12 m3 pad">
                <div class="icon-block center">
                    <img alt="342" src="{{ asset('images/icon/skype.png')}}">
                    <h5 class="head pad-top">Skype</h5>
                    <h6 class="para">nameowner</h6>
                    <h6 class="para">support.aks</h6>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</section>
<br><br>

<!--skills section-->
@include('partials.skills')

@include('partials.footer')
@endsection