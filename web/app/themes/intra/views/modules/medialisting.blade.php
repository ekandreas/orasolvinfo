<div class="row">

	<div class="col-md-12">

		<?php 
            $args = [
            	'post_type'=>'attachment',
            	'meta_query' => [
            		[
		            	'key' => 'relation',
		            	'value' => $module->id,
		            	'compare' => 'LIKE'
            		]
            	],
            ];
            $medialist = get_posts($args);
            $show_as = papi_get_field($module->id, 'show_as');
        ?>
		@if( $medialist )

			<h3>{{ papi_get_field($module->id, 'title') }}</h3>
			<p>{!! papi_get_field($module->id, 'body') !!}</p>

			@if($show_as=='gallery') 
				@include('views.modules.medialisting.gallery', compact($medialist, $module))
			@elseif($show_as=='images')
				@include('views.modules.medialisting.images', compact($medialist, $module))
			@else
				@include('views.modules.medialisting.downloads', compact($medialist, $module))
			@endif

		@endif
		{{ wp_reset_postdata() }}

	</div>

</div>