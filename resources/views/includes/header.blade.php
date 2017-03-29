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
                                <li class="@if($page=='aboutus')active @endif"><a href="/aboutus">sobre nós</a></li>
                                <li class="@if($page=='services')active @endif"><a href="#">serviços<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Sites Personalizados</a></li>
                                        <li><a href="#">Sites Padronizados</a></li>
                                        <li><a href="#">Manutenção de Sites</a></li>
                                        <li><a href="#">Mídias Sociais</a></li>
                                    </ul>
                                </li>
                                <li class="@if($page=='portfolio')active @endif"><a href="#">portfolio</a></li>
                                <li class="@if($page=='team')active @endif"><a href="#">equipe</a></li>
                                <li class="@if($page=='contact')active @endif"><a href="#">contato</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>