<?php

use PostTypes\PostType;

// Post types

	$names = [
	    'name' => 'article',
	    'singular' => __('Article'),
	    'plural' => __('Articles'),
	    'slug' => __('articles'),
	];
	$options = [
	    'supports' 	=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	    'has_archive' => true,
	    'hierarchical' => false,
	    'capability_type' => 'page',
	    'show_in_menu' => true,
	];
	$content = new PostType($names,$options);

// Icons

	$content->icon("dashicons-welcome-write-blog");

// Admin

	// $content->columns()->hide(['date']);

// Translation

	$content->translation('_baindesign');