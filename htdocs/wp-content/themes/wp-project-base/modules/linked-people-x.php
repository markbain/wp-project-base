<?php
	global $connected_person_module_title; 
	$post_type = get_post_type();

    $connected_type = 'person_to_products';
		
	$connected_testimonials = new WP_Query( array( // Find connected pages
		'connected_type' => $connected_type,
		'connected_items' => $post,
		'nopaging' => true,
		'post__not_in' => get_option("sticky_posts"),
	) ); ?>

<?php if ( $connected_testimonials->have_posts() ) : ?>
	<div id="teachers" class="section">
		<div class="container_medium container">
			<header>
				<h2 class="home-section-title"><?php _e( $connected_person_module_title, '_baindesign324' ); ?></h2>
			</header>
			<?php while ( $connected_testimonials->have_posts() ) : $connected_testimonials->the_post(); ?>
	 			<?php get_template_part( 'content-archive' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- .container_medium .container -->
	</div><!-- #teachers ..section -->
<?php endif; ?>