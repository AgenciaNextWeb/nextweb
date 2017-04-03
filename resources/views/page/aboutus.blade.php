@extends('layout')
@section('page-head')
    <title xmlns="http://www.w3.org/1999/html">Nextweb - Sobre Nós</title>
    <link rel="stylesheet" href="css/page/aboutus.css">
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
                        <a href="/">Home</a> / Sobre Nós
                    </nav>
                </div>
            </div>
        </section>
        <section id="nw-image-area" class="about-us-area">
            <div class="container">
                <div class="row">
                    <!-- START ABOUT IMAGE DESIGN AREA -->
                    <div class="col-md-6">
                        <div class="about-image">
                            <img src="image/aboutus/aboutus.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <!-- / END ABOUT IMAGE DESIGN AREA -->
                    <!-- START ABOUT TEXT DESIGN AREA -->
                    <div class="col-md-6">
                        <div class="about-text">
                            <h2>Pensamos no melhor para você e sua empresa.</h2>
                            <p>
                                A ideia da criação da Nextweb surgiu através da necessidade de fornecer qualidade combinada a um preço acessivel para
                                as pessoas e empresas que estão buscando novas formas de visibilidade.
                            </p>
                            <p>
                                Nossa equipe está sempre trabalhando para oferecer o que há de melhor em termos de tecnologia. Buscamos sempre aprimorar
                                nossos serviços para garantir sempre que nossos clientes assim como a nossa propria empresa estejam trabalhando com o que
                                há de melhor.
                            </p>
                        </div>
                    </div>
                    <!-- / END ABOUT TEXT DESIGN AREA -->
                </div>
            </div>
        </section>
        <section id="nw-about" class="call-to-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="call-to-area-text">
                            <h2>Nós podemos ajudar a sua empresa a crescer.</h2>
                            <p>Nossos profissionais estão preparados para ajudar a você e sua empresa em tudo que precisarem.</p>
                            <a href="/contato">Fale conosco</a>
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