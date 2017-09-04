<div class="section">
	<div class="container">
		<div class="content-container">
			
			<!-- START baindesign_content_before -->			
			<?php do_action( 'baindesign_content_before' ); ?>
			<!-- END baindesign_content_before -->

			<?php the_content(); ?>
			
			<!-- START baindesign_content_after -->
			<?php do_action( 'baindesign_content_after' ); ?>
			<!-- END baindesign_content_after -->

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .content-container -->   
	</div><!-- .container -->
</div><!-- .section -->