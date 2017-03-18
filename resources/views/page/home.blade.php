@extends('layout')
@section('page-head')
    <title>Home</title>
    <link rel="stylesheet" href="css/page/home.css">
    <link rel="stylesheet" href="css/includes/header.css">
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Somos criativos</h1>
                        <h3>Comece agora seu próximo projeto</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Conheça um pouco mais</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Somos inteligentes</h1>
                        <h3>Comece agora seu próximo projeto</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Conheça um pouco mais</button>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Somos incríveis</h1>
                        <h3>Comece agora seu próximo projeto</h3>
                    </hgroup>
                    <button class="btn btn-hero btn-lg" role="button">Conheça um pouco mais</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    {{--@include('includes.footer')--}}
@stop