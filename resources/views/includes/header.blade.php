<header class="header-area header-absolute">
    <div class="header-bottom sticky">
        <div class="container">
            <div class="row">
                <!-- Header Bottom -->
                <div class="col-xs-12">
                    <div class="navbar-header">
                        <a href="/" class="logo navbar-brand">Next<span>web</span></a>
                    </div>
                    <div class="main-menu mean-menu float-right">
                        <nav style="display: block;">
                            <ul>
                                <li class="@if($page=='home')active @endif"><a href="/">home</a></li>
                                <li class="@if($page=='sobrenos')active @endif"><a href="/sobrenos">sobre nós</a></li>
                                <li class="@if($page=='servicos')active @endif"><a href="/servicos">serviços<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="/servicos/sites-personalizados">Sites Personalizados</a></li>
                                        <li><a href="/servicos/sites-padronizados">Sites Padronizados</a></li>
                                        <li><a href="/servicos/manutencao-sites">Manutenção de Sites</a></li>
                                        <li><a href="/servicos/midias-sociais">Mídias Sociais</a></li>
                                    </ul>
                                </li>
                                <li class="@if($page=='portfolio')active @endif"><a href="/portfolio">portfolio</a></li>
                                <li class="@if($page=='contato')active @endif"><a href="/contato">contato</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>