<?php

/*
	 * Social Media Profile Links
	 */

	$wp_customize->add_section( 
		'mbdmaster_social_media_profile_section' , 
		array(
	    	'title'       => __( 'Social Media Profiles', '_criadoemsampa' ),
	    	'priority'    => 30,
	    	'description' => 'Provide full links to your social media profiles.',
	 	) 
 	);

	// Twitter

	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_twitter' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_twitter', 
			array(
			    'label'    => 'Twitter',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_twitter',
		 	) 
	 	) 
 	);

	// Facebook
	
	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_facebook' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_facebook', 
			array(
			    'label'    => 'Facebook',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_facebook',
		 	) 
	 	) 
 	);

	// Google+
	
	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_googleplus' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_googleplus', 
			array(
			    'label'    => 'Google+',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_googleplus',
		 	) 
	 	) 
 	);

	// LinkedIn
	
	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_linkedin' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_linkedin', 
			array(
			    'label'    => 'LinkedIn',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_linkedin',
		 	) 
	 	) 
 	);

	// YouTube

	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_youtube' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_youtube', 
			array(
			    'label'    => 'YouTube',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_youtube',
		 	) 
	 	) 
	);


	// Pinterest

	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_pinterest' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_pinterest', 
			array(
			    'label'    => 'Pinterest',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_pinterest',
		 	) 
	 	) 
	);

	// Instagram

	$wp_customize->add_setting( 
		'mbdmaster_social_media_profile_instagram' 
	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_social_media_profile_instagram', 
			array(
			    'label'    => 'Instagram',
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_instagram',
		 	) 
	 	) 
	);