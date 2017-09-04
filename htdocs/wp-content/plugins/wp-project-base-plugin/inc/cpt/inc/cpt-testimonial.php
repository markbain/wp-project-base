<?php

use PostTypes\PostType;

// Post types

	$names = [
	    'name' => 'testimonial',
	    'singular' => __('Testimonial'),
	    'plural' => __('Testimonials'),
	    'slug' => __('testimonials'),
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

	$content->icon("dashicons-thumbs-up");

// Admin

	$content->columns()->hide(['date']);

// Translation

	$content->translation('_baindesign');