<?php

class Calendar_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'calendar',
            'name'        => __('Kalenderhändelse','intra'),
            'description' => __('Ett inlägg om en kalenderhändelse med datum och plats','intra'),
        ];
    }

    public function remove( $post_type_supports = [] ) {
        return [
            'commentstatusdiv',
            ];
    }
    
    public function register() {

        $this->box( 'Puff', [
            papi_property( [
                'slug' => 'short_text',
                'title' => __('Kort text','intra'),
                'type'  => 'string',
                'description' => 'Kort presentation av händelsen i kalenderlistning',
            ] ),
        ] );

        $this->box( 'Plats', [
            papi_property( [
                'slug' => 'city',
                'title' => __('Ort','intra'),
                'type'  => 'string',
            ] ),
            papi_property( [
                'slug' => 'street',
                'title' => __('Företag/gata','intra'),
                'type'  => 'string',
            ] ),
            papi_property( [
                'slug' => 'room',
                'title' => __('Mötesrum','intra'),
                'type'  => 'string',
            ] ),
        ] );

        $this->box( 'Tid', [
            papi_property( [
                'slug' => 'start_date',
                'title' => __('Startar','intra'),
                'type'  => 'datetime',
                'required' => true,
                'settings' => [
                    'use_24_hours' => true,
                    'firstDay' => 1,
                ],
            ] ),
            papi_property( [
                'slug' => 'stop_date',
                'title' => __('Slutar','intra'),
                'type'  => 'datetime',
                'settings' => [
                    'use_24_hours' => true,
                    'firstDay' => 1,
                ],
            ] ),
        ] );

        $this->box( 'Läs mer', [
            papi_property( [
                'slug' => 'link',
                'title' => __('Länka vidare till','intra'),
                'type'  => 'link',
            ] ),
            papi_property( [
                'slug' => 'description',
                'title' => __('Text','intra'),
                'type'  => 'editor',
                'description' => 'Berätta mer!',
            ] ),
        ] );

    }

}
