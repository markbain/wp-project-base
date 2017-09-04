<?php
	
	// Vars
	$post_type = 'cpt1';

	// Section
	$wp_customize->add_section( 'mbdmaster_archives_section', array(
	    'title'       => __( 'Archives', 'mbdmaster' ),
	    'priority'    => 30,
	    'description' => __( 'Customize the automatically-generated archive pages.', 'mbdmaster' ),
 	));

	// Settings
 	$wp_customize->add_setting( 'mbdmaster_default_archive_image' );
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_image' );
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_title' );
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_content' );

 	// Controls
 	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_default_archive_image', array(
	    'label'    => __( 'Default Archive Cover Image', 'mbdmaster' ),
	    'section'  => 'mbdmaster_archives_section',
	    'settings' => 'mbdmaster_default_archive_image',
	 )));
 	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_'.$post_type.'_archive_image', array(
	    'label'    => __( 'People Archive Cover Image', 'mbdmaster' ),
	    'section'  => 'mbdmaster_archives_section',
	    'settings' => 'mbdmaster_'.$post_type.'_archive_image',
	 )));
	$wp_customize->add_control( new MBD_Customize_Textarea_Control( 
		$wp_customize, 
		'mbdmaster_'.$post_type.'_archive_content', 
		array(
	 	    'label'    => __( 'People Archive Intro Content', 'mbdmaster' ),
	 	    'section'  => 'mbdmaster_archives_section',
	 	    'settings' => 'mbdmaster_'.$post_type.'_archive_content',
 	 	)
 	));
	$wp_customize->add_control( new MBD_Customize_Textarea_Control( 
		$wp_customize, 
		'mbdmaster_'.$post_type.'_archive_title', 
		array(
	 	    'label'    => __( 'People Archive Title', 'mbdmaster' ),
	 	    'section'  => 'mbdmaster_archives_section',
	 	    'settings' => 'mbdmaster_'.$post_type.'_archive_title',
 	 	)
 	));