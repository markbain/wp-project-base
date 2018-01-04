<?php 
	
	// Get the post type that we're dealing with
	$post_type = get_post_type();

	// Set up the excerpt based on the post type
	if ( in_array( $post_type, array('book','talk','project','article')) ) {
		$post_excerpt = get_the_excerpt();
	} else {
		$post_excerpt = '';
	}

	// Set up the post link
	// Internal or external
	$post_link_internal = get_the_permalink(); // Get the internal link
	$post_link_external_custom_field = $post_type . '_url'; // Build external link custom field name
	$post_link_external = get_field( $post_link_external_custom_field ); // Get the external link

	$is_featured_custom_field = $post_type . '_featured';
	$is_featured = get_field( $is_featured_custom_field );

	if ( ( $is_featured == TRUE || $post_type == 'book' ) ) {
		$post_link = $post_link_internal; // Featured posts always link internal
	} else {
		$post_link = $post_link_external;
	}




	// return the URL to the post image
	$thumb_id = get_post_thumbnail_id();
	$size = '';
	$link = '';
	$image_url_array = wp_get_attachment_image_src( $thumb_id, 'latest-post', FALSE ); 
	$media_object_media_content = '';

	// Get the thumbnail
	if ( get_field( 'book_image') ) {
		$image_url_array = get_field( 'book_image');
		// print_r($image_url_array);
		$image_url = $image_url_array['url'];
	} elseif ( has_post_thumbnail() ) {
		$image_url = $image_url_array[0];
	} else {
		$image_url = 'http://placehold.it/428x285';
	}
	
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'media-object' ); ?>>
	<!-- Post Image -->
	<?php
		// Only show the media if it exists 
		if ( $image_url ) {
			$media_object_media_content = '<div class="media-object-media match-height">';
			$media_object_media_content .= '<a href="' . $post_link . '">';						
			$media_object_media_content .=	'<img src="' . $image_url . '" class="mobile-image">';
			$media_object_media_content .= '</a></div><!-- .media-object-media -->';
			$media_object_media_content .= '<article class="media-object-content match-height">';						
		} else {
			$media_object_media_content .= '<article class="media-object-content" style="width: 100%;">';
		}
		echo $media_object_media_content;
	
	/**
	 *	Talk pre-header 
	 **/
	if ( $post_type == 'talk' ) {
		$client = get_field( 'talk_client' );
		echo '<div class="talk-preheader">' . $client . '</div>';
	}
	
	/**
	 * Post Header
	 */

	$post_title = get_the_title();

	$content = '';
	$content .= '<div class="entry-title">';
	if ( $post_link ) {
		$content .= '<a href="';
		$content .= $post_link;
		$content .= '" title="';
		$content .= $post_title;
		$content .= '"><span>';
	}
	$content .= $post_title;
	if ( $post_link ) {
		$content .= '</span></a>';
	}
	$content .= '</div>';
	echo $content;

	/**
	 *	Post Subheader 
	 **/
	baindesign324_page_subheader(); ?>
		
		<!-- Post Excerpt -->
		<?php echo '<div class="post_excerpt">'. $post_excerpt . '</div>'; ?>

		<!-- External Links -->
		<?php baindesign324_page_external_links(); ?>

		<footer class="read-more">
			<a href="<?php echo $post_link ?>" title="<?php _e( 'Go to', '_mbdmaster' ); ?> <?php echo $post_title ?>">
				<span class=""><?php _e( 'Read more', '_mbdmaster' ); ?> </span><i class="fa"></i>
			</a>
		</footer>
	</article><!-- .media-object-content -->
</div><!-- .media-object -->


<?php

// 1. Use get_the_date to prevent same-day posts not showing date.