@extends('layout')
@section('page-head')
    <title xmlns="http://www.w3.org/1999/html">Nextweb - Sobre Nós</title>
    <link rel="stylesheet" href="css/page/aboutus.css">
@stop

@section('header')
    @include('includes.header', array('page'=>'aboutus'))
@stop

@section('content')
    <main id="nw-aboutus">
        <section id="nw-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav>
                        <a href="/">Home</a> / Sobre Nós
                    </nav>
                </div>
            </div>
        </section>
        <section id="nw-about" class="call-to-area bottom-margin-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="call-to-area-text">
                            <h2>Nós podemos ajudar a sua empresa a crescer.</h2>
                            <p>Nossos profissionais estão preparados para ajudar a você e sua empresa em tudo que precisarem.</p>
                            <a href="/contact">Fale conosco</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

@section('footer')
    @include('includes.footer')
@stop