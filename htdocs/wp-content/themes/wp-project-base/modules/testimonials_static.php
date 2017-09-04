<div id="testimonials-front" class="section">
	<div id="testimonials-static" class="container container_narrow">
		<header class="section-header">
			<h2 class="home-section-title"><?php _e( 'What people are saying', '_mbdmaster' ); ?></h2>
		</header>
		
		<div class="section-icon">
			<span class="fa-stack fa-2x">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-quote-left fa-stack-1x fa-inverse"></i>
			</span>
		</div>
		 
		<div id="testimonials">
			<ul class="slides">
				<?php 

					/**
					 *
					 *	Display "featured" testimonial posts
					 *
					 */
				
					$my_query = new WP_Query( array (
						'post_status' => 'publish',
  						'posts_per_page' => 1,
						'post_type' => 'testimonial',
						'orderby' => 'rand',
						'meta_query'	=> array(
							array(
								'key'	  	=> 'featured_testimonial',
								'value'	  	=> '1',
								'compare' 	=> 'LIKE'
							)	
						)
					) );


					if( $my_query->have_posts() ) : while( $my_query->have_posts()) : $my_query->the_post();
				
					// Vars
					$thumb_id = get_post_thumbnail_id();
					$reviewer_image = get_the_post_thumbnail( $post->ID,'testimonial-image', true );
					$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
					$testimonial_content_excerpt = get_post_meta($post->ID, 'testimonial_content_excerpt', true);
					
					// Name
					$name = get_field('testimonial_name');

					// Link
					$link = get_field('testimonial_link');

					// Role
					$role = get_field('testimonial_role');
					
					// Check if the post is featured
					$featured = get_field('featured_testimonial');

				?>
						<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">
							<!-- START baindesign_content_before -->			
							<?php do_action( 'baindesign_content_before' ); ?>
							<!-- END baindesign_content_before -->

							<?php the_content(); ?>
							
							<!-- START baindesign_content_after -->
							<?php do_action( 'baindesign_content_after' ); ?>
						 </li><!-- slide media_block -->
								<?php wp_reset_postdata(); ?>			<?php endwhile; ?>

				<?php endif; ?>
			        </ul>
		</div>
	</div><!-- .container -->
</div><!-- .section -->