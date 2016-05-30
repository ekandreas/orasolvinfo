<?php

class Link_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'link',
            'name'        => __('Länkning','intra'),
            'description' => __('En länk','intra'),
            'template' => intra\Papi::template(),
        ];
    }

    public function remove( $post_type_supports = [] ) {
        return [
            'commentstatusdiv',
            'editor',
            'postimagediv',
            ];
    }
    
    public function register() {



        $this->box( 'Om länkning', [

            papi_property( [
                'slug' => 'link',
                'title' => __('Länk *','intra'),
                'type'  => 'link',
                'description' => 'Denna måste finnas med!'
            ] ),

            papi_property( [
                'slug' => 'image',
                'title' => __('Länkbild','intra'),
                'type'  => 'image',
                'description' => 'Frivillig bild för länkningen'
            ] ),

            papi_property( [
                'slug' => 'prio',
                'title' => __('Prio','intra'),
                'type'  => 'number',
                'default' => '100',
                'description' => __('Prioritet när det ska listas flera länkar i en utvisning','intra'),
            ] ),

        ] );

    }

}
