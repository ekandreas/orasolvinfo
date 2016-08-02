<?php

class ToDo_Module_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('ToDo','lobbykit'),
            'description' => __('Att-göra-lista som kan användas på flera olika ställen','lobbykit'),
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
        ]);

        $this->box( dirname(__FILE__) . '/parts/module.php' );

    }

}
