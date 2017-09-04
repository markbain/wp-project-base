<?php

use PostTypes\PostType;

// Post types

	$names = [
	    'name' => 'talk',
	    'singular' => __('Speaking'),
	    'plural' => __('Speaking'),
	    'slug' => __('speaking'),
	];
	$options = [
	    'supports' 	=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	    'has_archive' => true,
	    'hierarchical' => false,
	    'capability_type' => 'page',
	    'show_in_menu' => true,
	];
	$content = new PostType($names,$options);

// Topics taxonomy

	$names = [
	    'name' => 'talk_topic',
	    'singular' => __('Topic', '_baindesign'),
	    'plural' => __('Topics', '_baindesign'),
	    'slug' => __('talk_topic', '_baindesign')
	];
	$content->taxonomy($names);

// Icons

	$content->icon("dashicons-format-video");

// Admin

	// $content->columns()->hide(['date']);

// Translation

	$content->translation('_baindesign');