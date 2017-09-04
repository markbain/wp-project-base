<?php

/**
 * Generic Open Wrapper
 */
if ( ! function_exists( 'baindesign324_generic_wrapper_open' ) ) :
	function baindesign324_generic_wrapper_open( ) {
		echo '<div class="section"><div class="container">';
	}
endif;

/**
 * Generic Close Wrapper
 */
if ( ! function_exists( 'baindesign324_generic_wrapper_close' ) ) :
	function baindesign324_generic_wrapper_close( ) {
		echo '</div></div>';
	}
endif;


/**
 * baindesign324_sitewrapper_open
 */
if ( ! function_exists( 'baindesign324_sitewrapper_open' ) ) :
	function baindesign324_sitewrapper_open() {
		# This exists for the MMenu off-canvas menu
		echo '<div id="site-wrapper">';
	}
endif;

/**
 * baindesign324_sitewrapper_close
 */
if ( ! function_exists( 'baindesign324_sitewrapper_close' ) ) :
	function baindesign324_sitewrapper_close() {
		# This exists for the MMenu off-canvas menu
		echo '</div><!-- #site-wrapper -->';
	}
endif;

/**
 * Preheader Open Wrapper
 */
if ( ! function_exists( 'baindesign324_pre_header_wrapper_open' ) ) :
	function baindesign324_pre_header_wrapper_open( ) {
		echo '<header id="preheader" class="section"><div class="container">';
	}
endif;

/**
 * Preheader Close Wrapper
 */
if ( ! function_exists( 'baindesign324_pre_header_wrapper_close' ) ) :
	function baindesign324_pre_header_wrapper_close( ) {
		echo '</div></header>';
	}
endif;

/**
 * Header Top Open Wrapper
 */
if ( ! function_exists( 'baindesign324_header_top_wrapper_open' ) ) :
	function baindesign324_header_top_wrapper_open( ) {
		echo '<header id="masthead" class="site-header section" role="banner"><div class="container">';
	}
endif;

/**
 * Header Top Close Wrapper
 */
if ( ! function_exists( 'baindesign324_header_top_wrapper_close' ) ) :
	function baindesign324_header_top_wrapper_close( ) {
		echo '</div></header>';
	}
endif;

/**
 * Header Bottom Open Wrapper
 */
if ( ! function_exists( 'baindesign324_header_bottom_wrapper_open' ) ) :
	function baindesign324_header_bottom_wrapper_open( ) {
		echo '<header id="header-bottom" class="section"><div class="container">';
	}
endif;

/**
 * Header Bottom Close Wrapper
 */
if ( ! function_exists( 'baindesign324_header_bottom_wrapper_close' ) ) :
	function baindesign324_header_bottom_wrapper_close( ) {
		echo '</div></header>';
	}
endif;

/**
 * Page Intro Open Wrapper
 */
if ( ! function_exists( 'baindesign324_page_intro_wrapper_open' ) ) :
	function baindesign324_page_intro_wrapper_open( ) {
		echo '<div id="post-header" class="section"><div class="container">';
	}
endif;

/**
 * Article Meta Open Wrapper
 */
if ( ! function_exists( 'baindesign324_article_meta_wrapper_open' ) ) :
	function baindesign324_article_meta_wrapper_open( ) {
		echo '<div class="meta section"><div class="container">';
	}
endif;

/**
 * Featured Post Open Wrapper
 */
if ( ! function_exists( 'baindesign324_featured_post_wrapper_open' ) ) :
	function baindesign324_featured_post_wrapper_open( ) {
		echo '<div class="featured-post section"><div class="container">';
	}
endif;

/**
 * Pre-comments Open Wrapper
 */
if ( ! function_exists( 'baindesign324_pre_comments_wrapper_open' ) ) :
	function baindesign324_pre_comments_wrapper_open( ) {
		echo '<div class="pre-comments section"><div class="container">';
	}
endif;