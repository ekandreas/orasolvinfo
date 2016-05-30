<?php

class Standard_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'page',
            'name'        => __('Standardsida','intra'),
            'description' => __('En standardsida (moduler) med en innehållskolumn och en mindre sidokolumn','intra'),
            'template' => intra\Papi::template(),
            'thumbnail' => intra\Papi::thumbnail(),
        ];
    }

    public function remove( $post_type_supports = [] ) {
        return [
            'commentstatusdiv',
            ];
    }

    public function register() {

        $this->box( 'Under innehåll', [
            papi_property( [
                'slug' => 'modules_container_row1_col1',
                'title' => __('Kolumn 1','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
        ] );

        $this->box( 'Sidebar', [
            papi_property( [
                'slug' => 'sidebar_modules_inherit',
                'title' => __('Ärv sidebar från','intra'),
                'description' => 'Hämtar modul och visar dess funktion',
                'type'  => 'post',
                'settings' => [
                    'placeholder' => 'Egen sidebar, ärv inte...',
                    'post_type' => 'page',
                ],
            ] ),
            papi_property( [
                'slug' => 'sidebar_modules',
                'title' => __('Sidebar','intra'),
                'description' => 'Hämtar moduler och visar dess funktion',
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => 'module',
                ],
            ] ),
        ] );

    }

}
