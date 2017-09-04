<?php

/**
 * baindesign324_template_media_object
 */

if ( ! function_exists( 'baindesign324_template_media_object' ) ) :
	function baindesign324_template_media_object( $image_url, $text, $link, $link_text ) {

		?>

		<div id="post-<?php the_ID(); ?>" <?php post_class( 'media-object' ); ?>>
				<!-- Post Image -->
				<?php
					// Only show the media if it exists 
				$media_object_media_content='';
					if ( $image_url ) {
						$media_object_media_content = '<div class="media-object-media match-height">';
						$media_object_media_content .= '<a href="' . $link . '">';						
						$media_object_media_content .=	'<img src="' . $image_url. '" class="mobile-image">';
						$media_object_media_content .= '</a></div><!-- .media-object-media -->';
						$media_object_media_content .= '<article class="media-object-content match-height">';						
					} else {
						$media_object_media_content .= '<article class="media-object-content" style="width: 100%;">';
					}
					echo $media_object_media_content;
				?>
					
					<!-- Post Excerpt -->
					<div><?php echo $text; ?></div>
		
					<footer class="read-more">
						<a href="<?php echo $link ?>" title="<?php _e( 'Go to', '_mbdmaster' ); ?> <?php echo $link_text ?>">
							<span class=""><?php _e( 'Read more', '_mbdmaster' ); ?> </span><i class="fa"></i>
						</a>
					</footer>
				</article><!-- .media-object-content -->
</div><!-- .media-object -->
<?php
	} 
endif;