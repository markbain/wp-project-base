<?php

// Defaults
// $archive_image=$cover_image_url=$cover_image_position_horizontal=$cover_image_position_vertical=$cover_text='';

// $cover_image_default 			= get_theme_mod( 'mbdmaster_default_archive_image', '' );
$cover_text_vertical_alignment 	= 'middle';

/**
 *
 * Theme Mods
 * 
 * By establishing the post type, we can check for a
 * theme mod (via the Customizer) for this post type. 
 * 
 **/
$post_type 				= get_post_type();
$tm_cover_image_title 	= 'mbdmaster_'.$post_type.'_archive_image';
$tm_cover_image_url 	= get_theme_mod( $tm_cover_image_title, '' );

/**
 *
 * Custom Fields
 * 
 * Single posts/pages can set a cover image via a
 * custom field. 
 * 
 **/
$cf_cover_image_url 					= get_field( 'cover_image' );
$cf_cover_image_position_horizontal 	= get_field( 'image_position_horizontal' );			
$cf_cover_image_position_vertical 		= get_field( 'image_position_vertical' );
$cf_cover_text 							= get_field( 'cover_text' );
$cf_cover_text_vertical_alignment 		= get_field( 'cover_text_vertical_alignment' );
$cf_cover_content_color 				= get_field( 'cover_content_color' );

	// Post type archive pages
	if ( is_post_type_archive() ) {

	  	$cover_class_context='cover-archive';

	    if ( $tm_cover_image_url ) {
	    	$cover_class_source = 'cover-theme_mod';
	      	$cover_image_url = $tm_cover_image_url;
	      	$cover_text = '';
	    
	    // Default
	    } else {
	    	$cover_class_source = 'cover-default';
	      	$cover_image_url = $cover_image_default;
	      	$cover_text = '';
	    }

	// Taxonomy archive pages
	} elseif ( is_tax() ) {
		$cover_class_context='cover-tax'; 
		if ( function_exists( 'z_taxonomy_image_url' ) ) {
			$cover_image_url = z_taxonomy_image_url( );
		} else {
	      $cover_image_url = $cover_image_default;
	      $cover_text = '';
	    }

	// Blog archive page
	} elseif ( is_home() ) {
		
		/**
		 * To pull content from the designated blog page, we need
		 * to first establish the page ID of the blog page. 
		 **/

		$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : get_the_ID );

		$cf_cover_image_url 					= get_field( 'cover_image', $page_id );
		$cf_cover_image_position_horizontal 	= get_field( 'image_position_horizontal', $page_id );			
		$cf_cover_image_position_vertical 		= get_field( 'image_position_vertical', $page_id );
		$cf_cover_text 							= get_field( 'cover_text', $page_id );
		$cf_cover_text_vertical_alignment 		= get_field( 'cover_text_vertical_alignment', $page_id );

		$cover_class_context='cover-home';

	    if ( $cf_cover_image_url ) {
	    	$cover_image_url = $cf_cover_image_url;
	     	$cover_class_source = 'cover-source-custom-field';
	     	$cover_image_position_horizontal = $cf_cover_image_position_horizontal;	     	
	     	$cover_image_position_vertical = $cf_cover_image_position_vertical;
	     }

 		// Cover text
		if ( $cf_cover_text ) {
			$cover_text = $cf_cover_text;
			if ( $cf_cover_text_vertical_alignment ) {
				$cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
			}
		} else {
			$cover_text = get_the_title( $post );
		} 	

	} else {

		// Post & pages

		// For posts/pages, don't show a cover image unless
		// specified.	    

	    if ( $cf_cover_image_url ) {
	    	$cover_image_url = $cf_cover_image_url;
	     	$cover_class_source = 'cover-source-custom-field';
	     	$cover_image_position_horizontal = $cf_cover_image_position_horizontal;	     	
	     	$cover_image_position_vertical = $cf_cover_image_position_vertical;
	     } 		

		// Cover text
		if ( $cf_cover_text ) {
			$cover_text = $cf_cover_text;
			if ( $cf_cover_text_vertical_alignment ) {
				$cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
			}
		} else {
			$cover_text = '<h1>' . get_the_title() . '</h1>';
		}

	}
	
	/**
	 *
	 * Inline Styles
	 * 
	 * The background image (if it exists) is added and positioned
	 * with inline styles using these variables:
	 * 
	 * $cover_image_url
	 * $cover_image_position_horizontal
	 * $cover_image_position_vertical
	 * 
	 **/
	if ( $cover_image_url ) {
		$inline_style  = 'background-image: url(' . $cover_image_url . ');';  
		$inline_style .= 'background-position: '. $cover_image_position_horizontal .'% '. $cover_image_position_vertical .'%; ';
		$inline_style .= 'background-size: cover;';
		$inline_style .= 'position: relative;'; // Allows overlay absolute position
	} else {		
		$inline_style = 'min-height: 0;';
	}

	// Set a class on the content div depending on whether there's a background image
	if ( $cover_image_url ) {
		$cover_class='cover-background-image';
	} else {
		$cover_class='cover-no-background-image';		
	}

?>

<div id="cover" class="section cover <?php echo $cover_class; ?> <?php echo $cover_class_source; ?>" style="<?php echo $inline_style; ?>">
	<div class="overlay"></div>
	<div class="container container_medium" style="vertical-align: <?php echo $cover_text_vertical_alignment; ?>">
		<div class="content-container">
			<?php do_action( 'baindesign324_cover_top' ); ?>			
			<?php if ($cover_text) : ?>
				<?php echo $cover_text; ?>
			<?php endif; ?>
			<?php do_action( 'baindesign324_cover_bottom' ); ?>
		</div>	
	</div>
</div><!-- .section -->

<div id="cover-text-substitute" class="section">
	<div class="container container_medium">
		<div class="content-container">
			<?php do_action( 'baindesign324_cover_top' ); ?>
			<?php if ($cover_text) : ?>
				<?php echo $cover_text; ?>
			<?php endif; ?>
			<?php do_action( 'baindesign324_cover_bottom' ); ?>
		</div>	
	</div>
</div><!-- .section -->