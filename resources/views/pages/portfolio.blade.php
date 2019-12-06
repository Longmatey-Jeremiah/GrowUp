@extends('layouts.guest')

@section('bg-color','white')
@section('footer-color','grey darken-4')
@section('footer-text','white-text')
@section('login-bar-color','indigo darken-4')
@section('login-bar-text-color','blue-text')
@section('nav-link-color','blue-text')
@section('route-name','View Our Projects')
@section('route-color','white-text')
@section('content')

<section>
<div class="section" style="padding:10% 0">
    <div class="row">
  <div class="row containerx" style="padding:10px 0">
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/1-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Customer relationship</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/2-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Taxation in Ghana</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/3-1.jpg') }}">
        </div>
        </div>
        <div class="card-panel"><p class="med">Corporate tax policy</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/4-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Income tax planning</p></div>
    </div>
    </div>
</div>
 <div class="row containerx">
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/1-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Customer relationship</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/2-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Taxation in Ghana</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/3-1.jpg') }}">
        </div>
        </div>
        <div class="card-panel"><p class="med">Corporate tax policy</p></div>
    </div>
    <div class="col s12 m6 l3">
        <div class="card">
        <div class="card-image">
            <img src="{{ asset('images/4-1.jpg') }}" >
        </div>
        </div>
        <div class="card-panel"><p class="med">Income tax planning</p></div>
    </div>
    </div>
</div>
</div>
</section>
@endsection