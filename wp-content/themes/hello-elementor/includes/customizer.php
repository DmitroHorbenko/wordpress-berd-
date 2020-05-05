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


	/* Contacts */

	$wp_customize->add_section( 'contacts_section' , array(
	    'title'      => __( 'Contacts', 'mytheme' ),
	    'priority'   => 30,
	) );


	$wp_customize->add_setting( 'contacts_headline', array(
		 'default'           => __( 'Get in touch today.', 'mytheme' ),
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_headline',
		    array(
		        'label'    => __( 'Headline', 'mytheme' ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_headline',
		        'type'     => 'text'
		    )
	    )
	);

	$wp_customize->add_setting( 'contacts_phone', array(
		 'default'           => __( '(312) 532-8929', 'mytheme' ),
		 'sanitize_callback' => ''
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
		 'sanitize_callback' => ''
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


	$wp_customize->add_setting( 'contacts_additional', array(
		 'sanitize_callback' => ''
	) );
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'contacts_additional',
		    array(
		        'label'    => __( 'Additional', 'mytheme' ),
		        'section'  => 'contacts_section',
		        'settings' => 'contacts_additional',
		        'type'     => 'text'
		    )
	    )
	);








	/* Footer */

	$wp_customize->add_section( 'footer_section' , array(
	    'title'      => __( 'Footer', 'mytheme' ),
	    'priority'   => 30,
	) );


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