<?php
	
	// Vars
	$post_type = 'project';

	// Settings
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_image' );
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_title' );
 	$wp_customize->add_setting( 'mbdmaster_'.$post_type.'_archive_content' );


 	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_'.$post_type.'_archive_image', array(
	    'label'    => __( 'Project Archive Cover Image', 'mbdmaster' ),
	    'section'  => 'mbdmaster_archives_section',
	    'settings' => 'mbdmaster_'.$post_type.'_archive_image',
	 )));
	$wp_customize->add_control( new MBD_Customize_Textarea_Control( 
		$wp_customize, 
		'mbdmaster_'.$post_type.'_archive_content', 
		array(
	 	    'label'    => __( 'Project Archive Intro Content', 'mbdmaster' ),
	 	    'section'  => 'mbdmaster_archives_section',
	 	    'settings' => 'mbdmaster_'.$post_type.'_archive_content',
 	 	)
 	));
	$wp_customize->add_control( new MBD_Customize_Textarea_Control( 
		$wp_customize, 
		'mbdmaster_'.$post_type.'_archive_title', 
		array(
	 	    'label'    => __( 'Project Archive Title', 'mbdmaster' ),
	 	    'section'  => 'mbdmaster_archives_section',
	 	    'settings' => 'mbdmaster_'.$post_type.'_archive_title',
 	 	)
 	));