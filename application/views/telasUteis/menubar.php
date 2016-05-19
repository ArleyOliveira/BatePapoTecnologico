<!-- Always shows a header, even in smaller screens. -->
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
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/info"); ?>"> <i class="material-icons">info</i> Informações</a>
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/sobre"); ?>"><i class="material-icons">room</i> Sobre</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation"> 
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/eventos"); ?>"> <i class="material-icons">event</i> Eventos</a>
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/organizacao"); ?>"> <i class="material-icons">group_work</i> Organização</a>
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/info"); ?>"> <i class="material-icons">info</i> Informações</a>
        <a class="mdl-navigation__link" href="<?php echo base_url("pagina/sobre"); ?>"><i class="material-icons">room</i> Sobre</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">


