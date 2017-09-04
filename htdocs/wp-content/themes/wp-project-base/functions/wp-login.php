<?php

function digital_framework_login_scripts() {
	

}
add_action( 'login_enqueue_scripts', 'digital_framework_login_scripts', 1 );

function digital_framework_login_styles() {

	wp_enqueue_script( 'jquery' );

    wp_enqueue_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/style-custom-login.css' );

}
add_action( 'login_enqueue_scripts', 'digital_framework_login_styles', 10 );


function my_login_logo_url() {
	return get_bloginfo( 'url' );
}

add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Your Site Name and Info';
}

// add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function mbdmaster324_custom_login_logo_url() {
	return get_bloginfo( 'url' );
}

function mbdmaster324_custom_login_logo_url_title() {
	return get_bloginfo( 'name' );
}

add_filter( 'login_message', 'digital_framework_login_message' );

function digital_framework_login_message() {
	$message = '';
	$message .= '<div id="login-logo"></div>';
	
	$message .= '<div class="login-message login-default-message"><h3>Log In/Register</h3><p>If you already have an account, please log in using the form below. Alternatively, connect an existing account.</p></div>';
	
	$message .= '<div class="login-message register-message"><h3>Register to access courses</h3><p>In order to get full access to the courses on this site, please register using the form below</p></div>';
	
	$message .= '<div class="login-message lostpassword-message"><h3>Lost Password?</h3><p>Complete the form below and we\'ll send you instructions for setting a new one.</p></div>';

	$message .= '<div class="login-message rp-message"><h3>New Password</h3>';
	$message .=	'<p>Here is a suggested strong new password, or you can enter your own.</p><p>Click "Save Password" when you are happy with your new password.</p></div>';

	$message .= '<div class="login-message resetpass-message"><h3>Success</h3><p>Your new password has been saved. Please log in below.</p></div>';

	$message .= '<div class="resetpass-login-form">' . wp_login_form( array( 'echo' => false ) ) . '</div>';

	return $message;
}

// Customise the buttons

add_action( 'resetpass_form', 'digital_framework_resetpass_form');
function digital_framework_resetpass_form() { ?>

	<script type="text/javascript">
	   jQuery( document ).ready(function() {                 
	     jQuery('#resetpassform input#wp-submit').val("Save Password");
	   });
	</script>
	<?php
}

add_action( 'lostpassword_form', 'digital_framework_lostpassword_form');
function digital_framework_lostpassword_form() { ?>

	<script type="text/javascript">
	   jQuery( document ).ready(function() {                  
	      jQuery('#lostpasswordform input#wp-submit').val("Get My New Password");
	   });
	</script>
	<?php
}

/**
 * Custom body classes for the login page
 */

 function bain_login_classes( $classes ) {
 	$classes[] = 'mb-design';
 	return $classes;
 }
 add_filter( 'login_body_class', 'bain_login_classes' );