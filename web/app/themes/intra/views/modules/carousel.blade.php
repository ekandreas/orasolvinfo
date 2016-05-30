<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    @if( $module->carousel )
    	@foreach( $module->carousel as $key => $item )
  	    <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" <?php if(!$key) echo 'class="active"'; ?>></li>
    	@endforeach
    @endif
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    @if( $module->carousel )
    	@foreach( $module->carousel as $key => $item )
  	    <div class="item <?php if(!$key) echo 'active'; ?>">
      	<a href="#">
  	      <img src="{{ $item['image']->url }}" alt="..." class="" style="width:100%;">
  	      <div class="carousel-caption">
  	        ...
  	      </div>
  	    </a>
  	    </div>
    	@endforeach
    @endif

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">{{ __('Föregående','intra' ) }}</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">{{ __('Nästa','intra' ) }}</span>
  </a>

</div>


