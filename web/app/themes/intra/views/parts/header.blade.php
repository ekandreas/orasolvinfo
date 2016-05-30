
<div class="header">

  <div class="container">

  	<nav class="navbar navbar-default" role="navigation">

      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="{{ asset_path('images/orasolv_303x85_white.png') }}" alt="logo" /></a>
        </div>  

        <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">

          <?php
              if( has_nav_menu('primary_navigation') ) {

                wp_nav_menu( array(
                    'menu'              => 'primary_navigation',
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 4,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav yamm',
                    'fallback_cb'       => 'Yamm_Fw_Nav_Walker_menu_fallback',
                    'walker'            => new Yamm_Fw_Nav_Walker())
                );

              }
          ?>

          <!--form class="navbar-form navbar-right" role="search">
              <div class="form-search search-only">
                <i class="search-icon glyphicon glyphicon-search"></i>
                <input name="s" type="text" class="form-control search-query">
              </div>
          </form-->

        </div>

      </div>

    </nav>

  </div>

</div>
