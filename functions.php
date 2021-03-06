<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}

$my_custom_includes = array(
  'mvc/controllers/place.php',
  'mvc/models/post-types/place.php',
  'mvc/models/taxonomies/location.php',
  'mvc/models/taxonomies/place_type.php',
  'mvc/models/taxonomies/media_category.php',
  
);

foreach ($my_custom_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}


$place_api = new Place_API();
/**
 * AGREGAR LOS SCRIPTS DE ANGULAR
 */
/*function my_scripts() {

  wp_enqueue_script(
      'angularjs',
      get_stylesheet_directory_uri() . '/bower_components/angular/angular.min.js'
  );
  wp_enqueue_script(
      'angularjs-route',
      get_stylesheet_directory_uri() . '/bower_components/angular-route/angular-route.min.js'
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );*/

unset($file, $filepath);