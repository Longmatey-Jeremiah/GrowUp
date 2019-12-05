@extends('layouts.app')
@section('content')
<!--navbar section-->
    @include('partials.navbar')
        <section class="medllax-container" style="background:url({{ asset('images/background4.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
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
                                <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-3">Get Started</a>
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