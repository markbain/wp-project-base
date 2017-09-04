<?php

	// Custom Branding
	//
	$wp_customize->add_section( 'mbdmaster_branding_section' , array(
    'title'       => __( 'Branding', '_criadoemsampa' ),
    'priority'    => 30,
    'description' => 'Upload your logos here.',
 ) );
	
	// Header Logo (Desktop)
	//
	$wp_customize->add_setting( 'mbdmaster_header_logo_desktop' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_header_logo_desktop', array(
    'label'    => __( 'Header Logo (Desktop)', '_criadoemsampa' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_header_logo_desktop',
 	) ) );

	// Header Logo (Mobile)
	//
	$wp_customize->add_setting( 'mbdmaster_header_logo_mobile' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_header_logo_mobile', array(
    'label'    => __( 'Header Logo (Mobile)', '_criadoemsampa' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_header_logo_mobile',
 	) ) );

	// Footer logo (Desktop)
	//
	$wp_customize->add_setting( 'mbdmaster_footer_logo_desktop' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_footer_logo_desktop', array(
    'label'    => __( 'Footer Logo (Desktop)', '_criadoemsampa' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_footer_logo_desktop',
 	) ) );

	// Footer logo (Mobile)
	//
	$wp_customize->add_setting( 'mbdmaster_footer_logo_mobile' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_footer_logo_mobile', array(
    'label'    => __( 'Footer Logo (Mobile)', '_criadoemsampa' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_footer_logo_mobile',
 	) ) );