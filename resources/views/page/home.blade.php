@extends('layout')
@section('page-head')
    <title xmlns="http://www.w3.org/1999/html">Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins:300,400,500,600,700|Raleway:300,400,400i,500,600,700,800&quot; rel=&quot;stylesheet">
    <link rel="stylesheet" href="css/page/home.css">

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
                    <p><span>Sites personalizados</span> + <span>Sites padronizados</span> + <span>Manutenção de Sites</span> + <span>Mídias sociais</span></p>
                    <a href="services" class="button large color-hover">saiba mais</a>
                    <a href="contact" class="button large color-hover">contato</a>
                </div>
            </div>
        </section>

        <section id="nw-services" class="top-margin-20 bottom-margin-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Serviços</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <i class="fa fa-globe"></i>
                                <div class="plan-title">
                                    <h4>sites<br>personalizados</h4>
                                </div>
                            </div>
                            <ul class="list-unstyled plan-features">
                                <li><i class="fa fa-check"></i> Responsivo</li>
                                <li><i class="fa fa-check"></i> Design personalizado</li>
                                <li><i class="fa fa-check"></i> </li>
                                <li><i class="fa fa-check"></i> </li>
                            </ul>
                            <a class="plan-more" href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <i class="fa fa-globe"></i>
                                <div class="plan-title">
                                    <h4>sites<br>padronizados</h4>
                                </div>
                            </div>
                            <ul class="list-unstyled plan-features">
                                <li><i class="fa fa-check"></i> Responsivo</li>
                                <li><i class="fa fa-check"></i> Design padrão</li>
                                <li><i class="fa fa-check"></i> Baixo custo</li>
                                <li><i class="fa fa-check"></i> Atualizações</li>
                            </ul>
                            <a class="plan-more" href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <i class="fa fa-globe"></i>
                                <div class="plan-title">
                                    <h4>Manutenção<br>de sites</h4>
                                </div>
                            </div>
                            <ul class="list-unstyled plan-features">
                                <li><i class="fa fa-check"></i> Atualizações</li>
                                <li><i class="fa fa-check"></i> Modificações</li>
                                <li><i class="fa fa-check"></i> Segurança</li>
                                <li><i class="fa fa-check"></i> SEO</li>
                            </ul>
                            <a class="plan-more" href="">Ver mais</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-box">
                            <div class="pricing-header">
                                <i class="fa fa-globe"></i>
                                <div class="plan-title">
                                    <h4>mídias<br>sociais</h4>
                                </div>
                            </div>
                            <ul class="list-unstyled plan-features">
                                <li><i class="fa fa-check"></i> Publicações</li>
                                <li><i class="fa fa-check"></i> Atendimento</li>
                                <li><i class="fa fa-check"></i> Marketing</li>
                                <li><i class="fa fa-check"></i> </li>
                            </ul>
                            <a class="plan-more" href="">Ver mais</a>
                        </div>
                    </div>
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
                            <a href="#">Fale conosco</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="nw-team" class="bottom-margin-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title">
                            <h2>Equipe</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-12">
                        <div class="single-team">
                            <img src="image/team/team1.jpg" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/rodrigoborth" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-description">
                                <h4>Rodrigo J Borth</h4>
                                <h6>Diretor de Marketing</h6>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-12">
                        <div class="single-team">
                            <img src="image/team/team2.jpg" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/mateusdemboski" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-description">
                                <h4>Mateus Demboski</h4>
                                <h6>Gerente de Projeto</h6>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->
                    <!-- START SINGLE TEAM DESIGN AREA -->
                    <div class="col-md-4 col-sm-12">
                        <div class="single-team">
                            <img src="image/team/team3.jpg" alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/nicolas.sroczynski" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-description">
                                <h4>Nicolas V. Scroczynski</h4>
                                <h6>Gerente de Projeto</h6>
                            </div>
                        </div>
                    </div>
                    <!-- / END SINGLE TEAM DESIGN AREA -->
                </div>
            </div>
        </section>
    </main>
@stop

@section('footer')
    @include('includes.footer')
@stop