<?php
namespace lobbykit;

class Admin_Menu
{
    function __construct()
    {

        add_action( 'admin_menu', function () {
            remove_submenu_page( 
                'themes.php', 
                'customize.php?return=' . 
                urlencode( str_replace( get_bloginfo('url'), "", get_admin_url() ) ) . 
                'themes.php' 
            );
        } );

        add_action( 'wp_before_admin_bar_render', function () {
            global $wp_admin_bar;
            $wp_admin_bar->remove_menu('customize');
        } );

    }

}

new Admin_Menu();
