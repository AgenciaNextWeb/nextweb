@extends('layout')
@section('page-head')
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins:300,400,500,600,700|Raleway:300,400,400i,500,600,700,800&quot; rel=&quot;stylesheet">
    <link rel="stylesheet" >
    <link rel="stylesheet" href="css/includes/header.css">
    <link rel="stylesheet" href="css/page/home.css">
    <link rel="stylesheet" href="css/includes/footer.css">

    <script src="javascript/modernizr-2.8.3.min.js"></script>
@stop

@section('header')
    @include('includes.header')
@stop

@section('content')
    <main id="nw-home">
    <section id="nw-hero">
        <div class="hero-wrapper text-center">
            <div class="hero-overlay"></div>
            <div class="hero-content fix">
                <h1>TRANSFORMANDO O SEU SONHO</h1>
                <h3>na sua nova realidade</h3>
                <p><span>Sites personalizados</span> + <span>Sites padronizados</span> + <span>Melhorias de segurança</span> + <span>Mídias sociais</span></p>
                <a href="services" class="button large color-hover">saiba mais</a>
                <a href="contact" class="button large color-hover">contato</a>
            </div>
        </div>
    </section>

    <section id="nw-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Serviços</h2>
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