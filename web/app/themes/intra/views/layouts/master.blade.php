<!DOCTYPE html>
<html> 

    <head>
    	@include('views.parts.head')
    </head>

    <body>

		@include('views.parts.header')

		<div class="container">
			<div class="row">
				<div class="col-md-8">
			        @yield('main')
			    </div>
				<div class="col-md-4">
			        @include('views.layouts.sidebar')
			    </div>
	        </div>
        </div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>

	    @if(!is_user_logged_in())
	      @include('views.modals.login')
	      @include('views.modals.register')
	      @include('views.modals.forgot')
	    @endif

		@include('views.parts.footer')

		@include('views.parts.scripts')

        @yield('custom_scripts')

    </body>

</html>