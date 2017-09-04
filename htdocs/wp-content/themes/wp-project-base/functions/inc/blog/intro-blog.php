<?php

/**
 * Pull title and content from designated posts page.
 * Used as an intro to the blog archive page.
 */

if ( ! function_exists( 'baindesign324_blog_intro' ) ) :
	function baindesign324_blog_intro() {
	
		/**
		 * To pull content from the designated page, we need
		 * to first establish the page ID of the blog page. 
		 **/

		$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : get_the_ID );
		
		// get current page we are on. If not set we can assume we are on page 1.
		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		// WP_Query arguments
			$args = array (
				'post_type' => 'page',
				'p' => $page_id
			);
		// The Query
			$query1 = new WP_Query( $args );

		// The Loop
			while ( $query1->have_posts() ) {
				$query1->the_post();
				echo '<h1 class="h2">';
				echo the_title();
				echo '</h1>';

				if( 1 == $paged ) {
					echo the_content();
				}
			}

		/* Restore original Post Data 
		 * NB: Because we are using new WP_Query we aren't stomping on the 
		 * original $wp_query and it does not need to be reset with 
		 * wp_reset_query(). We just need to set the post data back up with
		 * wp_reset_postdata().
		 */
		wp_reset_postdata();
	}
endif;