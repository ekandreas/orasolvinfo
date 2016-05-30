<?php
return  [

        'title' => __('Data för diagrammet','lobbykit'),

        papi_property([
            'slug'  => 'a_name',
            'title' => __('Etikett A','lobbykit'),
            'description' => __('Namn för X-led A','lobbykit'),
            'type'  => 'string',
        ]),
        papi_property([
            'slug'  => 'b_name',
            'title' => __('Etikett B','lobbykit'),
            'description' => __('Namn för X-led B','lobbykit'),
            'type'  => 'string',
        ]),
        papi_property([
            'slug'  => 'c_name',
            'title' => __('Etikett C','lobbykit'),
            'description' => __('Namn för X-led C','lobbykit'),
            'type'  => 'string',
        ]),
        papi_property([
            'slug'  => 'd_name',
            'title' => __('Etikett D','lobbykit'),
            'description' => __('Namn för X-led D','lobbykit'),
            'type'  => 'string',
        ]),

        papi_property([
            'slug'  => 'data_yabcd',
            'title' => __('y-a-b-c-d','lobbykit'),
            'description' => __('Datapunkter för diagrammet','lobbykit'),
            'type'  => 'repeater',
            'settings' => [
                'items' => [
                    papi_property( [
                        'type'  => 'string',
                        'title' => __('Y-axel','lobbykit'),
                        'slug'  => 'y',
                    ] ),
                    papi_property( [
                        'type'  => 'number',
                        'title' => __('A-data','lobbykit'),
                        'slug'  => 'a',
                    ] ),
                    papi_property( [
                        'type'  => 'number',
                        'title' => __('B-data','lobbykit'),
                        'slug'  => 'b',
                    ] ),
                    papi_property( [
                        'type'  => 'number',
                        'title' => __('C-data','lobbykit'),
                        'slug'  => 'c',
                    ] ),
                    papi_property( [
                        'type'  => 'number',
                        'title' => __('D-data','lobbykit'),
                        'slug'  => 'd',
                    ] ),
                ]
            ]
        ]),

];
