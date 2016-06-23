<?php 
	$link = papi_get_field( $module->ID, 'link');


	///$count = (int)papi_get_field( $module->ID, 'count');
	//$count = $count ? $count : 5;

	$args=[
        'post_type' => 'calendar',
        'posts_per_page' => 5, //$count,
	    'order' => 'ASC',
	    'orderby' => 'meta_value',
	    'meta_key' => 'start_date',
	    'meta_query' => array(
	        array(
	            'key' => 'start_date',
	            'value' => date('Y-m-d'),
	            'compare' => '>='
	        ),
	    )
    ];
    $calendar_posts = get_posts($args);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">{{ get_the_title( $module->ID ) }}</h3>
	</div>
	<div class="panel-body">

		@if($intro=papi_get_field( $module->ID, 'text' ))
			<p>{!! $intro !!}</p>
		@endif


		@if($calendar_posts)
		    <div class="agenda">
		        <div class="table-responsive">
		            <table class="table table-condensed">
		                <tbody>
							@foreach($calendar_posts as $calendar_post)
			                    <tr>
			                        <td class="agenda-date" rowspan="1">
			                            <div class="dayofmonth text-center">
   			                            	<span style="color:#fff;">
				                            	{{ date_i18n('d', strtotime( papi_get_field($calendar_post->ID,'start_date') )) }}
				                            </span>
		                            	</div>
			                            <div class="dayofweek text-center">{{ ucfirst(date_i18n('F', strtotime( papi_get_field($calendar_post->ID,'start_date') ))) }}</div>
			                            <div class="shortdate text-muted text-center">
		                            		{{ date_i18n('Y', strtotime( papi_get_field($calendar_post->ID,'start_date') )) }}
		                            	</div>
			                        </td>
			                        <td class="agenda-time">
			                        	<?php
			                        		$time = date_i18n('H:i', strtotime( papi_get_field($calendar_post->ID,'start_date') ));
			                        		if($time='00:00') $time='';
			                        	?>
			                            {{ $time }}
			                        </td>
			                        <td class="agenda-events">
			                            <div class="agenda-event">
			                             	{{ $calendar_post->post_title }}   
			                            </div>
			                        </td>
			                    </tr>
							@endforeach
		                </tbody>
		            </table>
		        </div>
		    </div>
		@endif

		@if( $link )
			<div class="caption text-center">
					<p>
						<a href="{{ $link->url }}" class="btn btn-warning">{{ $link->title }}</a>
					</p>
			</div>
		@endif
	</div>
</div>



