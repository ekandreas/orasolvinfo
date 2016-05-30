@extends('views.layouts.master')

@section('main')

	@if( have_posts() )
		@while( have_posts() )
			{{ the_post() }}

			@if( has_post_thumbnail() )
				{{ the_post_thumbnail('full',['class'=>"img-responsive"]) }}
			@endif

			<h1>{{ the_title() }}</h1>
			{{ the_content() }}

			@include( 'views.parts.edit_post' )

		@endwhile
	@endif

@endsection