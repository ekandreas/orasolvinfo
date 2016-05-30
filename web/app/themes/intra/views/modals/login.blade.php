<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="false">
  <div class="modal-dialog modal-small modal-register">
    <div class="modal-content">
      <div class="modal-header no-border-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h6 class="text-muted">Inloggning</h6>
        <h3 class="modal-title">Orasolvs intranät</h3>
        <p>Logga in med ditt konto</p>
      </div>
      <div class="modal-body text-center">

        <div v-show="error" class="alert alert-danger">@{{{ error }}}</div>
        <div v-show="success" class="alert alert-success">@{{{ success }}}</div>
        <div v-show="warning" class="alert alert-warning"><div class="uil-reload-css reload-small" style=""><div></div></div>&nbsp;&nbsp;@{{{ warning }}}</div>

        <div class="form-group">
            <label>E-postadress</label>
      	<input v-model="email" v-on:keyup.enter="login" type="text" value="" placeholder="E-postadress" class="form-control border-input" />
      	</div>
      	 <div class="form-group">
              <label>Lösenord</label>
        	<input v-model="password" v-on:keyup.enter="login" type="password" value="" placeholder="Lösenord" class="form-control border-input" />
      	</div>
        <button v-on:click="login" class="btn btn-fill btn-block"> Logga in</button>
        <input type="hidden" name="nonce" v-model="nonce" />
        <input type="hidden" name="action" value="wp_login" />

      </div>
      <div class="modal-footer no-border-footer">
          <strong><a href="{{ get_permalink( papi_get_option('register_page')->ID ) }}"><strong>Vill du skapa ett konto?</strong></a></strong>
      </div>
    </div>
  </div>
</div>
<!-- end login modal -->