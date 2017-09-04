<?php

/** Add previous/next post navigation on book posts.
 * http://snipplr.com/view/74493/adjacent-post-by-alphabetical-order-in-wordpress/
 * /wp-includes/link-template.php 
 * line 1608
 * $where = apply_filters( "get_{$adjacent}_post_where", $wpdb->prepare( "WHERE p.post_date $op %s AND p.post_type = %s $where", $current_post_date, $post->post_type ), $in_same_term, $excluded_terms );
 * line 1620
 * $sort  = apply_filters( "get_{$adjacent}_post_sort", "ORDER BY p.post_date $order LIMIT 1" );
 */

function mbdmaster_nav_post_to_post_menu_order() {
	if ( is_singular( 'content_cpt' ) ) {
		global $post, $wpdb;
		
		// Section 1.
		function filter_next_post_sort( $sort ) {
			$sort = 'ORDER BY p.menu_order ASC LIMIT 1';
				return $sort;
		}
		function filter_next_post_where( $where ) {
			global $post, $wpdb;
			$where = $wpdb->prepare( "WHERE p.menu_order > '%s' AND p.post_type = 'content_cpt' AND p.post_status = 'publish'",$post->menu_order );
			return $where;
		}
		function filter_previous_post_sort( $sort ) {
			$sort = 'ORDER BY p.menu_order DESC LIMIT 1';
				return $sort;
		}
		function filter_previous_post_where($where) {
			global $post, $wpdb;
			$where = $wpdb->prepare( "WHERE p.menu_order < '%s' AND p.post_type = 'content_cpt' AND p.post_status = 'publish'",$post->menu_order );
			return $where;
		}
		/**
		 * Returns the translated object ID(post_type or term) or original if missing
		 *
		 * @param $object_id integer|string|array The ID/s of the objects to check and return
		 * @param $type the object type: post, page, {custom post type name}, nav_menu, nav_menu_item, category, tag etc.
		 * @return string or array of object ids
		 */
		function mbd_translate_object_id( $object_id, $type ) {
		    $current_language= apply_filters( 'wpml_current_language', NULL );
		    // if array
		    if( is_array( $object_id ) ){
		        $translated_object_ids = array();
		        foreach ( $object_id as $id ) {
		            $translated_object_ids[] = apply_filters( 'wpml_object_id', $id, $type, true, $current_language );
		        }
		        return $translated_object_ids;
		    }
		    // if string
		    elseif( is_string( $object_id ) ) {
		        // check if we have a comma separated ID string
		        $is_comma_separated = strpos( $object_id,"," );
		 
		        if( $is_comma_separated !== FALSE ) {
		            // explode the comma to create an array of IDs
		            $object_id     = explode( ',', $object_id );
		 
		            $translated_object_ids = array();
		            foreach ( $object_id as $id ) {
		                $translated_object_ids[] = apply_filters ( 'wpml_object_id', $id, $type, true, $current_language );
		            }
		 
		            // make sure the output is a comma separated string (the same way it came in!)
		            return implode ( ',', $translated_object_ids );
		        }
		        // if we don't find a comma in the string then this is a single ID
		        else {
		            return apply_filters( 'wpml_object_id', intval( $object_id ), $type, true, $current_language );
		        }
		    }
		    // if int
		    else {
		        return apply_filters( 'wpml_object_id', $object_id, $type, true, $current_language );
		    }
		}

		add_filter( 'get_next_post_sort',   'filter_next_post_sort' );
		add_filter( 'get_next_post_where',  'filter_next_post_where' );
		add_filter( 'get_previous_post_sort',  'filter_previous_post_sort' );
		add_filter( 'get_previous_post_where', 'filter_previous_post_where' );

		// Section 2.
		$previous_post = get_previous_post();
		$next_post = get_next_post();

		// Filter the returned ID to return the correct language ID, if required.
		$previous_post_translated = apply_filters( 'wpml_object_id', $previous_post->ID, 'content_cpt' );
		$next_post_translated = apply_filters( 'wpml_object_id', $next_post->ID, 'content_cpt' );

		echo '<nav class="navigation post-navigation" role="navigation">';
		echo  '<h1 class="screen-reader-text">' . __( 'Post navigation', '_criadoemsampa' ) . '</h1>';
		echo '<div class="nav-links cf">';
		if ( $previous_post_translated ) {
			echo '<div class="nav-previous"><span class="post-nav-label nav-previous-label meta-nav">' . __( 'Previous Lesson', '_criadoemsampa' ) . '</span><a href="' .get_permalink( $previous_post_translated ). '">' .get_the_title($previous_post_translated). '</a></div>';
		} 
		if ( $next_post ) {
  			echo '<div class="nav-next"><span class="post-nav-label nav-next-label meta-nav">' . __( 'Next Lesson', '_criadoemsampa' ) . '</span><a href="' .get_permalink( $next_post->ID ). '">' .get_the_title($next_post_translated). '</a></div>';
		} 
		echo '</div><!-- .nav-links --></nav><!-- .navigation -->';
	}
}