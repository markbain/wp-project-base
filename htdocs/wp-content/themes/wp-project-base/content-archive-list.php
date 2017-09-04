<?php 
	
	// Get the post type that we're dealing with
	$post_type = get_post_type();

	// Set up the excerpt based on the post type
	$post_excerpt = get_the_excerpt();

	// Set up the external links based on the post type
	if ( ( $post_type == "cpt1" ) && ( have_rows( 'external_links' ) ) ) {

	}

	
	$post_link 		= get_the_permalink();

	// return the URL to the post image
	$thumb_id = get_post_thumbnail_id();
	$size = '';
	$link = '';

	
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'media-object' ); ?>>
					<!-- Post Header -->
					<?php if ( function_exists('baindesign324_page_title')) : ?>
						<div class="entry-title"><?php baindesign324_page_title(); ?></div>
					<?php endif; ?>

					
					<!-- Post Excerpt -->
					<?php echo $post_excerpt; ?>


					<!-- Post Subheader -->
					<?php baindesign324_page_subheader(); ?>

		
				</article><!-- .media-object-content -->
</div><!-- .media-object -->


<?php

// 1. Use get_the_date to prevent same-day posts not showing date.