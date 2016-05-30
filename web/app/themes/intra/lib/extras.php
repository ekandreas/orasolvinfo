<?php

/**
 * Add <body> classes
 */
function sage_body_class($classes)
{
    // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
      if (!in_array(basename(get_permalink()), $classes)) {
          $classes[] = basename(get_permalink());
      }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
      $classes[] = 'sidebar-primary';
  }

    return $classes;
}
add_filter('body_class', 'sage_body_class');

add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

function get_post_excerpt($post_or_post_id=null, $length = 150, $add_read_more=false)
{
    $post   = null;
    $result = "";

    if (!$post_or_post_id) {
        $post_or_post_id = get_the_ID();
    }

    if (is_object($post_or_post_id)) {
        $post = $post_or_post_id;
    } elseif (is_numeric($post_or_post_id)) {
        $post = get_post($post_or_post_id);
    } else {
        return ''; //throw new Exception( '### Error in VcModule/get_post_excerpt, no post nor post_id given! ###' );
    }

    $excerpt = html_entity_decode($post->post_excerpt);
    if (empty($excerpt)) {
        $excerpt = html_entity_decode(strip_tags($post->post_content));
    }

    if (strlen($excerpt) > $length) {
        $line=$excerpt;
        if (preg_match('/^.{1,' . $length . '}\b/s', $excerpt, $match)) {
            $line=$match[0];
        }

         $excerpt = $line . '...';
    }

    if( $add_read_more ) $excerpt .= '<br/>Läs mer!';

    return wp_kses_post($excerpt);
}



/** 
 * SMTP configuration to pass all emails (even non-templated ones) 
 * through Mandrill.
 */
add_action( 'phpmailer_init', 'mandrill_emailer_phpmailer_init' );
function mandrill_emailer_phpmailer_init( $phpmailer ) {
 
$phpmailer->isSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = "tls";
     
    $phpmailer->Host = "smtp.mandrillapp.com";
    $phpmailer->Port = "587";
  
    // Credentials for SMTP authentication
    $phpmailer->Username = papi_get_option("mandrill_emailer_username");
    $phpmailer->Password = papi_get_option("mandrill_emailer_api_key");
  
    // From email and name
    $from_name = papi_get_option("mandrill_emailer_from_name");
    if ( ! isset( $from_name ) ) {
        $from_name = 'WordPress';
    }
 
    $from_email = papi_get_option("mandrill_emailer_from_email");        
    if ( ! isset( $from_email ) ) {
        // Get the site domain and get rid of www.
        $sitename = strtolower( $_SERVER['SERVER_NAME'] );
        if ( 'www.' == substr( $sitename, 0, 4 )  ) {
            $sitename = substr( $sitename, 4 );
        }
         
        $from_email = 'wordpress@' . $sitename;
    }
     
    $phpmailer->From = $from_email;
    $phpmailer->FromName = $from_name;
     
}

add_action('login_head', function() {
    echo '<style type="text/css">
        h1 a {background-image: url('.get_bloginfo('template_directory').'/dist/images/orasolv_303x85.png) !important; }
    </style>';
});

