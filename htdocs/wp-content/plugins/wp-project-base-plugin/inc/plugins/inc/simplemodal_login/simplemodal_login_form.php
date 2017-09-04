<?php

add_filter('simplemodal_login_form', 'mbdmaster324_login_form');
function mbdmaster324_login_form($form) {
  $users_can_register = get_option('users_can_register') ? true : false;
  $options = get_option('simplemodal_login_options');

  $output = sprintf('
<form name="loginform" id="loginform" action="%s" method="post">
  <div class="title">%s</div>

  <div class="simplemodal-login-fields">
  <p>
    <label>%s<br />
    <input type="text" name="log" class="user_login input" value="" size="20" tabindex="10" /></label>
  </p>
  <p>
    <label>%s<br />
    <input type="password" name="pwd" class="user_pass input" value="" size="20" tabindex="20" /></label>
  </p>',
    site_url('wp-login.php', 'login_post'),
    __('Or log in with email', '_criadoemsampa_plugin'),
    __('Username', '_criadoemsampa_plugin'),
    __('Password', '_criadoemsampa_plugin')
  );

  ob_start();

  do_action('login_form');
  $output .= ob_get_clean();

  $output .= sprintf('
  <p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" class="rememberme" value="forever" tabindex="90" />%s</label></p>
  <p class="submit">
    <input type="submit" name="wp-submit" value="%s" tabindex="100" />
    <input type="button" class="simplemodal-close" value="%s" tabindex="101" />
    <input type="hidden" name="testcookie" value="1" />
  </p>
  <p class="nav">',
    __(' Remember Me', '_criadoemsampa_plugin'),
    __('Log In', '_criadoemsampa_plugin'),
    __('Cancel', '_criadoemsampa_plugin')
  );

  if ($users_can_register && $options['registration']) {
    $output .= sprintf('<a class="simplemodal-register" href="%s">%s</a>', 
      site_url('wp-login.php?action=register', 'login'), 
      __('Register', '_criadoemsampa_plugin')
    );
  }

  if (($users_can_register && $options['registration']) && $options['reset']) {
    $output .= ' | ';
  }

  if ($options['reset']) {
    $output .= sprintf('<a class="simplemodal-forgotpw" href="%s" title="%s">%s</a>',
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