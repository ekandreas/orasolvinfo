<div class="modal fade" id="registerModal">
  <div class="header"><?=__('Register new account','newsflow')?></div>
  <div class="content">
    <p>
    	{!! papi_get_option('message_register') !!}
    </p>

    <div v-show="success" class="ui positive message" role="alert">
        @{{{ success }}}
    </div>

    <div v-show="warning" class="ui warning message" role="alert">
        @{{{ warning }}}
    </div>

    <div v-show="error" class="ui negative message" role="alert">
        @{{{ error }}}
    </div>

	<form class="ui form" method="post" action="#">

		<div id="registerLoader" class="ui disabled dimmer">
			<div class="ui loader"></div>
		</div>
		
		<div class="field">
			<label><?=__('Name','newsflow')?></label>
			<input v-model="display_name" v-on:keyup.enter="register" type="text" placeholder="<?=__('First name and last name, eg: John Doe')?>">
		</div>

		<div class="field">
			<label><?=__('Team name','newsflow')?></label>
			<input v-model="workplace" v-on:keyup.enter="register" type="text" placeholder="<?=__('The name of the team working with Newsflow')?>">
		</div>

		<div class="field">
			<label><?=__('Email Address','newsflow')?></label>
			<input v-model="email" v-on:keyup.enter="register" type="text" placeholder="john@doe.com">
		</div>

		<div class="field">
			<label><?=__('Password','newsflow')?></label>
			<input v-model="password" v-on:keyup.enter="register" type="password" name="password" placeholder="<?=__('Set your own password, min 6 chars and/or letters')?>">
		</div>

		<button v-on:click="register" class="ui primary button" type="button"><?=__('Register','newsflow')?></button>
	</form>

  </div>
  <div class="actions">
    <div class="ui black basic cancel button"><i class="fa fa-times"></i>&nbsp;<?=__('Close','newsflow')?></div>
  </div>
</div>
