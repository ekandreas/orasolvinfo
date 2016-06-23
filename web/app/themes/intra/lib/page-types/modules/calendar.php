<?php

class Calendar_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Kalender','intra'),
            'description' => __('Visa ut en agenda över kommande kalenderhändelser','intra'),
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

        $this->box( __('Text','intra'), [
                papi_property([
                    'slug'  => 'text',
                    'title' => __('Innehåll','intra'),
                    'type'  => 'editor',
                ]),
            ]
        );

        $this->box( __('Visa','intra'), [
                papi_property([
                    'slug'  => 'count',
                    'title' => __('Hur många ska visas','intra'),
                    'type'  => 'number',
                ]),
            ]
        );

        $this->box( __('Kortknapp','intra'), [
                papi_property([
                    'slug'  => 'link',
                    'title' => __('Länk','intra'),
                    'type'  => 'link',
                ]),
            ]
        );

        $this->box( dirname(__FILE__) . '/parts/module.php' );

    }

}
