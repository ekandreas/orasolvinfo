<?php

class Landing_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'page',
            'name'        => __('Landingssida','intra'),
            'description' => __('En landingssida (moduler) med en större överliggare och tre kolumner för moduler','intra'),
            'template' => get_stylesheet_directory() . '/views/pages/landing.blade.php',
            'thumbnail' => intra\Papi::thumbnail(),
        ];
    }

    public function remove( $post_type_supports = [] ) {
        return [
            'commentstatusdiv',
            'editor',
            ];
    }
    
    public function register() {

        $this->box( 'Rad 1', [

            papi_property( [
                'slug' => 'modules_container_row1',
                'title' => __('Kolumn 1','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),

        ] );

        $this->box( 'Rad 2', [
            papi_property( [
                'slug' => 'modules_container_row2_col1',
                'title' => __('Kolumn 1','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
            papi_property( [
                'slug' => 'modules_container_row2_col2',
                'title' => __('Kolumn 2','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
            papi_property( [
                'slug' => 'modules_container_row2_col3',
                'title' => __('Kolumn 3','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
        ] );

        $this->box( 'Rad 3', [
            papi_property( [
                'slug' => 'modules_container_row3',
                'title' => __('Moduler','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
        ] );

    }

}
