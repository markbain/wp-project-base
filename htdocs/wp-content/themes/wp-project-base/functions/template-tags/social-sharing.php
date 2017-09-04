<?php
/**
 * Social sharing
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_social_sharing' ) ) :

/**
 * Show a set of related posts based on tags
 */

function mbdmaster_social_sharing() {
	global $wp_query;
	$postid = $wp_query->post->ID;
	
	// vars
	$my_title = get_the_title();
	$my_link = urlencode( get_permalink() );
	$my_image = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), '' );
	echo '<div id="social-sharing">';
	echo '<p class="social-title">Share this</p>';
	echo '<ul class="social-media-links social-media--share nobullets">';

		// Twitter
		echo '<li><a href="http://twitter.com/share?url=' . $my_link . '&text=' . $my_title . '" class="gtm_share_twitter js-link-popup twitter"><span class="fa"><i class="fa fa-twitter"></i></span><span class="visuallyhidden">Twitter</span></a></li>';

		// Facebook
		echo '<li><a href="http://www.facebook.com/sharer.php?u=' . $my_link . '&t=' . $my_title . '#" class="gtm_share_facebook js-link-popup facebook"><span class="fa"><i class="fa fa-facebook"></i></span><span class="visuallyhidden">Facebook</span></a></li>';

		// 
		echo '<li><a href="http://www.pinterest.com/pin/create/button/?url=' . $my_link . '&media=' . $my_image[0] . '&description=' . $my_title . '" class="gtm_share_pinterest js-link-popup pinterest"><span class="fa"><i class="fa fa-pinterest"></i></span><span class="visuallyhidden">LinkedIn</span></a></li>';

		// Google Plus
		echo '<li><a href="https://apis.google.com/_/+1/fastbutton?usegapi=1&size=large&hl=en&url=' . $my_link . '"" class="gtm_share_googleplus js-link-popup googleplus"><span class="fa"><i class="fa fa-google"></i></span><span class="visuallyhidden">GooglePlus</span></a></li>';

	echo '</ul>';
	echo '</div><!-- .section -->';

	wp_reset_query();

}
endif;