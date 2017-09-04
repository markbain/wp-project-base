<?php
/**
 * Template Name: 3-column page
 *
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'cover' ); ?>

<div id="main" class="section">
	<div class="container">
		<h1 class="h2">
			<?php the_title(); ?>
		</h1>
		
		<div class="column-container column-container-three">
			<?php if ( get_field('primary_content') ) : ?>
				<div class="primary-content-block">
					<?php the_field('primary_content'); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( get_field('secondary_content') ) : ?>
				<div class="secondary-content-block">

					<?php the_field('secondary_content'); ?>
				</div>
			<?php endif; ?>

			<?php if ( get_field('tertiary_content') ) : ?>
				<div class="tertiary-content-block">

					<?php the_field('tertiary_content'); ?>
				</div>
			<?php endif; ?>
		</div><!-- .column-container -->
				
	
	</div><!-- .container -->
</div><!-- #main -->
<?php endwhile; // end of the loop. ?>

<!-- end map -->
<?php get_footer(); ?>