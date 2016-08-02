<?php
namespace intra;

class Cpt
{
    function __construct()
    {
        add_action( 'init', function () {

            if( !function_exists('register_extended_post_type') ) {
                $path = realpath(ABSPATH . '/../../' . 'vendor/johnbillion/extended-cpts/');
                include_once( $path . '/extended-cpts.php' );
            }

            if( function_exists('register_extended_post_type') ) {

                register_extended_post_type( 'module', [
                    'has_archive' => false,
                    'show_ui' => true,
                    'show_in_menu' => 'edit.php?post_type=page',
                    'show_in_feed' => false,
                    'rewrite' => ['slug'=>'module','with_front'=>false,],
                    'supports' => array( 'title' ),
                    'labels' => [
                        'name'                  => __('Moduler','intra'),
                        'singular_name'         => __('Modul','intra'),
                        'menu_name'             => __('Moduler','intra'),
                        'name_admin_bar'        => __('Modul','intra'),
                        'add_new'               => __('Skapa ny','intra'),
                        'add_new_item'          => __('Skapa ny modul','intra'),
                        'edit_item'             => __('Ändra modul','intra'),
                        'new_item'              => __('Ny modul','intra'),
                        'view_item'             => __('Visa modul','intra'),
                        'search_items'          => __('Sök moduler','intra'),
                        'not_found'             => __('Inga moduler funna','intra'),
                        'not_found_in_trash'    => __('Inga moduler i papperskorg','intra'),
                        'parent_item_colon'     => __('Modulförälder:','intra'),
                        'all_items'             => __('Moduler','intra'),
                        'archives'              => __('Modularkiv','intra'),
                        'insert_into_item'      => __('Lägg till i modul','intra'),
                        'uploaded_to_this_item' => __('Uppladdat till modul','intra'),
                        'filter_items_list'     => __('Filtrera modullistan','intra'),
                        'items_list_navigation' => __('Listnavigering','intra'),
                        'items_list'            => __('Modullista','intra'),
                    ],
                ], [
                    'singular' => __('Modul','intra'),
                    'plural'   => __('Moduler','intra'),
                ] );

                register_extended_post_type( 'calendar', [
                    'has_archive' => false,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'show_in_feed' => false,
                    'supports' => array( 'title' ),
                    'labels' => [
                        'name'                  => __('Kalender','intra'),
                        'singular_name'         => __('Kalender','intra'),
                        'menu_name'             => __('Kalender','intra'),
                        'name_admin_bar'        => __('Kalender','intra'),
                        'add_new'               => __('Skapa ny','intra'),
                        'add_new_item'          => __('Skapa ny kalenderhändelse','intra'),
                        'edit_item'             => __('Ändra kalenderhändelse','intra'),
                        'new_item'              => __('Ny händelse','intra'),
                        'view_item'             => __('Visa händelse','intra'),
                        'search_items'          => __('Sök händelser','intra'),
                        'not_found'             => __('Inga händelser funna','intra'),
                        'not_found_in_trash'    => __('Inga händelser i papperskorg','intra'),
                        'parent_item_colon'     => __('Förälder:','intra'),
                        'all_items'             => __('Kalenderhändelser','intra'),
                        'archives'              => __('Arkiv','intra'),
                        'insert_into_item'      => __('Lägg till i kalender','intra'),
                        'uploaded_to_this_item' => __('Uppladdat till kalender','intra'),
                        'filter_items_list'     => __('Filtrera listan','intra'),
                        'items_list_navigation' => __('Listnavigering','intra'),
                        'items_list'            => __('Lista','intra'),
                    ],
                ], [
                    'singular' => __('Modul','intra'),
                    'plural'   => __('Moduler','intra'),
                ] );

                register_extended_post_type( 'todo', [
                    'has_archive' => false,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'show_in_feed' => false,
                    'supports' => array( 'title' ),
                    'labels' => [
                        'name'                  => __('ToDo','intra'),
                        'singular_name'         => __('ToDo','intra'),
                        'menu_name'             => __('ToDo','intra'),
                        'name_admin_bar'        => __('ToDo','intra'),
                        'add_new'               => __('Skapa ny','intra'),
                        'add_new_item'          => __('Skapa ny ToDo','intra'),
                        'edit_item'             => __('Ändra ToDo','intra'),
                        'new_item'              => __('Ny ToDo','intra'),
                        'view_item'             => __('Visa ToDo','intra'),
                        'search_items'          => __('Sök ToDo','intra'),
                        'not_found'             => __('Inga ToDo funna','intra'),
                        'not_found_in_trash'    => __('Inga ToDo i papperskorg','intra'),
                        'parent_item_colon'     => __('Förälder:','intra'),
                        'all_items'             => __('ToDo-händelser','intra'),
                        'archives'              => __('Arkiv','intra'),
                        'insert_into_item'      => __('Lägg till i ToDo','intra'),
                        'uploaded_to_this_item' => __('Uppladdat till ToDo','intra'),
                        'filter_items_list'     => __('Filtrera listan','intra'),
                        'items_list_navigation' => __('Listnavigering','intra'),
                        'items_list'            => __('Lista','intra'),
                    ],
                ], [
                    'singular' => __('ToDo','intra'),
                    'plural'   => __('ToDo','intra'),
                ] );

                register_extended_post_type( 'link', [
                    'has_archive' => true,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'show_in_feed' => false,
                    'taxonomies' => ['category'],
                    'supports' => array( 'title', 'thumbnail' ),
                    'labels' => [
                        'name'                  => __('Länkar','intra'),
                        'singular_name'         => __('Länk','intra'),
                        'menu_name'             => __('Länkar','intra'),
                        'name_admin_bar'        => __('Länk','intra'),
                        'add_new'               => __('Skapa ny','intra'),
                        'add_new_item'          => __('Skapa ny länk','intra'),
                        'edit_item'             => __('Ändra länk','intra'),
                        'new_item'              => __('Ny länk','intra'),
                        'view_item'             => __('Visa länk','intra'),
                        'search_items'          => __('Sök länkar','intra'),
                        'not_found'             => __('Inga länkar funna','intra'),
                        'not_found_in_trash'    => __('Inga länkar i papperskorg','intra'),
                        'parent_item_colon'     => __('Länkförälder:','intra'),
                        'all_items'             => __('Länkar','intra'),
                        'archives'              => __('Länkarkiv','intra'),
                        'insert_into_item'      => __('Lägg till i modul','intra'),
                        'uploaded_to_this_item' => __('Uppladdat till länk','intra'),
                        'filter_items_list'     => __('Filtrera länklistan','intra'),
                        'items_list_navigation' => __('Listnavigering','intra'),
                        'items_list'            => __('Länklista','intra'),
                    ],
                ], [
                    'singular' => __('Länk','intra'),
                    'plural'   => __('Länkar','intra'),
                ] );

            }

        } );
    }

}

new Cpt();
