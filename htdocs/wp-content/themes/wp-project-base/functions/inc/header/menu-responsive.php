<?php

/**
 * Standard responsive menu
 */

if ( ! function_exists( 'baindesign324_menu_responsive' ) ) :
	function baindesign324_menu_responsive() { ?>		
		<div id="main-nav-wrapper"><!-- menu-responsive.php -->
			<nav id="main-navigation-menu" class="nav-collapse main-navigation">
				<?php 
					wp_nav_menu( 
					array( 
							'theme_location' => 'primary', 
							'container' => 'ul', 
							'container_class' => 'nav-collapse main-navigation ' // Required by responsive-nav.js
						) 
					); 
				?>
				<a id="search-toggle" class="js-toggle default" aria-hidden="false"><span><span>Search</span></span></a>
				<a id="nav-toggle" class="nav-toggle js-toggle default"><!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->
					<span type="button" role="button" aria-label="Toggle Navigation" class="nav-button lines-button menu-button si-icons si-icons-easing">
						<span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
					</span>
					<span class=""><?php _e( 'Menu', '_mbdmaster' ); ?></span>
				</a>					
			</nav><!-- .nav-collapse .main-navigation -->
		</div>
	<?php }
endif;