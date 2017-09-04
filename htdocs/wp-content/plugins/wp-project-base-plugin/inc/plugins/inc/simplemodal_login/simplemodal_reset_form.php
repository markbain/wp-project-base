<?php

add_filter('simplemodal_reset_form', 'mytheme_reset_form');
function mytheme_reset_form($form) {
	$users_can_register = get_option('users_can_register') ? true : false;
	$options = get_option('simplemodal_login_options');

	$output = sprintf('
	<form name="lostpasswordform" id="lostpasswordform" action="%s" method="post">
		<div class="title">%s</div>
		<div class="simplemodal-login-fields">
		<p>
			<label>%s<br />
			<input type="text" name="user_login" class="user_login input" value="" size="20" tabindex="10" /></label>
		</p>',
		site_url('wp-login.php?action=lostpassword', 'login_post'),
		__('Get a new password', '_criadoemsampa_plugin'),
		__('Username or E-mail:', '_criadoemsampa_plugin')
	);

	ob_start();
	do_action('lostpassword_form');
	$output .= ob_get_clean();

	$output .= sprintf('
		<p class="submit">
			<input type="submit" name="wp-submit" value="%s" tabindex="100" />
			<input type="button" class="simplemodal-close" value="%s" tabindex="101" />
		</p>
		<p class="nav">
			<a class="simplemodal-login" href="%s">%s</a>',
				__('Get New Password', '_criadoemsampa_plugin'),
				__('Cancel', 'simplemodal-login'),
				site_url('wp-login.php', 'login'),
				__('Log in ', '_criadoemsampa_plugin')
	);

	if ($users_can_register && $options['registration']) {
		$output .= sprintf('| <a class="simplemodal-register" href="%s">%s</a>', site_url('wp-login.php?action=register', 'login'), __('Register', '_criadoemsampa_plugin'));
	}

	$output .= '
		</p>
		</div>
		<div class="simplemodal-login-activity" style="display:none;"></div>
	</form>';

	return $output;
}