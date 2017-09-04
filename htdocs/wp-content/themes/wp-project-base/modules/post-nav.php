<?php

	// TO DO 
	// Combine with mbdmaster_paging_nav()

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
?>
<nav class="section navigation post-navigation" role="navigation">
	<div class="container">
		<h2 class="screen-reader-text"><?php _e( 'Post navigation', '_criadoemsampa' ); ?></h2>
		<div class="nav-links">
			<?php
				previous_post_link( _x( '<div class="nav-previous"><footer class="read-more">%link</footer></div>', 'Previous link', '_criadoemsampa'), '<span class="post-nav-label"><i class="fa"></i><span class="post-nav-label-text">Previous</span></span><span class="post-nav-link-title">%title</span>' );

				next_post_link( _x( '<div class="nav-next"><footer class="read-more">%link</footer></div>', 'Next link', '_criadoemsampa'), '<span class="post-nav-label"><span class="post-nav-label-text">Next</span><i class="fa"></i></span><span class="post-nav-link-title">%title</span>' );
			?>
		</div><!-- .nav-links -->
	</div>

</nav><!-- .navigation -->