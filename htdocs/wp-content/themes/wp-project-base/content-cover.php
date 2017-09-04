<?php
	// A different cover image is needed for each page type

	$image_url = '';
	

	// Post type archive pages

 	if ( is_post_type_archive( 'book' ) ) { 
	    if ( get_theme_mod( 'mbdmaster_book_archive_image', '' ) ) {
	      $image_url = get_theme_mod( 'mbdmaster_book_archive_image', '' );
	    }
	}  elseif ( is_post_type_archive( 'project' ) ) { 
	    if ( get_theme_mod( 'mbdmaster_project_archive_image', '' ) ) {
	      $image_url = get_theme_mod( 'mbdmaster_project_archive_image', '' );
	    }
	}  elseif ( is_post_type_archive( 'talk' ) ) { 
	    if ( get_theme_mod( 'mbdmaster_talk_archive_image', '' ) ) {
	      $image_url = get_theme_mod( 'mbdmaster_talk_archive_image', '' );
	    }
	}  elseif ( is_post_type_archive( 'workshop' ) ) { 
	    if ( get_theme_mod( 'mbdmaster_workshop_archive_image', '' ) ) {
	      $image_url = get_theme_mod( 'mbdmaster_workshop_archive_image', '' );
	    }
    }  elseif ( is_post_type_archive( 'interview' ) ) { 
        if ( get_theme_mod( 'mbdmaster_interview_archive_image', '' ) ) {
          $image_url = get_theme_mod( 'mbdmaster_interview_archive_image', '' );
        }
    }  elseif ( is_post_type_archive( 'award' ) ) { 
        if ( get_theme_mod( 'mbdmaster_award_archive_image', '' ) ) {
          $image_url = get_theme_mod( 'mbdmaster_award_archive_image', '' );
        }
    }  elseif ( is_post_type_archive( 'film' ) ) { 
        if ( get_theme_mod( 'mbdmaster_film_archive_image', '' ) ) {
          $image_url = get_theme_mod( 'mbdmaster_film_archive_image', '' );
        }
    // Taxonomy archive pages
        
	} elseif ( is_tax() ) { 
		if ( z_taxonomy_image_url( ) ) {
			$image_url = z_taxonomy_image_url( );
		}

	// Blog Home page	
	} elseif ( is_home() || is_front_page() ) {
		if ( is_home() ) {
			$context = 'page_for_posts';
		} else {
			$content = 'page_on_front';
		}

		// Determine context: is this the frontpage or the blog page?
		$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( $context ) : get_the_ID );

		// WP_Query arguments
		$args = array (
			'post_type' => 'page',
			'p' => $page_id
		);
		
		// The Query
		$query = new WP_Query( $args );

		// The Loop
		while ( $query->have_posts() ) {

			$query->the_post();

			$acf_cover_image = get_field( 'cover_image' );
			if ( ! empty( $acf_cover_image ) ) {
				$image_url = $acf_cover_image;
			}

			/*$thumb_id = get_post_thumbnail_id();
			$size = '';
			$image_url_array = wp_get_attachment_image_src( $thumb_id, $size, FALSE ); 
			$image_url = $image_url_array[0];
			$default_image_url = get_stylesheet_directory_uri() . '/assets/images/default-golden.jpg';*/
		}

		/* Restore original Post Data 
		 * NB: Because we are using new WP_Query we aren't stomping on the 
		 * original $wp_query and it does not need to be reset with 
		 * wp_reset_query(). We just need to set the post data back up with
		 * wp_reset_postdata().
		 */
		wp_reset_postdata();

	} else { // Post & pages

		// Using ACF
		// Cover image set via ACF
		// ACF returns URL

		$acf_cover_image = get_field( 'cover_image' );
		if ( ! empty( $acf_cover_image ) ) {
			$image_url = $acf_cover_image;
		}

		// Using standard thumbnail
		// elseif ( get_post_thumbnail_id( 'cover-image' ) ) {
			// $thumb_id = get_post_thumbnail_id();
			// $size = '';
			// $image_url_array = wp_get_attachment_image_src( $thumb_id, $size, FALSE ); 
		    // $image_url = $image_url_array[0];
		// }
	    
  	}  

  	// Content
  	// If there's an image set for this page, show it with pride!!!
  	/*
  	if ( ! empty( $image_url ) ) {
  		$cover_content = '<div class="cover section"><div class="container" >';
  		$cover_content .= '<img src="' . $image_url . '" class="mobile-image">';
  		$cover_content .= '</div><!-- .cover .section --></div><!-- .section -->';
  		echo $cover_content;
  	}
  	*/
 ?>