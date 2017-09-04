<?php

//	Date/author meta ( "Posted On" )

function mbdmaster_posted_on() {
	$meta = sprintf( __( '<time class="entry-date" datetime="%3$s" pubdate>%4$s</time>', '_criadoemsampa' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', '_criadoemsampa' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);

	return $meta;

}

/**
 * baindesign_display_post_taxonomies
 */

if ( ! function_exists( 'baindesign_display_post_taxonomies' ) ) :
	function baindesign_display_post_taxonomies() {

		$categories_list = get_the_category_list( );
		$tag_list = get_the_tag_list( '<li>','</li><li>','</li>' );

		if ( $categories_list || $tag_list ) {
			echo '<div id="post-taxonomies">';
			if ( $categories_list ) {
				echo '<div class="post-taxonomies-categories"><header>Categories</header>' . $categories_list . '</div>';
			}

			if ( $tag_list ) {
				echo '<div class="post-taxonomies-tags"><header>Tags</header><ul class="post-tags">' . $tag_list . '</ul></div>';
			}
			echo '</div><!-- #post-taxonomies-->';
		}
	}
endif;

/**
 * baindesign_display_post_taxonomies
 */

if ( ! function_exists( 'baindesign_post_tags' ) ) :
	function baindesign_post_tags() {

		$tag_list = get_the_tag_list( '<li>','</li><li>','</li>' );
		if ( $tag_list ) {
			echo '<div class="post-taxonomies-tags"><header><span>Tags</span></header><ul class="post-tags">' . $tag_list . '</ul></div>';
		}
	}
endif;