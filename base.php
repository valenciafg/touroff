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
<div layout="row" layout-wrap>
    <!-- Main Container Material Design -->
    <div flex="80">
        <div class="wrap container" role="document">
        </div>
        <div class="content row">
            <main class="main" role="main">
                <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
        </div><!-- /.content -->
    </div>
    <!-- Sidebar Container -->
    <!--<div flex="20" hide-sm>
        <?php //if (Config\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
                <?php //include Wrapper\sidebar_path(); ?>
            </aside><!-- /.sidebar -->
            <?php //endif; ?>
    <!--</div>-->
</div>

<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>