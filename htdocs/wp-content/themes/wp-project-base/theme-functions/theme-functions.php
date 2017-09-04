<?php

/**
 * Search bar
 */


function baindesign324_search_bar() { ?>
	<nav id="nav-bar-search">
		<?php get_search_form(); ?>
	</nav>
<?php  }

function baindesign324_menu_standard() { ?>
	<div id="main-nav-wrapper">
		<nav id="main-navigation-menu" class="nav-collapse main-navigation">
			<?php 
				wp_nav_menu( 
				array( 
						'theme_location' => 'primary', 
						'container' => 'ul', 
					) 
				); 
			?>
		</nav><!-- .nav-collapse .main-navigation -->
	</div>
<?php }

/**
 * Custom search form
 */

function mbdmaster_search_form( $form ) {
	$var = home_url( '/' );	
    $form = '<form role="search" method="get" class="search-form" action="' . $var . '">
				<label><span class="screen-reader-text">' . __( 'Search', '_criadoemsampa') . '</span></label>
					<input type="search" class="search-field" value="" name="s" title="' . __( 'Enter your search term', '_criadoemsampa') . '">
				<input type="submit" class="search-submit" value="Search">
			</form>';

    return $form;
}

/**
 * Custom external article link
 */

function baindesign324_external_article_link() { ?>
	<?php if ( get_field( 'article_client') ) : ?>
		<div class="article-link"><a href="<?php echo get_field( 'article_url'); ?>" rel="external">Go to the article</a></div>
	<?php endif; ?>
<?php }

/**
 * baindesign_content_after
 */

function baindesign_content_after() {		
	if ( get_post_type() == 'article' && is_single() ) {
		baindesign324_external_article_link();
	}
}