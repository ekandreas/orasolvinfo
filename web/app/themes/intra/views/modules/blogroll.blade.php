<?php
	$cat_list = '';
	$matches = papi_get_field($module->id, 'matches');
	if($matches) {
		foreach ($matches as $match) {
			if(!$cat_list=='') $cat_list .= ',';
			$cat_list .= $match['term']->term_id;
		}
	}
?>
<div class="row">

	<div class="col-md-12">

		<?php 
			$length = (int)papi_get_field( $module->id, 'excerpt_length' );
			$args=['post_type'=>'post'];
			if($cat_list!='') {
				$args['cat'] = $cat_list;
			}
			$the_query = new WP_Query( $args );
		?>
		@if( $the_query->have_posts() )
			@if( $title=papi_get_field( $module->id, 'title' ) )
				<h2>{{ $title }}</h2>
			@endif
			@while ( $the_query->have_posts() )
				{{ $the_query->the_post() }}
					<h3>{{ the_title() }}</h3>
					{!! get_post_excerpt( get_the_ID(), $length, false) !!}
					<br/>
					<a href="{{ get_permalink() }}"><i class="fa fa-eye" aria-hidden="true"></i> Läs mer!</a>
			@endwhile
		@endif
		{{ wp_reset_postdata() }}

	</div>

</div>