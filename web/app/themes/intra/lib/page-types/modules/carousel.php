<?php

class Carousel_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Bildspel','intra'),
            'description' => __('Stora bilder med text och länk som visas på sidan','intra'),
            'template' => intra\Papi::template(),
            'thumbnail' => intra\Papi::thumbnail(),
        ];
    }

    public function remove() {
        return [
            'comments',
            'commentstatusdiv',
            'editor',
        ];
    }

    public function register() {

        $this->box( __('test','intra'), [
                papi_property([
                    'slug'  => 'test',
                    'title' => __('TEST','intra'),
                    'type'  => 'string',
                ]),
            ]
        );


        $this->box( __('Bildspel','intra'), [
                papi_property([
                    'slug'  => 'carousel',
                    'title' => __('Bilder','intra'),
                    'type'  => 'repeater',
                    'settings' => [
                    	'items' => [
			                papi_property([
			                    'slug'  => 'image',
			                    'title' => __('Bild','intra'),
			                    'type'  => 'image',
			                ]),
			                papi_property([
			                    'slug'  => 'link',
			                    'title' => __('Destination','intra'),
			                    'type'  => 'link',
			                ]),
                    	],
                    ],
                ]),
            ]
        );

        $this->box( dirname(__FILE__) . '/parts/module.php' );

    }

}