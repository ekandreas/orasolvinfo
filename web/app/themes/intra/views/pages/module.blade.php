@extends('views.layouts.module')

@section('main')

	<p>&nbsp;</p>
	<p>&nbsp;</p>

	@if( current_user_can('edit_post') )
		@include( rtrim( papi_get_page_type_template(get_the_ID()), '.php' ), ['module'=>$post] )
	@else
		<?php
			wp_redirect('/');
			die;
		?>
		Du har inte behörighet till denna sida!
	@endif

@endsection