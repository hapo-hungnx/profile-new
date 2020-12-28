@extends('layout')
@section('content')
<div class="background-left"></div>
<div class="maincontent">
    <div class="home-img d-inline-block">
        <img src="{{ asset('images/home.jpg') }}" alt="" class="w-100 home-image">
    </div>
    <div class="desciption d-inline-block">
        <h4>{{ __('home.hello') }}</h4>
        <h1 class="d-inline-block">{{ __('home.pre_name') }}</h1>
        <h1 class="d-inline-block full_name">{{ __('home.full_name') }}</h1>
        <p class="text-content">{{ __('home.description') }}</p>
        <button class="btn btn-primary about_me">{{ __('home.more_about_me') }}<i class="fas fa-user"></i></button>
    </div>
    <div class="right-menu mr-3">
        <a href="#" class="menu-item"><i class="fas fa-home"></i></a>
        <a href="#" class="menu-item"><i class="fas fa-user"></i></a>
        <a href="#" class="menu-item"><i class="fas fa-briefcase"></i></a>
        <a href="#" class="menu-item"><i class="fas fa-envelope-open"></i></a>
        <a href="#" class="menu-item"><i class="fas fa-comments"></i></a>
    </div>
</div>
@endsection
