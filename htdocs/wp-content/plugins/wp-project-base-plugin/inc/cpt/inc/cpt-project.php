<?php

use PostTypes\PostType;

// Post types

	$names = [
	    'name' => 'project',
	    'singular' => __('Project'),
	    'plural' => __('Projects'),
	    'slug' => __('projects'),
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

	$content->icon("dashicons-clipboard");

// Admin

	$content->columns()->hide(['date']);

// Translation

	$content->translation('_baindesign');