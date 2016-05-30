<?php
	$template = papi_get_page_type_template(get_the_ID());
	$template = str_replace('/', '.', $template);
	$template = str_replace('.php', '', $template);
	switch ($template) {
		case 'views.pages.standard':
			bladerunner('views.pages.standard');
			break;
		default:
			bladerunner('views.pages.page');
			break;
	}
