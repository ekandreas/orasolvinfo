@extends('views.layouts.master')

@section('main')

	@if( have_posts() )
		@while( have_posts() )
			{{ the_post() }}

			@if( has_post_thumbnail() )
				{{ the_post_thumbnail('full',['class'=>"img-responsive"]) }}
			@endif

			<h1>{{ the_title() }}</h1>
			<p>{{ the_content() }}</p>

		@endwhile
	@endif

	@include( 'views.parts.modules', [ 'slug' => 'modules_container_row1_col1' ] )

@endsection
