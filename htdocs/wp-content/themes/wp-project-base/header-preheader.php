<div id="preheader" class="section">
	<div class="container">
		
		<?php // Language Switcher
			// Uses WPML plugin 
			if ( class_exists( 'SitePress' ) && function_exists( 'mbdmaster_languages_list' ) ) {
				echo '<div id="switcher">'; 
				mbdmaster_languages_list();
				echo '</div>';
			} 
		?>
		
		
		<?php /* 
			if ( get_template_part( 'modules/module', 'social-links' ) ) {
				echo '<div id="preheader-social">'; 
				get_template_part( 'modules/module', 'social-links' );
				echo '</div>';
			}
		*/ ?>

		<ul id="menu-login" class="menu">
			<?php if( is_user_logged_in() ): ?>
				<li id="welcome-message" class="menu-item">
					<span><?php 
						$current_user = wp_get_current_user();
						printf( __('Welcome, %s', '_criadoemsampa'), esc_html( $current_user->user_login ) ); 
					?></span>
				</li>
				<li id="logout" class="menu-item">
					<a href="<?php echo wp_logout_url( site_url( add_query_arg( array(), $wp->request ) ) ); ?>"><?php _e('Log out', '_criadoemsampa'); ?></a>		
				</li>
			<?php else: ?>
				<li id="login" class="menu-item">
					<a href="<?php echo wp_login_url( site_url( add_query_arg( array(), $wp->request ) ) ); ?>" class="simplemodal-login"><?php _e('Log in / Register', '_criadoemsampa'); ?></a>		
				</li>
			<?php endif; ?>
			<li id="search"><a id="search-toggle" class="js-toggle default" aria-hidden="false"><span><span>Search</span></span></a></li>
		</ul>
		

	</div>
</div>