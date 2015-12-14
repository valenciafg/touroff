<header class="banner" role="banner">
  <!--<div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    <nav role="navigation">
      <?php
      /*if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;*/
      ?>
    </nav>
  </div>-->
  <md-toolbar layout="row" class="md-toolbar-turquese">
    <div class="md-toolbar-tools">
      <!-- Menu Icon | Open Left Menu Action <hide-gt-sm>-->
      <div layout="row" ng-controller="MenuController">
        <md-button ng-click="openLeftMenu()"  class="md-icon-button">
          <md-icon aria-label="Menu" md-svg-icon="https://s3-us-west-2.amazonaws.com/s.cdpn.io/68133/menu.svg">
          </md-icon>
        </md-button>
      </div>
      <!-- Blog Title -->
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    </div>
    <!-- Search Box -->
    <div class="search-box">
      <input type="checkbox" id="s">
      <label class="btn" for="s"><i class="fa fa-search"><img class="icon-search"></i></label>
      <input class="search" type="search" placeholder="Type to search">
    </div>
  </md-toolbar>
  <!-- Left SideNav -->
  <md-sidenav md-component-id="left" class="md-sidenav-left">
    Contenido del SideNav Izquierdo
  </md-sidenav>
</header>