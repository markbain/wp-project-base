<?php

	$content ='';
 	if ( is_post_type_archive( 'content_cpt' ) ) { 
	    if ( get_theme_mod( 'mbdmaster_content_archive_content', '' ) ) {
	      $content = get_theme_mod( 'mbdmaster_content_archive_content', '' );
	    }
    } else {
    	// Get category description
    	$content = get_the_archive_description();
    }

   	if ( get_field( 'page_intro_text' ) ) {
    	$content = get_field( 'page_intro_text' );
    }

    else {
		$content = get_the_excerpt();
    }
?>
<?php if ( $content ) : ?>
	<div id="intro" class="section">
		<div class="container">
			 <div class="intro"><?php echo $content; ?></div>
		</div><!-- .container -->
	</div><!-- #intro .section -->
<?php endif; ?>