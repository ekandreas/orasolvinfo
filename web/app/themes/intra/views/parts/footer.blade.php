<div class="footer">
  <div class="container">
    <div class="clearfix">
      <div class="footer-logo"><a href="/">{{ bloginfo('name') }}</a></div>
      <dl class="footer-nav">
        <dt class="nav-title">Meta</dt>
        <dd class="nav-item"><?=wp_loginout()?></dd>
        <dd class="nav-item"><a href="<?=get_edit_user_link()?>">Profil</a></dd>
        <dd class="nav-item"><a href="<?=wp_lostpassword_url()?>">Glömt lösenord</a></dd>
        <dd class="nav-item"><a href="/wp/wp-admin">WordPress Admin</a></dd>
        <dd class="nav-item"><a href="mailto:info@orasolv.se">Hjälp</a></dd>
      </dl>
      <dl class="footer-nav">
        <dt class="nav-title">Länkgrupp 2</dt>
        <dd class="nav-item"><a href="/">Praesent</a></dd>
        <dd class="nav-item"><a href="/">Commodo</a></dd>
        <dd class="nav-item"><a href="/">Cursus</a></dd>
      </dl>
      <dl class="footer-nav">
        <dt class="nav-title">Länkgrupp 3</dt>
        <dd class="nav-item"><a href="/">Magna</a></dd>
        <dd class="nav-item"><a href="/">Vel scelerisque</a></dd>
        <dd class="nav-item"><a href="/">Scelerisque</a></dd>
        <dd class="nav-item"><a href="/">Consectetur</a></dd>
      </dl>
      <dl class="footer-nav">
        <dt class="nav-title">Länkgrupp 4</dt>
        <dd class="nav-item"><a href="/">Aenean eu</a></dd>
        <dd class="nav-item"><a href="/">Leo</a></dd>
        <dd class="nav-item"><a href="/">Pellentesque</a></dd>
      </dl>
    </div>
    <div class="footer-copyright text-center">Orasolv intranät</div>
  </div>
</div>


<?php wp_footer(); ?>