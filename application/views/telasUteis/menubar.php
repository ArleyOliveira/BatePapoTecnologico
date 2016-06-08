<!-- Always shows a header, even in smaller screens. -->
<style type="text/css">
    .middle{
        position: relative;
        top: 6px;
        margin-left: 5px;
    }
</style>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"> 
                Bate-papo Tecnológico
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="<?php echo base_url("pagina/eventos"); ?>"> <i class="material-icons">event</i> Eventos</a>
                <a class="mdl-navigation__link" href="<?php echo base_url("pagina/organizacao"); ?>"> <i class="material-icons">group_work</i> Organização</a>
                <a class="mdl-navigation__link" href="<?php echo base_url("pagina/sobre"); ?>"><i class="material-icons">room</i> Sobre</a>
            </nav>
            <!-- Right aligned menu below button -->
            <span>
                
                <?php
                     echo $this->session->nome 
                ?>
            </span>
            <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">arrow_drop_down</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="demo-menu-lower-right">
                <li class="mdl-menu__item"> 
                    <a href="#"> <i class="material-icons">account_circle</i> 
                        <span class="marginLeft"> Perfil </span>
                    </a>
                </li>
                <li class="mdl-menu__item">
                    <a href="#">
                        <i class="material-icons">settings</i> 
                        <span class="marginLeft"> Configurações </span>
                    </a>
                </li>

                <li class="mdl-menu__item"> 
                    <a href="#">
                        <i class="material-icons middle">exit_to_app</i> 
                        <span class="marginLeft"> Sair </span>
                    </a>
                </li>

            </ul>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Menu</span>
        <nav class="mdl-navigation"> 
            <a class="mdl-navigation__link" href="<?php echo base_url("pagina/eventos"); ?>"> <i class="material-icons">event</i> Eventos</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("pagina/organizacao"); ?>"> <i class="material-icons">group_work</i> Organização</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("pagina/sobre"); ?>"><i class="material-icons">room</i> Sobre</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">


