@extends('layouts.app')
@section('content')
<!--navbar section-->
@include('partials.navbar')
<section class="vh" style="background:url({{ asset('images/bitcoin/chart-bg.jpg')}}) fixed;" data-speed="10" data-type="background">
    <div class="valign-wrapper containerx hide-on-med-and-down">
        <div class="row">
            <br><br><br>
            <div class="col l6 containerx">
                <p class="small white-text right">SUPER PROFIT</p>
                <h5 class="header right">EVERY DAY THE PRICE OF TOKENS GROWS</h5>
            </div>
            <div class="col center l6 containerx">
                <div class="row">
                    <p class="small text-lighten-1 grey-text left-align">
                        You can buy tokens using Bitcoin right now through
                        our website. If you no have wallet use internal
                    </p>
                    <br>
                    <div class="row left container">
                        <a href="#" id="download-button" class="btn-large whiteb small">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--icon section -->
@include('partials.icon')

<!--services section-->
@include('partials.services')

<!--credibility section-->
@include('partials.credibility')

<!--projects section-->
@include('partials.projects')

<!--offers section-->
@include('partials.offers')

<!--credibility section-->

<!--experts section-->
@include('partials.experts')

<!--profit calculator section-->
@include('partials.profit_calc')

<!--cost section-->
<section>
    <div class="section containerx pad-top">
        <div class="row center pad-top">
            <h6 class="small">Yearly Growth</h6>
            <h6 class="big">CALCULATE YOUR COST</h6>
        </div>
        <div class="row pad">
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/1-2.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Mutual Funds</p>
                        <p class="med">Mutual Funds</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/3.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Brokerage Services</p>
                        <p class="med">Brokerage Services</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/3-2.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Investment Services</p>
                        <p class="med">Investment Services</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/1.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Depositary Services</p>
                        <p class="med">Depositary Services</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/4.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Capital Management</p>
                        <p class="med">Capital Management</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12 center">
                <div class="row valign-wrapper">
                    <div class="col s2" style="border-radius:2.2rem;border:1px solid skyblue;padding:25px 8px;">
                        <img src="{{ asset('images/6.png') }}" alt="alt" class="responsive-img">
                    </div>
                    <div class="col s10 containerx">
                        <p class="head">Investment in precious</p>
                        <p class="med">Investment in precious</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog post section-->
@include('partials.blog-post')     

<!--contact us section-->
@include('partials.contact')

<!--reviews section-->
@include('partials.reviews')

<!--skills section-->
@include('partials.skills')

<!--map section
@include('partials.reviews')
-->
<!--clients section-->
@include('partials.clients')

@include('partials.footer')
@endsection