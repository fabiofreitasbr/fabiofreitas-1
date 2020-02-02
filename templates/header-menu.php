<header>
    <div class="container">
        <div class="content-header">
            <div class="header-logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" alt="">
            </div>
            <div class="nav-button">
                <div class="hamburger hamburger--squeeze">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</header>
<nav class="header-bar">
    <div id="menu-principal-header" class="menu-principal-header">
        <ul id="header-nav" class="header-menu">
            <li class="">
                <a href="#home">
                    Início
                </a>
            </li>
            <li class="">
                <a href="#sobre">
                    Sobre Mim
                </a>
            </li>
            <li class="">
                <a href="#servicos">
                    Serviços
                </a>
            </li>
            <li class="">
                <a href="#portfolio">
                    Portfólio
                </a>
            </li>
            <li class="">
                <a href="#contato">
                    Contato
                </a>
            </li>
        </ul>
    </div>
    <div id="pre-socials-container" class="pre-socials-container">
        <ul id="pre-list-ul" class="pre-header-list">
            <li id="nav-menu-item-6">
                <a href="<?php echo InfoVar::show('facebook'); ?>" target="blank" class="menu-link main-menu-link">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li id="nav-menu-item-6">
                <a href="<?php echo InfoVar::show('instagram'); ?>" target="blank" class="menu-link main-menu-link">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li id="nav-menu-item-6">
                <a href="<?php echo InfoVar::show('linkedin'); ?>" target="blank" class="menu-link main-menu-link">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <li id="nav-menu-item-6">
                <a href="<?php echo InfoVar::show('behance'); ?>" target="blank" class="menu-link main-menu-link">
                    <i class="fab fa-behance"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>