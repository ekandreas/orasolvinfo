<?php

class MediaListing_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Medialista','lobbykit'),
            'description' => __('Visar lista med media/dokument','lobbykit'),
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

        $this->box( __('Text','lobbykit'), [
                papi_property([
                    'slug'  => 'title',
                    'title' => __('Rubrik','lobbykit'),
                    'type'  => 'string',
                ]),
                papi_property([
                    'slug'  => 'body',
                    'title' => __('Beskrivning / intro','lobbykit'),
                    'type'  => 'editor',
                ]),
            ]
        );

        $this->box( dirname(__FILE__) . '/parts/module.php' );
    }

}
