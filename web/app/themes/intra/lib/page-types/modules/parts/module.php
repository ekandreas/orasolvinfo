<?php
return  [

        'title' => __('Allmänna modulinställningar','lobbykit'),

        papi_property([
            'slug'  => 'anonymous_only',
            'title' => __('Anonym enbart','lobbykit'),
            'description' => __('Visas endast för anonym besökare','lobbykit'),
            'type'  => 'bool',
        ]),

];
