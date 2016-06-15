<div id="mediaCarousel-{{$module->id}}" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	@foreach($medialist as $key => $media)
	    <li data-target="#mediaCarousel-{{$module->id}}" data-slide-to="{{ $key }}" <?= $key==0 ? 'class="active"' : ''?>></li>
	@endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

	@foreach($medialist as $key => $media)
	    <div class="img-thumbnail item <?= $key==0 ? 'active' : ''?>">
	      <img src="{{$media->guid}}" alt="{{$media->post_title}}">
	    </div>
	@endforeach

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Föregående</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Nästa</span>
  </a>
</div>

