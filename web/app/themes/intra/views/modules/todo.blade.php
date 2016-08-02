<?php 
	$args=[
        'post_type' => 'todo',
        'posts_per_page' => -1,
	    'order' => 'ASC',
	    'orderby' => 'meta_value',
	    'meta_key' => 'due',
	    'meta_query' => [
	    	[
	            'key' => 'status',
	            'value' => 0,
	            'compare' => '=',
	    	]
	    ]
    ];
    $todo_posts = get_posts($args);

?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ get_the_title($module->ID) }}</h3>
			</div>
			<div class="panel-body">
				@if($todo_posts)
			    <div class="agenda">
			        <div class="table-responsive">
			            <table class="table table-condensed">
			            	<thead>
			            		<tr>
			            			<th></th>
			            			<th>Uppgift</th>
			            			<th>Bäst före</th>
			            		</tr>
			            	</thead>
			                <tbody>
								@foreach($todo_posts as $todo_post)
				                    <tr>
				                    	<td>
				                    		<input type="checkbox" />
				                    	</td>
				                    	<td>
			                             	{{ $todo_post->post_title }}   
				                    	</td>
				                    	<td>
			                            	{{ date_i18n('Y-m-d', strtotime( papi_get_field($todo_post->ID,'due') )) }}&nbsp;
				                        	<?php
				                        		$time = date_i18n('H:i', strtotime( papi_get_field($todo_post->ID,'due') ));
				                        		if($time='00:00') $time='';
				                        	?>
				                            {{ $time }}
				                    	</td>
				                    </tr>
								@endforeach
			                </tbody>
			            </table>
			        </div>
			    </div>
				@else
					<i>Det finns inga påminnelser i listan</i>
				@endif
			</div>
        </div>
	</div>
</div>

<script>
	jQuery( document ).ready(function($) {
	});
</script>

