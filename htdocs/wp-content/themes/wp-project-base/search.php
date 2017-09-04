<?php 

	get_header();

	if (have_posts()) {
		
		// Title
		echo '<div class="section"><div class="container"><h1 class="h2">';
		_e("Search Results for:", '_mbdmaster');
		echo get_search_query();
		echo '</h1></div><!-- .container --></div><!-- .section -->';

		// Content
		echo '<div class="section"><div class="container"><div class="media-object-container masonrycontainer">';
		echo '<div class="grid-sizer"></div>';
		echo '<div class="gutter-sizer"></div>';
		while (have_posts()):the_post();
			get_template_part('content', 'archive');
		endwhile;
		echo '</div><!-- .container media-object-container masonrycontainer --></div></div><!-- .section -->';

		// Paging
		if ( 'mbdmaster_paging_nav' ) {
			mbdmaster_paging_nav();
		}
	}	
	else {

		// Title
		echo '<div class="section"><div class="container"><h1 class="h2">';
		 _e("Not found:", '_mbdmaster');
		echo get_search_query();
		echo '</h1></div><!-- .container --></div><!-- .section -->';

		// Content
		echo '<div class="section"><div class="container">';
		get_template_part( 'content', 'none' );
		echo '</div><!-- .container --></div><!-- .section -->';
	}



	// Latest Posts 

	if ( get_template_part( 'modules/module', 'latest-posts' ) ) { 
		get_template_part( 'modules/module', 'latest-posts' );
	}

	get_footer();

?>