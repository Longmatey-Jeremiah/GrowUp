@extends('layouts.guest')

@section('bg-color','white')
@section('footer-color','grey darken-4')
@section('footer-text','white-text')
@section('login-bar-color','indigo darken-4')
@section('login-bar-text-color','blue-text')
@section('nav-link-color','blue-text')
@section('route-name','Blog')
@section('route-color','white-text')
@section('content')

<section class="pad-top section lighten-5">
    <br><br>
    <div class="containerx">
    <div class="row">
        <div class="col s12 l9">
        <div class="row pad-top">
            <div class="col s12">
            <img src="{{ asset('images/post.jpg')}}" alt="post" class="responsive-img">
            </div>
            <div class="col s12">
            <div class="row pad-top">
                <div class="containerx">
                <div class="col hide-on-small-only m1 blue white-text" style="border-radius:2.6rem;padding:12px 2px;">
                    <h6 class="center small white-text">13</h6>
                    <h6 class="center small white-text">Jun</h6>
                </div>
                
                <div class="col s12 m11">
                    <div>
                    <h5 class="head">PHASELLUS ACCUMSAN</h5>
                    <h6 class="para">by <i class="blue-text">admin</i> | in <i class="blue-text">blog,news</i> | 04 <i class="blue-text">comments</i></h6>
                    <p class="blue-grey-text">people who already have strong trust relships
                        with you akshay. this is photoshop’s version 
                        akshay lorem ipsum. proin gravida nibh vel velit 
                        auctor aliquet. who already have strong trust.
                        read more...
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="divider"></div>
            </div>
        </div>
        <div class="row pad-top">
            <div class="col s12">
             <img src="{{ asset('images/post.jpg')}}" alt="post" class="responsive-img">
            </div>
            <div class="col s12">
            <div class="row pad-top">
                <div class="containerx">
                <div class="col hide-on-small-only m1 blue white-text" style="border-radius:2.6rem;padding:12px 2px;">
                    <h6 class="center small white-text">13</h6>
                    <h6 class="center small white-text">Jun</h6>
                </div>
                
                <div class="col s12 m11">
                    <div>
                    <h5 class="head">PHASELLUS ACCUMSAN</h5>
                    <h6 class="para">by <i class="blue-text">admin</i> | in <i class="blue-text">blog,news</i> | 04 <i class="blue-text">comments</i></h6>
                    <p class="blue-grey-text">people who already have strong trust relships
                        with you akshay. this is photoshop’s version 
                        akshay lorem ipsum. proin gravida nibh vel velit 
                        auctor aliquet. who already have strong trust.
                        read more...
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="divider"></div>
            </div>
        </div>
        
        </div>              
        <div class="col s12 l3 containerx">
            <div class="row pad-top">
            <div class="col s12">
                <h5 class="head">Categories </h5>
                <ul>
                    <br>
                    <li><a href="#!"><p class="para">Ipsum. Proin gravida nibh vel</p></a></li>

                    <li><a href="#!"><p class="para">Auctor aliquet. Aenean</p></a></li>

                    <li><a href="#!"><p class="para">Din, lorem quis bibendum</p></a></li>

                    <li><a href="#!"><p class="para">Nisi elit consequat ipsum</p></a></li>

                    <li><a href="#!"><p class="para">Nisi elit consequat ipsum</p></a></li>

                </ul>
                <div class="divider"></div>
            </div>
        <div class="row">
            <br><br>
            <div class="col s12 pad-top">
            <br><br>
                <h6 class="head">Recent Post</h6>
            <br>
            </div>
            
        </div>
        <div class="row">
            <div class="col s12 valign-wrapper">
            <div class="col s4">
                <img src="{{ asset('images/blogsm.jpg')}}" alt="post">
            </div>
            <div class="col s8">
                <i><p class="blue-text small">Jun 13,2016</p></i>
                <p class="small">Phasellus accumsan cursus velit 6</p>
            </div>
        </div>
    </div>
    <div class="divider"></div>
        <div class="row">
                <br><br>
            <div class="col s12 valign-wrapper">
            <div class="col s4">
                <img src="{{ asset('images/blogsm.jpg')}}" alt="post">
            </div>
            <div class="col s8">
                <i><p class="blue-text small">Jun 13,2016</p></i>
                <p class="small">Phasellus accumsan cursus velit 6</p>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    </div>
    </div>
</div>
</div>
</section>
@endsection