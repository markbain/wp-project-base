<?php

/**
 * baindesign324_template_next_event
 */

if ( ! function_exists( 'baindesign324_template_next_event' ) ) :
	function baindesign324_template_next_event() { 
		if (! is_active_sidebar( 'sidebar-events' ))
			return;
		?>
		<div id="next-event" <?php mbdmaster_footer_sidebar_class( "section" ); ?>>
			<div class="container">
				<?php dynamic_sidebar( 'sidebar-events' ); ?>
						
			</div><!-- .container -->
		</div><!-- .section -->
	<?php } 
endif;