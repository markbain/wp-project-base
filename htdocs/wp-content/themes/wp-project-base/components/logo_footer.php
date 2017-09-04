<?php

/*
 * Show site logo
 */

$footer_logo_desktop = get_theme_mod( 'mbdmaster_footer_logo_desktop' );
$footer_logo_mobile = get_theme_mod( 'mbdmaster_footer_logo_mobile' );

if ( $footer_logo_desktop || $footer_logo_mobile ) {
	// There's a footer logo... Let's do this!
	$content = '<div id="footer-logo">';
	$content .= '<img src="';			
	if ( $footer_logo_desktop && !$footer_logo_mobile ) {
		// No mobile-specific logo --> show desktop version on all devices.
		// No class required
		$content .= $footer_logo_desktop . '" id="logo">';
	} else {
		// Add classes for media queries to do their magic!
		$content .= $footer_logo_mobile . '" id="logo" class="show-on-mobile-only">';
		$content .= '<img src="' . $footer_logo_desktop . '" id="logo" class="show-on-desktop-only">';
	} 
		$content .= '</div><!-- #footer-logo -->';
		print $content;
		
} 