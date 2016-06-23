<?php

class Blogroll_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Inläggslista', 'intra'),
            'description' => __('Visar inlägg i en lista', 'intra'),
            'template' => intra\Papi::template(),
            'thumbnail' => intra\Papi::thumbnail(),
        ];
    }

    public function remove() {
        return [
            'commentstatusdiv',
        ];
    }

    public function register() {

        $this->box( __('Text', 'intra'), [
                papi_property([
                    'slug'  => 'title',
                    'title' => __('Rubrik', 'intra'),
                    'type'  => 'string',
                ]),
                papi_property([
                    'slug'  => 'excerpt_length',
                    'title' => __('Pufflängd', 'intra'),
                    'description' => 'Antal bokstäver för varje text under rubriken',
                    'type'  => 'number',
                    'default' => '200',
                ]),
                papi_property([
                    'slug'  => 'matches',
                    'title' => __('Kategorimatchningar', 'intra'),
                    'description' => 'Lägg till de kategorier du vill ska matcha för utvisning. Ingen = alla inlägg.',
                    'type'  => 'repeater',
                    'settings' => [
                        'items' => [
                            papi_property([
                                'slug'  => 'term',
                                'title' => __('Kategori', 'intra'),
                                'type'  => 'term',
                                'settings' => [
                                    'taxonomy' => 'category'
                                ] 
                            ]),
                        ],
                    ],
                ]),
            ]
        );

        $this->box( __('Mer', 'intra'), [
                papi_property([
                    'slug'  => 'more',
                    'title' => __('Läs mer','intra'),
                    'type'  => 'link',
                ]),
            ]
        );


        $this->box( dirname(__FILE__) . '/parts/module.php' );
    }

}
