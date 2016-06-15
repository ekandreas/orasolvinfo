@foreach($medialist as $media)
	<p class="img-thumbnail">
		<img src="{{ $media->guid }}" class="img-responsive" />
		{{ get_post_excerpt($media->ID) }}
	</p>
@endforeach
