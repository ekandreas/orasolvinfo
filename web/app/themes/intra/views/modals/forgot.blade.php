<div class="modal fade" id="forgotModal">
  <div class="header"><?=__('Forgotten password','newsflow')?></div>
  <div class="content">
    <p>
		{!! papi_get_option('message_forgot') !!}    	
    </p>

    <div v-show="success" class="ui positive message" role="alert">
        @{{{ success }}}
    </div>

	<div v-show="warning" class="ui warning message" role="alert">
		<div class="ui active small inline loader"></div>&nbsp;@{{{ warning }}}  
	</div>

    <div v-show="error" class="ui negative message" role="alert">
        @{{{ error }}}
    </div>

	<form class="ui form" method="post" action="#">
	  <div class="field">
	    <label><?=__('Email Address','newsflow')?></label>
	    <input v-model="email" v-on:keyup.enter="forgot" type="text" name="email" placeholder="john@doe.com"/>
	  </div>
	  <button v-on:click="forgot" class="ui primary button" type="button">Login</button>
	</form>


  </div>
  <div class="actions">
    <div class="ui black basic cancel button"><i class="fa fa-times"></i>&nbsp;<?=__('Close','newsflow')?></div>
  </div>
</div>
