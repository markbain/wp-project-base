<?php

use PostTypes\PostType;

// Post types

	$names = [
	    'name' => 'book',
	    'singular' => __('Book'),
	    'plural' => __('Books'),
	    'slug' => __('books'),
	];
	$options = [
	    'supports' 	=> array( 'title', 'editor', 'excerpt' ),
	    'has_archive' => true,
	    'hierarchical' => false,
	    'capability_type' => 'page',
	    'show_in_menu' => true,
	];
	$content = new PostType($names,$options);

// Icons

	$content->icon("dashicons-book");

// Admin

	$content->columns()->hide(['date']);

// Translation

	$content->translation('_baindesign');