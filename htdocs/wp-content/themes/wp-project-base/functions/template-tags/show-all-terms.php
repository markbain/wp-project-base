<?php

/**
 * Show all terms
 *
 * Loaded via /functions/inc/template-tags.php
 *
 */

if ( ! function_exists( 'mbdmaster_show_all_terms' ) ) :
/**
 * Show all the taxonomy terms availabel, with links to archive pages
 */

function mbdmaster_show_all_terms( $tax_term ) {
	
	$args = array( 'hide_empty=0' );
	$terms = get_terms( $tax_term, $args );

	if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
	    $count = count($terms);
	    $i=0;
	    $term_list = '<ul class="menu all-tax-terms">';
	    foreach ($terms as $term) {
	        $i++;
	    	$term_list .= '<li class="menu-icon icon-' . $term->slug . '"><a href="' . get_term_link( $term ) . '" title="' . sprintf(__('View all post filed under %s', '_criadoemsampa'), $term->name) . '">' . $term->name . '</a></li>';
	    	if ($count != $i) {
	            $term_list .= '';
	        }
	        else {
	            $term_list .= '</ul>';
	        }
	    }
	    echo $term_list;
	}
}
endif;