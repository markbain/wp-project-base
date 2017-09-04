<?php
/**
 * _mbbasetheme functions and definitions
 *
 * @package _mbbasetheme
 */



/****************************************
Theme Setup
*****************************************/

/**
 * Theme variables
 */
require get_template_directory() . '/functions/theme-vars.php';

/**
 * Theme initialization
 */
require get_template_directory() . '/functions/init.php';

/**
 * Custom theme functions
 */
require get_template_directory() . '/theme-functions/theme-functions.php';

/**
 * Custom theme functions definited in /functions/init.php
 */
require get_template_directory() . '/functions/theme-functions.php';

/**
 * Load theme hooks
 */
require get_template_directory() . '/functions/theme-hooks.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/functions/theme-helpers.php';

/**
 * Custom comment.
 */
require get_template_directory() . '/functions/inc/custom-comment.php';

/**
 * Custom meta.
 */
require get_template_directory() . '/functions/inc/custom-meta.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/functions/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/functions/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/functions/customizer/customizer.php';

/**
 * Load bundled Advanced Custom Fields plugin.
 */
require get_template_directory() . '/functions/inc/acf-bundled.php';


/****************************************
Require Plugins
*****************************************/

require get_template_directory() . '/functions/class-tgm-plugin-activation.php';
require get_template_directory() . '/functions/theme-require-plugins.php';

add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
add_action( 'admin_init', 'mb_add_post_type_caps' );
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}
