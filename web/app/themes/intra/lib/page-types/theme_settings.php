<?php

class Themes_Option_Type extends Papi_Option_Type
{

    public function meta() {
        return [
            'menu' => 'themes.php',
            'name' => 'Intranätet',
        ];
    }

    public function register() {

        $this->box( 'E-post / Mandrill', [

            papi_property( [
                'slug' => 'mandrill_emailer_username',
                'title' => __('Användarnamn','intra'),
                'type' => 'string',
            ] ),

            papi_property( [
                'slug' => 'mandrill_emailer_api_key',
                'title' => __('API-nyckel','intra'),
                'type' => 'string',
            ] ),

            papi_property( [
                'slug' => 'mandrill_emailer_from_name',
                'title' => __('Skickat från, namn','intra'),
                'type' => 'string',
            ] ),

            papi_property( [
                'slug' => 'mandrill_emailer_from_email',
                'title' => __('Skickat från, e-postadress','intra'),
                'type' => 'string',
            ] ),

        ] );

    }

}
