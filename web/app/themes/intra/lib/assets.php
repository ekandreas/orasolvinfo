<?php

/**
 * Theme assets
 */
function add_assets() {
  wp_enqueue_style('sage/css', asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  //wp_deregister_script( 'jquery' );
  //wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', array(), null, false );
  //wp_enqueue_script( 'bootstrap', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, false );
  wp_enqueue_script('sage/js', asset_path('scripts/main.js'), ['jquery'], null, true);

  if(!is_user_logged_in()) {
    wp_enqueue_script('unauth-js', asset_path('scripts/unauthenticated.js'), [], $version, true);
    $data = [
        'waiting_message' => __('Vänta lite, kontrollerar...', 'intra'),
        'ajax_url'        => admin_url('admin-ajax.php'),
        'nonce'           => wp_create_nonce('gatekeeper'),
    ];
    wp_localize_script('unauth-js', 'wpdata', $data);
  }

}
add_action('wp_enqueue_scripts', 'add_assets', 100);

/**
 * Get paths for assets
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
  $dist_path = get_template_directory_uri() . '/dist/';
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;

  if (empty($manifest)) {
    $manifest_path = get_template_directory() . '/dist/' . 'assets.json';
    $manifest = new JsonManifest($manifest_path);
  }

  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $directory . $manifest->get()[$file];
  } else {
    return $dist_path . $directory . $file;
  }
}
