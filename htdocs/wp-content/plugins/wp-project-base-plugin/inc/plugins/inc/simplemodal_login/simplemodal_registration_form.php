<?php

add_filter('simplemodal_registration_form', 'mytheme_registration_form');
function mytheme_registration_form($form) {
  $options = get_option('simplemodal_login_options');

  $output = sprintf('
<form name="registerform" id="registerform" action="%s" method="post">
  <div class="title">%s</div>
  <div class="simplemodal-login-fields">
  <p>
    <label>%s<br />
    <input type="text" name="user_login" class="user_login input" value="" size="20" tabindex="10" /></label>
  </p>
  <p>
    <label>%s<br />
    <input type="text" name="user_email" class="user_email input" value="" size="25" tabindex="20" /></label>
  </p>',
    site_url('wp-login.php?action=register', 'login_post'),
    __('Or register with email', '_criadoemsampa_plugin'),
    __('Username', '_criadoemsampa_plugin'),
    __('E-mail', '_criadoemsampa_plugin')
  );

  ob_start();
  do_action('register_form');
  $output .= ob_get_clean();

  $output .= sprintf('
  <p class="reg_passmail">%s</p>
  <p class="submit">
    <input type="submit" name="wp-submit" value="%s" tabindex="100" />
    <input type="button" class="simplemodal-close" value="%s" tabindex="101" />
  </p>
  <p class="nav">
    <a class="simplemodal-login" href="%s">%s</a>',
    __('A password will be e-mailed to you.', '_criadoemsampa_plugin'),
    __('Register', '_criadoemsampa_plugin'),
    __('Cancel', '_criadoemsampa_plugin'),
    site_url('wp-login.php', 'login'),
    __('Log in', '_criadoemsampa_plugin')
  );

  if ($options['reset']) {
    $output .= sprintf(' | <a class="simplemodal-forgotpw" href="%s" title="%s">%s</a>',
      site_url('wp-login.php?action=lostpassword', 'login'),
      __('Password Lost and Found', '_criadoemsampa_plugin'),
      __('Lost your password?', '_criadoemsampa_plugin')
    );
  }

  $output .= '
  </p>
  </div>
  <div class="simplemodal-login-activity" style="display:none;"></div>
</form>';

  return $output;
}