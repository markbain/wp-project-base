<?php

/**
 * Theme hooks
 */

// add_action( 'baindesign_head', '' );
// add_action( 'baindesign_after_opening_body_tag', '' );
add_action( 'baindesign_body_top', 'baindesign324_sitewrapper_open', 10 ); // Required for Mmenu!

/**
 * Pre-header
 */
// add_action( 'baindesign_pre_header', 'baindesign324_pre_header_wrapper_open', 10 );
// Your hooks
// add_action( 'baindesign_pre_header', 'baindesign324_pre_header_wrapper_close', 100 );

/**
 * Header Top
 */
add_action( 'baindesign324_header_top', 'baindesign324_header_top_wrapper_open', 10 );
add_action( 'baindesign324_header_top', 'baindesign324_site_branding_title', 20 );
add_action( 'baindesign324_header_top', 'baindesign324_menu_standard', 30 );
add_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle', 40 );

// add_action( 'baindesign324_header_top', 'baindesign324_menu_responsive', 30 );
add_action( 'baindesign324_header_top', 'baindesign324_header_top_wrapper_close', 100 );

/**
 * Header Bottom
 */
// add_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10 );
// add_action( 'baindesign324_header_bottom', 'baindesign324_cover', 20 );
// add_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100 );



// add_action( 'baindesign_post_header', 'baindesign324_cover', 20  );

// add_action( 'baindesign_pre_content', 'baindesign_pre_content' );

// add_action( 'baindesign_content_top', '' );


/**
 * Footer
 */

	// add_action( 'baindesign_pre_colophon', 'baindesign324_form_contact', 10 );
	// add_action( 'baindesign_pre_colophon', 'baindesign324_mailchimp_form', 20 );
	// add_action( 'baindesign_pre_colophon', 'baindesign324_template_mailchimp_compact', 20 );
	// add_action( 'baindesign_pre_colophon', 'baindesign324_footer_sidebar', 30 );


	add_action( 'baindesign324_colophon_top', 'baindesign324_site_info', 10 );
	add_action( 'baindesign324_colophon', 'baindesign324_social_links', 20 );
	// add_action( 'baindesign_colophon', 'baindesign324_footer_logo', 20 );
	// add_action( 'baindesign324_colophon_bottom', 'baindesign324_site_info', 30 );
	// add_action( 'baindesign_post_colophon', '' );
	add_action( 'baindesign_body_bottom', 'baindesign324_sitewrapper_close', 10 );
	add_action( 'baindesign_post_body', 'baindesign324_offcanvas_nav' );

/**
 * Index
 */
	// baindesign_main_before
	add_action( 'baindesign_main_before', 'baindesign_main_before', 10 );

	// baindesign_primary_before
	add_action( 'baindesign_primary_before', 'baindesign324_page_intro_wrapper_open', 10 );
	add_action( 'baindesign_primary_before', 'baindesign324_article_header', 20 );
	add_action( 'baindesign_primary_before', 'baindesign324_generic_wrapper_close', 30 );
	add_action( 'baindesign_primary_before', 'baindesign324_content_secondary', 40 );

	// baindesign_article_top
	// add_action( 'baindesign_article_top', '', 10 );

/**
 * Index - Bottom of article
 */
// add_action( 'baindesign_article_bottom', 'baindesign_article_bottom', 5 );
add_action( 'baindesign_article_bottom', 'baindesign_related_blog_posts', 10 );

/**
 * Index - Pre-comments
 */
add_action( 'baindesign_pre_comments', 'baindesign324_pre_comments_wrapper_open', 10 );
// add_action( 'baindesign_pre_comments', 'baindesign_post_tags', 20 );
add_action( 'baindesign_pre_comments', 'mbdmaster_social_sharing', 30 );
add_action( 'baindesign_pre_comments', 'baindesign324_generic_wrapper_close', 40 );

/**
 * Index - After Main
 */
// add_action( 'baindesign_main_after', 'baindesign_main_after', 10 );

/**
 * Content
 */

add_action( 'baindesign_content_before', 'baindesign_content_before', 5 );
add_action( 'baindesign_content_after', 'baindesign_content_after', 10 );

/**
 * Front
 */

	add_action( 'baindesign_front_page', 'baindesign324_site_intro', 10 );
	add_action( 'baindesign_front_page', 'baindesign324_home_page_sections', 20 );
	// add_action( 'baindesign_front_page', 'baindesign324_homepage_flex_content', 20 );
	// add_action( 'baindesign_front_page', 'baindesign324_latest_blog_posts', 20 );
	// add_action( 'baindesign_front_page', 'baindesign324_template_next_event', 30 );
	// add_action( 'baindesign_front_page', 'baindesign324_featured_cpt_book', 40 );

/**
 * Blog
 */

// add_action( 'baindesign_blog_archive', 'baindesign324_page_intro_wrapper_open', 10 );
// add_action( 'baindesign_blog_archive', 'baindesign324_blog_intro', 20 );
// add_action( 'baindesign_blog_archive', 'baindesign324_generic_wrapper_close', 30 );
// add_action( 'baindesign_blog_archive', 'baindesign324_featured_post_wrapper_open', 40 );
// add_action( 'baindesign_blog_archive', 'baindesign324_featured_post', 50 );
// add_action( 'baindesign_blog_archive', 'baindesign324_generic_wrapper_close', 60 );
// add_action( 'baindesign_blog_archive', 'baindesign324_post_layout_wrapper_open', 70 );
// add_action( 'baindesign_blog_archive', 'baindesign324_offset_query', 80 );
// add_action( 'baindesign_blog_archive', 'baindesign324_post_grid', 90 );
// add_action( 'baindesign_blog_archive', 'baindesign324_generic_wrapper_close', 100 );
// add_action( 'baindesign_blog_archive', 'baindesign324_generic_wrapper_close', 100 );



/**
 * Cover
 */

// add_action( 'baindesign324_cover_top', 'baindesign324_event_date', 10 );
// add_action( 'baindesign324_cover_bottom', 'baindesign324_social_links', 10 );