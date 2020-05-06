<?php

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

	// $wp_customize->add_setting( 'header_textcolor' , array(
	//     'default'   => '#000000',
	//     'transport' => 'refresh',
	// ) );

	// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	// 	'label'      => __( 'Header Color', 'mytheme' ),
	// 	'section'    => 'contacts_section',
	// 	'settings'   => 'header_textcolor',
	// ) ) );


 	// Sanitize text
	function sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}
 	// No Sanitize text
	function no_sanitize_text( $text ) {
	    return $text;
	}

	/* Contacts */

	$wp_customize->add_section( 'contacts_section' , array(
	    'title'      => __( 'Contacts', 'mytheme' ),
	    'priority'   => 30,
	) );


	$wp_customize->add_setting( 'contacts_headline', array(
		 'default'           => __( 'Get<br>in touch<br><em>today</em>.', 'mytheme' ),
		 'sanitize_callback' => 'no_sanitize_text'
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_headline',
		    array(
		        'label'    => __( 'Headline', 'mytheme' ),
		        'input_attrs' => array(
                    'placeholder' => __( 'Get<br>in touch<br><em>today</em>.', 'directorist' ),
                ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_headline',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'contacts_phone', array(
		 'default'           => __( '(312) 532-8929', 'mytheme' ),
		 'sanitize_callback' => 'no_sanitize_text'
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_phone',
		    array(
		        'label'    => __( 'Phone number', 'mytheme' ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_phone',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'contacts_email', array(
		 'default'           => __( 'info@berdanrealestate.com', 'mytheme' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_email',
		    array(
		        'label'    => __( 'Email address', 'mytheme' ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_email',
		        'type'     => 'text'
		    )
	    )
	);


	$wp_customize->add_setting( 'contacts_location', array(
		 'sanitize_callback' => 'no_sanitize_text',
		 'default' => '
                <a class="address" href="https://www.google.com/maps?q=1229+N+Branch+St+%23219+Chicago,+IL+60642&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiMjNuHuNvXAhXD54MKHWUPBjMQ_AUICigB" target="_blank">
                    <address class="t-body address__address">
                      1229 N. North Branch St.<br />#312<br />Chicago, IL 60642
                    </address>
                  </a>'
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_location',
		    array(
		        'label'    => __( 'Location', 'mytheme' ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_location',
		        'type'     => 'text'
		    )
	    )
	);








	/* Footer */

	$wp_customize->add_section( 'footer_section' , array(
	    'title'      => __( 'Footer', 'mytheme' ),
	    'priority'   => 30,
	) );


	$wp_customize->add_setting('footer_logo', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label' => __( 'Footer Logo', 'theme-slug' ),
		'section' => 'footer_section',
		'settings' => 'footer_logo',
		))
	);


	$wp_customize->add_setting( 'footer_copyright', array(
		 'default'           => __( '©2020 Berdan Real Estate', 'mytheme' ),
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'footer_copyright',
		    array(
		        'label'    => __( 'Copyright', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'footer_copyright',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'instagram_link', array(
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'instagram_link',
		    array(
		        'label'    => __( 'Instagram link', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'instagram_link',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'facebook_link', array(
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facebook_link',
		    array(
		        'label'    => __( 'Facebook link', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'facebook_link',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'linkedin_link', array(
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'linkedin_link',
		    array(
		        'label'    => __( 'LinkedIn link', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'linkedin_link',
		        'type'     => 'text'
		    )
	    )
	);



	$wp_customize->add_setting( 'footer_contacts_title', array(
		 'sanitize_callback' => '',
		 'default'           => __( 'Contact us', 'mytheme' ),
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'footer_contacts_title',
		    array(
		        'label'    => __( 'Contacts title', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'footer_contacts_title',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'footer_contacts_link', array(
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'footer_contacts_link',
		    array(
		        'label'    => __( 'Contacts link', 'mytheme' ),
		        'section'  => 'footer_section',
		        'settings' => 'footer_contacts_link',
		        'type'     => 'text'
		    )
	    )
	);

}
add_action( 'customize_register', 'mytheme_customize_register' );