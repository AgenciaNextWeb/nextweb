@extends('layout')
@section('page-head')
    <title xmlns="http://www.w3.org/1999/html">Nextweb - Sobre Nós</title>
    <link rel="stylesheet" href="css/page/service.css">
@stop

@section('header')
    @include('includes.header', array('page'=>'sobrenos'))
@stop

@section('content')
    <main id="nw-aboutus">
        <section id="nw-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav>
                        <a href="/">Home</a> / Serviços
                    </nav>
                </div>
            </div>
        </section>
    </main>
@stop

@section('footer')
    @include('includes.footer')
@stop