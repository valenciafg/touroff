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
  <md-toolbar layout="row">
    <div class="md-toolbar-tools">
      <!--<md-button ng-click="vm.toggleSidenav('left')" hide-gt-sm class="md-icon-button">
        <md-icon aria-label="Menu" md-svg-icon="https://s3-us-west-2.amazonaws.com/s.cdpn.io/68133/menu.svg">
        </md-icon>
      </md-button>-->
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    </div>
  </md-toolbar>
</header>

