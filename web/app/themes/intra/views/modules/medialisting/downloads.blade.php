@foreach($medialist as $media)
	<p>
		<?php
			$meta = wp_get_attachment_metadata($media->ID);
			$size = round(filesize(get_attached_file($media->ID)) / 1024);
			if($size>1024) {
				$size = round($size/1024,1) . 'MB';
			} else {
				$size = $size . 'kB';
			}
		?>
		<a href="{{ $media->guid }}" download>
			@if($media->post_mime_type=='image/png' || $media->post_mime_type=='image/jpg' || $media->post_mime_type=='image/gif' || $media->post_mime_type=='image/jpeg')
				<i class="fa fa-file-image-o" aria-hidden="true"></i>
			@elseif($media->post_mime_type=='application/pdf' || $media->post_mime_type=='image/jpg' || $media->post_mime_type=='image/gif' || $media->post_mime_type=='image/jpeg')
				<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
			@else
				<i class="fa fa-file" aria-hidden="true"></i>
			@endif
			{{ $media->post_title }} ({{ $size }}) <i class="fa fa-download" aria-hidden="true"></i>
		</a>
	</p>
@endforeach
