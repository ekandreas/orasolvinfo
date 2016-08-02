<?php

class ToDo_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'todo',
            'name'        => __('ToDo-post','intra'),
            'description' => __('En ToDo-post','intra'),
            'template' => intra\Papi::template(),
        ];
    }

    public function remove( $post_type_supports = [] ) {
        return [
            'commentstatusdiv',
            'postimagediv',
            ];
    }
    
    public function register() {

        $this->box( 'ToDo-data', [

            papi_property( [
                'slug' => 'module',
                'title' => __('Relaterad till modul','intra'),
                'type'  => 'post',
                'required' => true,
                'settings' => [
                    'post_type' => 'module',
                    'query' => [
                    'meta_key' => PAPI_PAGE_TYPE_KEY,
                        'meta_value' => 'modules/todo',
                    ],
                ],
            ] ),

            papi_property( [
                'slug' => 'created_by',
                'title' => __('Skapad av','intra'),
                'type'  => 'user',
                'default' => 0,
            ] ),

            papi_property( [
                'slug' => 'done_by',
                'title' => __('Klarmarkerad av','intra'),
                'type'  => 'user',
                'default' => 0,
            ] ),

            papi_property( [
                'slug' => 'status',
                'title' => __('Status','intra'),
                'type'  => 'dropdown',
                'settings' => [
                    'items' => [
                        'Ogjord' => 0,
                        'Klar' => 1,
                    ],
                ]
            ] ),

            papi_property( [
                'slug' => 'reminder',
                'title' => __('Påminnelse','intra'),
                'type'  => 'datetime',
                'settings' => [
                    'use_24_hours' => true,
                    'firstDay' => 1,
                ],
            ] ),

            papi_property( [
                'slug' => 'due',
                'title' => __('Slutdatum/tid','intra'),
                'type'  => 'datetime',
                'settings' => [
                    'use_24_hours' => true,
                    'firstDay' => 1,
                ],
            ] ),

            papi_property( [
                'slug' => 'link',
                'title' => __('Länk','intra'),
                'type'  => 'link',
            ] ),

        ] );

    }

}
