@extends('layouts.app')
@section('content')
@include('partials.navbar')
<section class="parallax-container" style="background:url({{ asset('images/background4.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
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
@include('partials.credibility')

<!--experts section-->
@include('partials.experts')

<!--profit calculator section-->
@include('partials.profit_calc')

<!--cost section-->

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