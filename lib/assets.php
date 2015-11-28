<?php
namespace Roots\Sage\Assets;
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/dist/styles/main.css
 *
 * Enqueue scripts in the following order:
 * 1. /theme/dist/scripts/modernizr.js
 * 2. /theme/dist/scripts/main.js
 */
class JsonManifest {
  private $manifest;
  public function __construct($manifest_path) {
    if (file_exists($manifest_path)) {
      $this->manifest = json_decode(file_get_contents($manifest_path), true);
    } else {
      $this->manifest = [];
    }
  }
  public function get() {
    return $this->manifest;
  }
  public function getPath($key = '', $default = null) {
    $collection = $this->manifest;
    if (is_null($key)) {
      return $collection;
    }
    if (isset($collection[$key])) {
      return $collection[$key];
    }
    foreach (explode('.', $key) as $segment) {
      if (!isset($collection[$segment])) {
        return $default;
      } else {
        $collection = $collection[$segment];
      }
    }
    return $collection;
  }
}
function asset_path($filename) {
  $dist_path = get_template_directory_uri() . DIST_DIR;
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;
  if (empty($manifest)) {
    $manifest_path = get_template_directory() . DIST_DIR . 'assets.json';
    $manifest = new JsonManifest($manifest_path);
  }
  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $directory . $manifest->get()[$file];
  } else {
    return $dist_path . $directory . $file;
  }
}
function assets() {
  wp_enqueue_style('sage/css', asset_path('styles/main.css'), false, null);
  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  wp_enqueue_script('modernizr', asset_path('scripts/modernizr.js'), [], null, true);
  wp_enqueue_script('sage/js', asset_path('scripts/main.js'), ['jquery'], null, true);
  // Enqueue sageApp
  /*if (is_page( 'sage-app' )) {
    wp_enqueue_script('sage/app', asset_path('scripts/sage-app.js'), [], null, true);
    wp_localize_script('sage/app', 'GLOBALS', [
        'partialsPath' => get_template_directory_uri() . '/assets/sage-app/partials/'
    ]);
  }*/
  // Enqueue placeApp
  if (is_page( 'prueba-place-app' )) {
    wp_enqueue_script('place/app', asset_path('scripts/places-app.js'), [], null, true);
    wp_localize_script('place/app', 'GLOBALS', [
        'partialsPath' => get_template_directory_uri() . '/assets/place-app/partials/'
    ]);
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);