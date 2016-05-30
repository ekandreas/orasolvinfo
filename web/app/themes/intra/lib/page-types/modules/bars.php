<?php

class Bars_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Staplar för utvisning','lobbykit'),
            'description' => __('Ett stapeldiagram visas ut med dina siffror','lobbykit'),
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

        $this->box( dirname(__FILE__) . '/parts/diagram-yabcd.php' );

        $this->box( __('Text','lobbykit'), [
                papi_property([
                    'slug'  => 'description',
                    'title' => __('Beskrivning','lobbykit'),
                    'type'  => 'editor',
                ]),
            ]
        );

        $this->box( dirname(__FILE__) . '/parts/module.php' );

    }

}
