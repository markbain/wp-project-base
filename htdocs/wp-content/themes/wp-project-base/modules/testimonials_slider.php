<div id="testimonials-front" class="section">
	<div id="testimonials-slider" class="container">
		<header class="section-header">
			<h2 class="home-section-title"><?php _e( 'What people are saying', '_mbdmaster' ); ?></h2>
		</header>
		
		<div id="twitter-avatar" class="section-icon">
			<?php 
				$twitter_url = get_theme_mod( 'mbdmaster_social_media_profile_twitter' ); 
			?>

				<span class="fa-stack fa-2x">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-quote-left fa-stack-1x fa-inverse"></i>
				</span>

		</div> 
		<div id="testimonials-slider">
			<ul class="slides">
				<?php 

					/**
					 *
					 *	Display "featured" testimonial posts
					 *
					 */
				
					$my_query = new WP_Query( array (
						'post_status' => 'publish',
  						'posts_per_page' => -1,
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
							<?php get_template_part('content' ); ?>
						 </li><!-- slide media_block -->
								<?php wp_reset_postdata(); ?>			<?php endwhile; ?>

				<?php endif; ?>
			        </ul>
		</div>
	</div><!-- .container -->
</div><!-- .section -->