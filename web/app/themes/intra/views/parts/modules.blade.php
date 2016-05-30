@if( $modules = papi_get_field( get_the_ID(), $slug ) )
	@foreach( $modules as $module )
		<?php 
			if( is_user_logged_in() && papi_get_field($module->ID,'anonymous_only') ) continue;
			?>
			@include( rtrim( papi_get_page_type_template($module->ID), '.php' ), [ 'module' => papi_get_page($module->ID) ] )
			@include( 'views.parts.edit_module', ['module_id'=>$module->ID] )
			<?php
		?>
	@endforeach
@endif
