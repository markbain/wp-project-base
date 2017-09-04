<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<div id="footer-navigation" class="section footer-nav-menu">
		<div class="container">

			<nav class="secondary-navigation">
				<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'container' => 'ul', 
						'container_class' => 'nav-collapse main-navigation ',
						'fallback_cb' => false
					) ); 
				?>				
			</nav>
		</div><!-- .container -->
	</div><!-- .section -->
<?php endif; ?>