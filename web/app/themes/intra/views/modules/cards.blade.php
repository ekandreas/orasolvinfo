<?php 
	$link = papi_get_field( $module->ID, 'link') 
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{ get_the_title( $module->ID ) }}</h3>
	</div>
	<div class="panel-body">
		@if( has_post_thumbnail( $module->ID ) )
			<div class="thumbnail">
			    <?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id( $module->ID ) ); ?>
				<img src="{{ $feat_image_url }}" class="img-responsive" />
			</div>
		@endif
		<p>{!! papi_get_field( $module->ID, 'text' ) !!}</p>
		@if( $link )
			<div class="caption text-center">
					<p>
						<a href="{{ $link->url }}" class="btn btn-warning">{{ $link->title }}</a>
					</p>
			</div>
		@endif
	</div>
</div>



