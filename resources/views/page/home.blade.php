@extends('layout')
@section('page-head')
    <title>Home</title>
    <link rel="stylesheet" href="css/includes/header.css">
    <link rel="stylesheet" href="css/page/home.css">
    <link rel="stylesheet" href="css/includes/footer.css">
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
    <div class="hero-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero-content fix">
                        <h1>voice event</h1>
                        <h3>Voice Event HTML Template</h3>
                        <p><span>Multipage</span>+<span>Working ajax forms</span>+<span>W3C validated</span>+<span>Fully Responsive</span></p>
                        <a href="#feature" class="button large color-hover">feature</a>
                        <a href="#demos" class="button large color-hover">view all demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @include('includes.footer')
@stop