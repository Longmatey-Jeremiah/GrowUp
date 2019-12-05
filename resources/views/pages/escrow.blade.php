@extends('layouts.app')

@section('content')
    
<!--navbar section-->
@include('partials.navbar')

<section class="parallax-container" style="background:url({{ asset('images/background/escrow-bg.jpg')}}) 50% 0 repeat fixed" data-speed="10" data-type="background">
    <div class="valign-wrapper containerx">
        <br><br><br>
        
        <div class="row pad-top">
            <div class="col s12">
                <h6 class="header center white-text text-lighten-1">HOW MANY</h6>
                <h2 class="header center white-text">OUR CLIENT <span class="green-text"> DEALS</span> </h2>
            </div>

        <br><br><br><br>
        
        <div class="col s12 m4 pad-top">
            <div class="row">
                <div class="row">
                    <div class="col s12">
                        <p class="med white-text">One of the challenges in networking is everyody
                            it's making cold calls to strangers. Actually This is Photoshop's
                            version of Lorem Ipsum. One of the challenges in networking is
                            everyody it's making cold calls to strangers. Actually This is
                            Photoshop's version of Lorem Ipsum. One of the challenges in 
                            networking is everyody it's making cold calls to strangers.
                            Actually This is Photoshop's version of Lorem Ipsum.</p> 
                        </div>
                    </div>
                    <div class="col s12">
                        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col m6 offset-m1 hide-on-small-only containerx pad-top" style="border:1px solid white;padding:4%;">
                <div class="col s12">
                    <div class="row">
                        <div class="col s2 center">
                           <p class="head white-text">I'm</p>
                        </div>    
                        <div class="col s10">
                            <div class="col s5">
                                <div class="input-field" >
                                    <select  class="center browser-default white blue-grey-text">
                                        <option value="1" class="para">Brokering</option>
                                        <option value="2" class="para">Brokering</option>
                                        <option value="3" class="para">Brokering</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s7">
                                <div class="input-field" >
                                    <input type="text" class="grey-text text-darken-2 center white" placeholder="Domain Names,vehicles" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s2 center">
                           <p class="head white-text">for $</p>
                        </div>    
                        <div class="col s10">
                            <div class="col s7">
                                <div class="input-field">
                                    <input type="text" class="grey-text text-darken-2 white center" placeholder="14,000" />
                                </div>
                            </div>
                        <div class="col s5">
                            <div class="input-field green">
                                <select  class="center browser-default white-text green">
                                    <option value="1" class="para">USD</option>
                                    <option value="2" class="para">USD</option>
                                    <option value="3" class="para">USD</option>
                                </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col s12 valign-wrapper">
                        <p class="col s3 big green-text">$199,50</p>
                        <p class="col s9 med white-text">Standerd Fee</p>
                    </div>
                    <div class="col s12">
                        <a href="#" class="btn-large small white-text blue waves-effect waves-ripple">GET STARTED NOW</a>
                        <a href="#"><p class="white-text hovereable">Save my qoute for later</p></a>
                    </div>
                </div>       
            </div>
        </div>
    </section>
       
<!--clients section-->
<div class="row pad-top">
    <div class="col s12 pad-top">
        <div class="row center pad-top">
            <h6 class="small center indigo-text text-darken-3">Growth Rate</h6>
            <h5 class="header col s12 indigo-text text-darken-3">PROFIT CALCULATOR</h5>
        </div>
    </div>
</div>
@include('partials.clients')

<!--services section-->
<section class="grey section lighten-5">
    <div class="containerx">
      <div class="row pad-top">
        <div class="col l7 hide-on-med-and-down">
            <div class="video-container">
              <iframe width="853" height="500" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col l5 s12">
            <div style="padding-left:2%">
            <div class="col s12" style="padding-bottom:1%">
                <h6 class="small">More services</h6>
                <h5 class="big">HOW ESCROW WORKS</h5>
            </div>
            <div class="col 12 containerx">
                <p class="small indigo-text-darken-4">IN 5 EASY STEPS: BUYER AND SELLER AGREE TO TERMS</p>
            <p class="small blue-grey-text text-lighten-2">
                People who already have strong trust relships with you akshay.
                This is Photoshop's version akshay Lorem Ipsum. Proin gravida
                nibh vel velit auctor aliquet. People who already have strong
                trust relships with you akshay.This is Photoshop's version
                akshay Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                People who already have strong trust relships with you akshay.
                This is Photoshop's.
            </p>
            </div>
        </div>
    </div>
</div>
<div class="col 12 center">
    <a href="#" class="btn-large waves-effect green lighten-1 white-text waves-ripple head">LEARN MORE</a>
</div>
<br>
<br>
    </div>
    <br><br>
</section>          
<!--projects section-->
@include('partials.projects')
<section class="grey section lighten-5">
    <div class="row container pad-top">
        <div class="row">

            <div class="col s12 center">
                <h6 class="para">FULLY LICENSED AND ACCREDITED AS AN</h6>
                <h5 class="header indigo-text text-darken-4"> ESCROW COMPANY</h5>
            </div>
        </div>

        <div class="row">

            <div class="col s12 center pad-top">
                <p class="paral grey-text">
                    Government agencies perform regular audits of independently licensed escrow companies.
                    The audit examinations serve to protect public funds,determine safety and soundness
                    of operations and determine compliance with escrow statutes and regulations.
                </p>
                <a href="#" class="btn-large green lighten-1 small white-text">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>
<section style="padding:5% 0%">
    <div class="section pad-top containerx valign-wrapper">
        <div class="row pad">
            <div class="col s12 m6 l3 pad">
            <div class="icon-block center">
                <img alt="342" src="{{ asset('images/ico-1.png')}}">
                <h5 class="head pad-top">SAFE & SECURE PAYMENTS</h5>
                <p class="para">
                    Escrow by its nature is one of the world's oldest and 
                    safest forms of transaction methods. Through a neutral party,
                    holding onto the funds while the physical assets are exchanged,
                    ensures both buyers and sellers are equally protected.

                </p>
            </div>
        </div>
        <div class="divider hide show-on-small-only"></div>
        <div class="col s12 m6 l3 pad">
                <div class="icon-block center">
                    <img alt="342" src="{{ asset('images/ico-2.png')}}">
                    <h5 class="head pad-top">MULTIPLE PAY IN & OUT</h5>
                    
                <p class="para">
                    For domestic or global transactions, buyers can select from a range
                    of payment methods, while sellers can choose to be paid out in a number of convenient ways.
                    Major credit cards, bank transfers and PayPal are all accepted.
            </p>
            </div>
            </div>
            <div class="divider hide show-on-small"></div>
        <div class="col s12 m6 l3 pad">
            <div class="icon-block center">
                <img alt="342" src="{{ asset('images/ico-3.png')}}">
                    <h5 class="head pad-top">FRICTIONLESS ONBOARDING</h5>
                
                <p class="para">
                        At no extra cost, you can onboard global sellers seamlessly within your
                        workflow when they sign up, just as they are about to transact,
                        or wherever your workflow permits, without ever redirecting them off site.
                </p>
                </div>
                </div>
                <div class="divider hide show-on-small"></div>
                <div class="col s12 m6 l3 pad"> 
                    <div class="icon-block center">
                        <img alt="342" src="{{ asset('images/ico-4.png')}}">
                        <h5 class="head pad-top">STAY AT ARM'S LENGTH</h5>
                        
                    <p class="para">
                            Payments between buyers and sellers will never touch your accounts,
                            meaning your marketplace can stay at a comfortable distance from the transaction, 
                            while staying in full control of the workflow, fee structure, and pay out schedule.
                    </p>
                </div>
            </div>
          </div>
    </div>
</section>

<section>
    <div class="section center">
        <div class="row containerx pad-top">
            <div class="col s12">
                <p class="small">UNBEATABLE CAPABILITY PACKED INTO A CUSTOM SET PRICING STRUCTURE</p>
                <h5 class="big">ESCROW PRICING</h5>
            </div>
            <div class="col s12 pad-top">
                <h2 class="numbers">0.5%</h2>
                <h6 class="small">PER TRANSACTION</h6>
            </div>


    <div class="row pad-top">
    <div class="col m4 s12" style="border:1px solid lightgrey;margin:4% 0 0 0;">
        <div class="row">
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="head indigo-text">PAY IN</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Wire Transfer</p>
                <p class="right paral">Free</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Domestic Card</p>
                <p class="right paral">2.90% + 30c</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">ACH Transfer</p>
                <p class="right paral">1%</p>
            </div>
            <div class="col s12">
                <p class="para indigo-text">
                    These processing fees are additional to PromisePay’s standard 0.5% fee.
                    Learn more about 
                </p>
                   <a href="#" class="small">Multiple Payment Types.</a>
            </div>
        </div>
    </div>
    <div class="col m4 s12" style="border:1px solid lightgrey;margin:4% 0 0 0;">
        <div class="row">
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="head indigo-text">OPTIONAL ADD ON</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">End user supporter</p>
                <p class="right paral">0.5%</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Fraud Protection</p>
                <p class="right paral">0.75%</p>
            </div>
            <div class="col s12">
                <p class="para indigo-text">
                    These optional services are additional to PromisePay’s
                    standard 0.5% fee, and are optional only.Learn more about
                </p>
                    <a href="#" class="small">Multiple Payment Types.</a>
            </div>
        </div>
    </div>
    <div class="col m4 s12" style="border:1px solid lightgrey;margin:4% 0 0 0;">
        <div class="row">
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="head indigo-text">PAYOUTS</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Domestic Transfer</p>
                <p class="right paral">Free</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">International Transfer</p>
                <p class="right paral">$25<</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Paypal Domestic</p>
                <p class="right paral">%1</p>
            </div>
            <div class="col s12" style="border-bottom:1px solid lightgrey;">
                <p class="left paral">Paypal International</p>
                <p class="right paral">$12</p>
            </div>
            <div class="col s12">
                <p class="para indigo-text">
                    These processing fees are additional to
                    PromisePay’s standard 0.5% fee. Learn more about.
                </p>
                <a href="#" class="small">Multiple Payment Types.</a>
            </div>
        </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!--footer section-->
@include('partials.footer')

@endsection