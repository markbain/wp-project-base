<div id="logo-gallery" class="section gallery acf-gallery">
	<div class="container">
		<?php
			$page_name = 'acf-gallery';
			
			// WP_Query arguments
			$args = array (
				'post_type' => 'page',
				'pagename' => $page_name
			);
			// The Query
			$query1 = new WP_Query( $args );

			// The Loop
			while ( $query1->have_posts() ) :
				$query1->the_post(); ?>
					<header>
						<h2 class="home-section-title"><?php the_title(); ?></h2>
					</header>
					<?php the_content(); ?>
					<?php 

					$images = get_field('gallery');

					if( $images ): ?>
					    <ul class="no-bullets">
					        <?php foreach( $images as $image ): ?>
					            <li>
					                <a href="<?php echo $image['description']; ?>">
					                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> />
					                </a>
					                <p><?php echo $image['caption']; ?></p>
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>
			<?php 

			/* Restore original Post Data 
			 * NB: Because we are using new WP_Query we aren't stomping on the 
			 * original $wp_query and it does not need to be reset with 
			 * wp_reset_query(). We just need to set the post data back up with
			 * wp_reset_postdata().
			 */
			wp_reset_postdata();
		?>
	<?php endwhile; ?>

	</div><!-- .container -->
</div><!-- .section --> 