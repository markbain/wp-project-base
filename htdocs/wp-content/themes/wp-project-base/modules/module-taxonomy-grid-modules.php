<div class="media-object-container">
	<?php 
		
		$terms = get_terms( array(
		    'taxonomy' => 'section',
		    'hide_empty' => true,
		) );

		foreach ( $terms as $term ) : 
			$term_link = get_term_link( $term );
		    // If there was an error, continue to the next term.
		    if ( is_wp_error( $term_link ) ) {
		        continue;
		    }
	?>				
	<div class="media-object">
		<a href="<?php echo esc_url( $term_link ); ?>">
			<div class="media-object-media">
				<?php /*	
					$saved_data = get_term_meta($term->term_id,'mbd_thumb_image_field_id',true);
					$attachment_id = $saved_data['id'];
					echo wp_get_attachment_image( $attachment_id, 'full' ); 
				*/ ?>
								
			</div><!-- .media-object-media -->
			<article class="media-object-content">
				<header class="entry-title"><h3><span><?php echo $term->name; ?></span></h3></header>
				<p><?php echo $term->description; ?></p>
			</article><!-- .media-object-content -->
		</a>
	</div><!-- .media-object -->
	<?php endforeach; ?>

</div><!-- .media-object-container -->		