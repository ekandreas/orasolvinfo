<?php

$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/admin_menu.php',
  'lib/cpt.php',
  'lib/papi.php',
  'lib/yamm.php',
  //'lib/no-updates.php',
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function set_post_order_in_admin( $wp_query ) {
  if ( is_admin() ) {
    if(!isset($_REQUEST['orderby'])) {
      $wp_query->set( 'orderby', 'modified' );
      $wp_query->set( 'order', 'DESC' );
    }
  }
}
add_filter('pre_get_posts', 'set_post_order_in_admin' );