<?php

function baindesign324_customize_register( $wp_customize ) {

	class MBD_Customize_Textarea_Control extends WP_Customize_Control {
  	public $type = 'textarea';
  	public function render_content() { 

	?>

	  <label>
	    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	  </label>

	<?php }
}

	require get_template_directory() . '/functions/customizer/archives-people.php';
	require get_template_directory() . '/functions/customizer/archives-projects.php';

	// Custom Branding
	//
	$wp_customize->add_section( 'mbdmaster_branding_section' , array(
    'title'       => __( 'Branding', 'mbdmaster' ),
    'priority'    => 30,
    'description' => 'Upload your logos here.',
 ) );
	
	// Header Logo (Desktop)
	//
	$wp_customize->add_setting( 'mbdmaster_header_logo_desktop' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_header_logo_desktop', array(
    'label'    => __( 'Header Logo (Desktop)', 'mbdmaster' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_header_logo_desktop',
 	) ) );

	// Header Logo (Mobile)
	//
	$wp_customize->add_setting( 'mbdmaster_header_logo_mobile' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_header_logo_mobile', array(
    'label'    => __( 'Header Logo (Mobile)', 'mbdmaster' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_header_logo_mobile',
 	) ) );

	// Footer logo (Desktop)
	//
	$wp_customize->add_setting( 'mbdmaster_footer_logo_desktop' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_footer_logo_desktop', array(
    'label'    => __( 'Footer Logo (Desktop)', 'mbdmaster' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_footer_logo_desktop',
 	) ) );

	// Footer logo (Mobile)
	//
	$wp_customize->add_setting( 'mbdmaster_footer_logo_mobile' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_footer_logo_mobile', array(
    'label'    => __( 'Footer Logo (Mobile)', 'mbdmaster' ),
    'section'  => 'mbdmaster_branding_section',
    'settings' => 'mbdmaster_footer_logo_mobile',
 	) ) );

		// Custom hero background
	//
	$wp_customize->add_section( 'mbdmaster_hero_section' , array(
    'title'       => __( 'Hero Image', 'mbdmaster' ),
    'priority'    => 30,
    'description' => 'Add a full-width background image to your hero section.',
 ) );

	$wp_customize->add_setting( 'mbdmaster_hero_background' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mbdmaster_hero_background', array(
    'label'    => __( 'Hero Background Image', 'mbdmaster' ),
    'section'  => 'mbdmaster_hero_section',
    'settings' => 'mbdmaster_hero_background',
) ) );

	$wp_customize->add_section(
		// ID
		'layout_section',
		// Arguments array
		array(
			'title' => __( 'Layout', 'mbdmaster' ),
			'capability' => 'edit_theme_options',
			'description' => __( 'Allows you to edit your theme\'s layout.', 'mbdmaster' )
		)
	);
	$wp_customize->add_setting(
		// ID
		'mbdmaster_settings[layout_setting]',
		// Arguments array
		array(
			'default' => 'no-sidebar',
			'type' => 'option'
		)
	);

		// Add the featured content section.
	$wp_customize->add_section( 'featured_content', array(
		'title'    => __( 'Featured Content', 'twentyfourteen' ),
		'priority' => 120,
	) );

	// Add the featured content layout setting and control.
	$wp_customize->add_setting( 'featured_content_layout', array(
		'default'    => 'grid',
		'type'       => 'theme_mod',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'featured_content_layout', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'featured_content',
		'type'    => 'select',
		'choices' => array(
			'grid'   => __( 'Grid', 'twentyfourteen' ),
			'slider' => __( 'Slider', 'twentyfourteen' ),
		),
	) );

	$wp_customize->add_control(
		// ID
		'layout_control',
		// Arguments array
		array(
			'type' => 'radio',
			'label' => __( 'Theme layout', 'mbdmaster' ),
			'section' => 'layout_section',
			'choices' => array(
				'left-sidebar' => __( 'Left sidebar', 'mbdmaster' ),
				'right-sidebar' => __( 'Right sidebar', 'mbdmaster' ),
				'no-sidebar' => __( 'No sidebar', 'mbdmaster' ),
				
			),
			// This last one must match setting ID from above
			'settings' => 'mbdmaster_settings[layout_setting]'
		)
	);


	$wp_customize->add_section( 'mbdmaster_contact_section' , array(
    	'title'       => __( 'Contact details', 'mbdmaster' ),
    	'priority'    => 30,
    	'description' => 'Your contact details.',
 	) );

	$wp_customize->add_setting( 'mbdmaster_contact_number' );

	$wp_customize->add_control( new MBD_Customize_Textarea_Control( $wp_customize, 'mbdmaster_contact_number', array(
    'label'    => __( 'Telephone Number', 'mbdmaster' ),
    'section'  => 'mbdmaster_contact_section',
    'settings' => 'mbdmaster_contact_number',
 ) ) );

	$wp_customize->add_setting( 'mbdmaster_email' );

	$wp_customize->add_control( new MBD_Customize_Textarea_Control( $wp_customize, 'mbdmaster_email', array(
    'label'    => __( 'Email address', 'mbdmaster' ),
    'section'  => 'mbdmaster_contact_section',
    'settings' => 'mbdmaster_email',
 ) ) );

	// Address
	
	$wp_customize->add_setting( 'mbdmaster_address' );

	$wp_customize->add_control( new MBD_Customize_Textarea_Control( $wp_customize, 'mbdmaster_address', array(
    'label'    => __( 'Street address', 'mbdmaster' ),
    'section'  => 'mbdmaster_contact_section',
    'settings' => 'mbdmaster_address',
 ) ) );

	$wp_customize->add_setting( 'mbdmaster_map_link' );

	$wp_customize->add_control( new MBD_Customize_Textarea_Control( 
		$wp_customize, 
		'mbdmaster_map_link', 
		array(
		    'label'    => __( 'Link to map', 'mbdmaster' ),
		    'section'  => 'mbdmaster_contact_section',
		    'settings' => 'mbdmaster_map_link'
 		) 
   	));

	

	/*
	 * Social Media Profile Links
	 */

	$wp_customize->add_section( 
		'mbdmaster_social_media_profile_section' , 
		array(
	    	'title'       => __( 'Social Media Profiles', 'mbdmaster' ),
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
			    'label'    => __( 'Twitter', 'mbdmaster' ),
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
			    'label'    => __( 'Facebook', 'mbdmaster' ),
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
			    'label'    => __( 'Google+', 'mbdmaster' ),
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
			    'label'    => __( 'LinkedIn', 'mbdmaster' ),
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
			    'label'    => __( 'YouTube', 'mbdmaster' ),
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
			    'label'    => __( 'Pinterest', 'mbdmaster' ),
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
			    'label'    => __( 'Instagram', 'mbdmaster' ),
			    'section'  => 'mbdmaster_social_media_profile_section',
			    'settings' => 'mbdmaster_social_media_profile_instagram',
		 	) 
	 	) 
	);

	/*
	 * Twitter Feed ID
	 */

	$wp_customize->add_section( 
		'mbdmaster_twitter_feed_section' , 
		array(
	    	'title'       => __( 'Twitter Feed Section', 'mbdmaster' ),
	    	'priority'    => 25,
	    	'description' => '<h3>How to find your Twitter feed ID</h3><ul><li>Go to <a href="http://www.twitter.com" target="_blank">www.twitter.com</a> and sign in as normal, then go to your settings page.</li><li>Go to "Widgets" on the left hand side</li><li>Create a new widget for what you need e.g. "user time line" or "search" etc.</li><li>Feel free to check "exclude replies" if you don\'t want replies in results.</li><li>Now go back to settings page, and then go back to widgets page and you should see the widget you just created.</li><li>Click edit.</li><li>Look at the URL in your web browser, you will see a long number like this:</li><li><strong>690564043141189636 (example)</strong></li><li>Use this as your ID below!</li></ul>',
	 	) 
 	);

	// Twitter

	$wp_customize->add_setting( 'mbdmaster_twitter_feed_id'	);

	$wp_customize->add_control( 
		new WP_Customize_Control( 
			$wp_customize, 
			'mbdmaster_twitter_feed_id', 
			array(
			    'label'    => __( 'Twitter Feed ID', 'mbdmaster' ),
			    'section'  => 'mbdmaster_twitter_feed_section',
			    'settings' => 'mbdmaster_twitter_feed_id',
		 	) 
	 	) 
 	);

	/*
	 * Other
	 */

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'baindesign324_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _mbbasetheme_customize_preview_js() {
	wp_enqueue_script( '_mbbasetheme_customizer', get_template_directory_uri() . '/assets/js/custom/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_mbbasetheme_customize_preview_js' );

function _mbbasethemeremove_customizer_settings( $wp_customize ){

	$wp_customize->remove_panel('nav_menus');
	$wp_customize->remove_panel('colors');
	$wp_customize->remove_panel('header_image');
	$wp_customize->remove_panel('background_image');

}
add_action( 'customize_register', '_mbbasethemeremove_customizer_settings', 20 );
