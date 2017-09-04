<?php
/**
 * Related Custom Posts
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_related_custom_posts' ) ) :

/**
 * Show a set of related posts based on a custom taxonomy
 */

function mbdmaster_related_custom_posts() {
	global $post;  
 	$orig_post = $post;  
	$custom_taxterms = wp_get_object_terms( $post->ID, 'tag', array('fields' => 'ids') ); 
	$args = array(
	'post_type' => 'work',
	'post_status' => 'publish',
	'posts_per_page' => 3, // you may edit this number
	'orderby' => 'rand',
	'tax_query' => array(
	    array(
	        'taxonomy' => 'tag',
	        'field' => 'id',
	        'terms' => $custom_taxterms
	    )
	),
	'post__not_in' => array ($post->ID),
	); 
	
	$my_query = new wp_query( $args );

	if  ( $my_query->have_posts() ) {  
		while( $my_query->have_posts() ) : $my_query->the_post();
		    	get_template_part('content', 'archive' ); 
		endwhile;
		$post = $orig_post; wp_reset_query(); 
	} else {
		_e( 'Sorry, but there is no related work at this time.', '_mbdmaster' );
	}	
}
endif;