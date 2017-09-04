<?php
/**
 * Search bar
 */

if ( ! function_exists( 'baindesign324_search_bar' ) ) :
	function baindesign324_search_bar() { ?>
		<nav id="nav-bar-search" class="hidden-search nav-collapse">
			<?php get_search_form(); ?>
		</nav>
	<?php  }
endif;