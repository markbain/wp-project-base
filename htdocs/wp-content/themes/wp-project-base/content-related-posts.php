<h2>Other items you might like</h2>
<ul>
<?php 
	/*
	 * Custom query to display other recent items
	 *
	 */
 	global $post;
	$args=array(  
	    'post__not_in' 		=> array($post->ID),  
	    'post_type'			=> 'portfolio_item',
	);  
	$my_query = new wp_query( $args );
	
	while ( $my_query->have_posts() ):
		$my_query->the_post();
				
		// Cover images
		$thumb_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
		$default_image_url = get_stylesheet_directory_uri() . '/assets/images/default-golden.jpg';
 ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php if ( !empty( $image_url[0] ) ) : ?>
								<img src="<?php echo $image_url[0]; ?>">
							<?php else: ?>
								<img src="<?php echo $default_image_url[0]; ?>">
							<?php endif; ?>
							<span><?php the_title(); ?></span>
						</a>
					</li>
				<?php endwhile; ?>
				<?php 
					// Prevent weirdness
					wp_reset_postdata(); 
?>
</ul>
