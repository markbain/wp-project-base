<?php

/**
 * Enqueue scripts
 */
function baindesign324_scripts_mmenu() {
	wp_enqueue_style( 'mbdmaster324-mmenu-style', get_stylesheet_directory_uri() . '/assets/css/vendor/mmenu/jquery.mmenu.css' );
	wp_enqueue_style( 'mbdmaster324-mmenu-dim-style', get_stylesheet_directory_uri() . '/assets/css/vendor/mmenu/jquery.mmenu.pagedim.css' );
	wp_enqueue_style( 'mbdmaster324-mmenu-position-style', get_stylesheet_directory_uri() . '/assets/css/vendor/mmenu/jquery.mmenu.positioning.css' );
}