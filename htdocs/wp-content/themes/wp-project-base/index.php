<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<!-- START baindesign_main_before -->
	<?php do_action( 'baindesign_main_before' ); ?>
	<!-- END baindesign_main_before -->
	<main id="main">
		<?php do_action( 'baindesign_primary_before' ); ?>		
		<div id="primary">
			<?php do_action( 'baindesign_article_before' ); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- START baindesign_article_top -->
				<?php do_action( 'baindesign_article_top' ); ?>
				<!-- END baindesign_article_top -->
				<?php // Loop for ACF Flexible Content ?>
				<?php if( have_rows('post_elements') ): ?>
					<?php while ( have_rows('post_elements') ) : the_row(); ?>				    
						<?php get_template_part( 'content', 'flexible' ); ?>
				    <?php endwhile; ?>
				
				<?php // Standard Loop ?>
				<?php else: ?>
					<?php get_template_part( 'content'); ?>   
				<?php endif; ?>
				
				<!-- START baindesign_pre_comments -->
				<?php do_action( 'baindesign_pre_comments' ); ?>
				<!-- END baindesign_pre_comments -->
				
				<?php if ( ( comments_open() || '0' != get_comments_number() ) && ( in_array( get_post_type(), array( 'post' ) ) ) ) :
					comments_template(); ?>
				<?php endif; ?>
				<!-- START baindesign_article_bottom -->
				<?php do_action( 'baindesign_article_bottom' ); ?>
				<!-- END baindesign_article_bottom -->
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php do_action( 'baindesign_article_after' ); ?>
		</div><!-- #primary -->
		<?php do_action( 'baindesign_primary_after' ); ?>
	</main><!-- #main -->
	<!-- START baindesign_main_after -->
	<?php do_action( 'baindesign_main_after' ); ?>
	<!-- END baindesign_main_after -->
<?php endwhile; ?>
<?php get_footer(); ?>
