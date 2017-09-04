<?php

/***
 * Woocommerce
 */

// Declare WooCommerce support
function baindesign324_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'baindesign324_woocommerce_support' );

/***
 * Remove reviews from products
 */
function wcs_woo_remove_reviews_tab($tabs) {
  unset($tabs['reviews']);
  return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );

/***
 * Remove main editor from products
 */
function remove_product_editor() {
  remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'remove_product_editor' );

/**
 * Woocommerce Single Product Page
 */

add_action( 'woocommerce_after_single_product_summary', 'baindesign324_latest_blog_posts', 5 );

function baindesign324_remove_woocommerce_actions() {

	/** 
	 * Global
	 **/

	// Remove breadcrumbs
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
	
	// Remove sidebar 	
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

    /** 
     * Single
     **/

    // Remove tabs
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

	/** 
	 * Archive
	 **/

	// Remove results count
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

    // Remove ordering
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

	/** 
	 * Archive -- Content
	 **/

	// Remove results count
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

    // Remove ordering
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

    // Remove Add to Cart
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

}

add_action('init', 'baindesign324_remove_woocommerce_actions' );