<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> ng-app="placeApp" >
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if lt IE 9]>
<div class="alert alert-warning">
  <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>
<div class="wrap container" role="document">
<!--
  <div ng-controller="materialAppController">
    {{saludo}}
    <md-toolbar layout="row">
      <div class="md-toolbar-tools">
        <md-button ng-click="vm.toggleSidenav('left')" hide-gt-sm class="md-icon-button">
          <md-icon aria-label="Menu" md-svg-icon="https://s3-us-west-2.amazonaws.com/s.cdpn.io/68133/menu.svg">
          </md-icon>
        </md-button>
        <h1>Angular Material: &nbsp; Starter CodePen </h1>
      </div>
    </md-toolbar>
    <div layout="row" flex>
      <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-4dp" md-component-id="left" md-is-locked-open="$mdMedia('gt-sm')">
        <md-button class="md-accent">Button 1</md-button>
        <md-button class="md-accent">Button 2</md-button>
      </md-sidenav>
      <div layout="column" flex id="content">
        <md-content layout="column" flex class="md-padding">
          This Starter Application consists of a Toolbar, SideNav (with two buttons), and Content area.
          <p>This is the content area! </p>
        </md-content>
      </div>
    </div>
-->
  </div>
  <div class="content row">
    <main class="main" role="main">
      <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
    <?php if (Config\display_sidebar()) : ?>
      <aside class="sidebar" role="complementary">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
  </div><!-- /.content -->
</div><!-- /.wrap -->
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>