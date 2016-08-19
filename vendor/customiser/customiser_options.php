<?php

function moto_custom_settings( $wp_customize ) {
	$wp_customize->add_section( 'moto_settings',
		array(
			'title'       => __( 'Moto theme settings', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto theme.', 'moto' ),
		)
	);
	// logo
	$wp_customize->add_setting( 'moto_logo',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_logo',
		array(
			'label'    => __( 'Logo image', 'moto' ),
			'section'  => 'moto_settings',
			'settings' => 'moto_logo',
			'priority' => 10,
		)
	) );
	// responsive logo
	$wp_customize->add_setting( 'moto_logo_responsive',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_logo_responsive',
		array(
			'label'    => __( 'Responsive logo image', 'moto' ),
			'section'  => 'moto_settings',
			'settings' => 'moto_logo_responsive',
			'priority' => 10,
		)
	) );
	// favicon
	$wp_customize->add_setting( 'moto_favicon',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_favicon',
		array(
			'label'    => __( 'Favicon', 'moto' ),
			'section'  => 'moto_settings',
			'settings' => 'moto_favicon',
			'priority' => 10,
		)
	) );


}

/**
*@param $wp_customize header
*/
function moto_header_section( $wp_customize ) {
	$wp_customize->add_section( 'moto_header',
		array(
			'title'       => __( 'Moto header', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto header section.', 'moto' ),
		)
	);

	// top image
	$wp_customize->add_setting( 'moto_header_image',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_header_image',
		array(
			'label'    => __( 'Header image', 'moto' ),
			'section'  => 'moto_header',
			'settings' => 'moto_header_image',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_header_title',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_title',
			array(
				'label'    => __( 'Title' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_title',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_header_description',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_description',
			array(
				'label'    => __( 'Description' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_description',
				'type' => 'textarea'
			)
		)
	);
	// link
	$wp_customize->add_setting(
		'moto_header_link',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_link',
			array(
				'label'    => __( 'Button link' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_link',
			)
		)
	);
	// left image
	// top image
	$wp_customize->add_setting( 'moto_header_left_image',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_header_left_image',
		array(
			'label'    => __( 'Header left image', 'moto' ),
			'section'  => 'moto_header',
			'settings' => 'moto_header_left_image',
			'priority' => 10,
		)
	) );
}

/**
*@param $wp_customize ABOUT
*/
function moto_about_section( $wp_customize ) {
	$wp_customize->add_section( 'moto_about',
		array(
			'title'       => __( 'Moto about', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto about section.', 'moto' ),
		)
	);
	// about heading
	$wp_customize->add_setting(
		'moto_about_heading',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_heading',
			array(
				'label'    => __( 'About headline' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_heading',
				'type' => 'textarea'
			)
		)
	);
	// first
	// icon
	$wp_customize->add_setting( 'moto_about_icon1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon1',
		array(
			'label'    => __( 'First block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon1',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title1',
			array(
				'label'    => __( 'First block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title1',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description1',
			array(
				'label'    => __( 'First block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description1',
				'type' => 'textarea'
			)
		)
	);

	// SECOND
	// icon
	$wp_customize->add_setting( 'moto_about_icon2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon2',
		array(
			'label'    => __( 'Second block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon2',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title2',
			array(
				'label'    => __( 'Second block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title2',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description2',
			array(
				'label'    => __( 'Second block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description2',
				'type' => 'textarea'
			)
		)
	);
	// THIRD
	// icon
	$wp_customize->add_setting( 'moto_about_icon3',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon3',
		array(
			'label'    => __( 'Third block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon3',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title3',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title3',
			array(
				'label'    => __( 'Third block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title3',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description3',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description3',
			array(
				'label'    => __( 'Third block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description3',
				'type' => 'textarea'
			)
		)
	);
	// FOURTH
	// icon
	$wp_customize->add_setting( 'moto_about_icon4',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon4',
		array(
			'label'    => __( 'Fourth block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon4',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title4',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title4',
			array(
				'label'    => __( 'Fourth block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title4',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description4',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description4',
			array(
				'label'    => __( 'Fourth block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description4',
				'type' => 'textarea'
			)
		)
	);
	// FIFTH
	// icon
	$wp_customize->add_setting( 'moto_about_icon5',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon5',
		array(
			'label'    => __( 'Fifth block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon5',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title5',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title5',
			array(
				'label'    => __( 'Fifth block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title5',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description5',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description5',
			array(
				'label'    => __( 'Fifth block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description5',
				'type' => 'textarea'
			)
		)
	);
	// SIXTH
	// icon
	$wp_customize->add_setting( 'moto_about_icon6',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_about_icon6',
		array(
			'label'    => __( 'Sixth block icon', 'moto' ),
			'section'  => 'moto_about',
			'settings' => 'moto_about_icon6',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_about_title6',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title6',
			array(
				'label'    => __( 'Sixth block title' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title6',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_about_description6',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description6',
			array(
				'label'    => __( 'Sixth block description' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description6',
				'type' => 'textarea'
			)
		)
	);

}


/**
*@param $wp_customize GET MY QUOTE
*/
function moto_quote_section( $wp_customize ) {
	$wp_customize->add_section( 'moto_quote',
		array(
			'title'       => __( 'Moto Get My Quote', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto Get My Quote section.', 'moto' ),
		)
	);
	// first
	// icon
	$wp_customize->add_setting( 'moto_quote_icon1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_quote_icon1',
		array(
			'label'    => __( 'First block icon', 'moto' ),
			'section'  => 'moto_quote',
			'settings' => 'moto_quote_icon1',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_quote_title1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_title1',
			array(
				'label'    => __( 'First block title' ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_title1',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_quote_description1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_description1',
			array(
				'label'    => __( 'First block description' ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_description1',
				'type' => 'textarea'
			)
		)
	);
	// second
	// icon
	$wp_customize->add_setting( 'moto_quote_icon2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_quote_icon2',
		array(
			'label'    => __( 'Second block icon', 'moto' ),
			'section'  => 'moto_quote',
			'settings' => 'moto_quote_icon2',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_quote_title2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_title2',
			array(
				'label'    => __( 'Second block title' ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_title2',
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_quote_description2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_description2',
			array(
				'label'    => __( 'Second block description' ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_description2',
				'type' => 'textarea'
			)
		)
	);
	// link
	$wp_customize->add_setting(
		'moto_quote_link',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_link',
			array(
				'label'    => __( 'Get My Quote link' ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_link',
			)
		)
	);

}


/**
*@param $wp_customize PRICING
*/
function moto_pricing_section( $wp_customize ) {
	$wp_customize->add_section( 'moto_pricing',
		array(
			'title'       => __( 'Moto pricing', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto pricing section.', 'moto' ),
		)
	);

	// heading
	$wp_customize->add_setting(
		'moto_pricing_heading',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_pricing_heading',
			array(
				'label'    => __( 'Pricing heading' ),
				'section'  => 'moto_pricing',
				'settings' => 'moto_pricing_heading',
				'type' => 'textarea'
			)
		)
	);
	// SUBheading
	$wp_customize->add_setting(
		'moto_pricing_subheading',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_pricing_subheading',
			array(
				'label'    => __( 'Pricing subheading' ),
				'section'  => 'moto_pricing',
				'settings' => 'moto_pricing_subheading',
				'type' => 'textarea'
			)
		)
	);

	// Monthly
	// price
	$wp_customize->add_setting(
		'moto_price_monthly',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_monthly',
			array(
				'label'    => __( 'Monthly price &euro;' ),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_monthly',
			)
		)
	);
	// link
	$wp_customize->add_setting(
		'moto_price_link',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_link',
			array(
				'label'    => __( 'SIGN IN link' ),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_link',
			)
		)
	);

	// Monthly + user
	// price
	$wp_customize->add_setting(
		'moto_price_user',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_user',
			array(
				'label'    => __( '+ every user monthly price &euro;' ),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_user',
			)
		)
	);
	
}


/**
*@param $wp_customize OFFER
*/
function moto_offer_section( $wp_customize ) {
	$wp_customize->add_section( 'moto_offer',
		array(
			'title'       => __( 'Moto offer', 'moto' ),
			'priority'    => 35,
			'description' => __( 'Allows to customise Moto offer section.', 'moto' ),
		)
	);

	// heading
	$wp_customize->add_setting(
		'moto_offer_heading',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_heading',
			array(
				'label'    => __( 'Offer heading' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_heading',
				'type' => 'textarea'
			)
		)
	);
	// SUBheading
	$wp_customize->add_setting(
		'moto_offer_subheading',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_subheading',
			array(
				'label'    => __( 'Offer subheading' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_subheading',
				'type' => 'textarea'
			)
		)
	);
	// first
	// icon
	$wp_customize->add_setting( 'moto_offer_icon1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_offer_icon1',
		array(
			'label'    => __( 'First block icon', 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon1',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_offer_title1',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title1',
			array(
				'label'    => __( 'First block title' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title1',
			)
		)
	);
	// second
	// icon
	$wp_customize->add_setting( 'moto_offer_icon2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_offer_icon2',
		array(
			'label'    => __( 'Second block icon', 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon2',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_offer_title2',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title2',
			array(
				'label'    => __( 'Second block title' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title2',
			)
		)
	);
	// third
	// icon
	$wp_customize->add_setting( 'moto_offer_icon3',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_offer_icon3',
		array(
			'label'    => __( 'Third block icon', 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon3',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_offer_title3',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title3',
			array(
				'label'    => __( 'Third block title' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title3',
			)
		)
	);
	// fourth
	// icon
	$wp_customize->add_setting( 'moto_offer_icon4',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'moto_offer_icon4',
		array(
			'label'    => __( 'Fourth block icon', 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon4',
			'priority' => 10,
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_offer_title4',
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title4',
			array(
				'label'    => __( 'Fourth block title' ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title4',
			)
		)
	);


	/**
	*@param $wp_customize TEASER TRACKING
	*/
	function moto_teaser_section( $wp_customize ) {
		$wp_customize->add_section( 'moto_teaser',
			array(
				'title'       => __( 'Moto teaser tracking', 'moto' ),
				'description' => __( 'Allows to customise Moto teaser tracking section.', 'moto' ),
			)
		);
		// heading
		$wp_customize->add_setting(
			'moto_teaser_heading',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser_heading',
				array(
					'label'    => __( 'Teaser tracking heading' ),
					'section'  => 'moto_teaser',
					'settings' => 'moto_teaser_heading',
					'type' => 'textarea'
				)
			)
		);
		// image
		$wp_customize->add_setting( 'moto_teaser_image',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_teaser_image',
			array(
				'label'    => __( 'teaser tracking image', 'moto' ),
				'section'  => 'moto_teaser',
				'settings' => 'moto_teaser_image',
				'priority' => 10,
			)
		) );
	}

	/**
	*@param $wp_customize TEASER Quote
	*/
	function moto_teaser2_section( $wp_customize ) {
		$wp_customize->add_section( 'moto_teaser2',
			array(
				'title'       => __( 'Moto teaser Get My Quote', 'moto' ),
				'description' => __( 'Allows to customise Moto teaser Get My Quote section.', 'moto' ),
			)
		);
		// heading
		$wp_customize->add_setting(
			'moto_teaser2_heading',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_heading',
				array(
					'label'    => __( 'Teaser tracking heading' ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_heading',
					'type' => 'textarea'
				)
			)
		);
		// SUBheading
		$wp_customize->add_setting(
			'moto_teaser2_subheading',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_subheading',
				array(
					'label'    => __( 'Teaser tracking subheading' ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_subheading',
					'type' => 'textarea'
				)
			)
		);
		// link
		$wp_customize->add_setting(
			'moto_teaser2_link',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_link',
				array(
					'label'    => __( 'Teaser Get My Quote link' ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_link',
				)
			)
		);
	}

	/**
	*@param $wp_customize FOOTER
	*/
	function moto_footer_section( $wp_customize ) {
		$wp_customize->add_section( 'moto_footer',
			array(
				'title'       => __( 'Moto teaser footer', 'moto' ),
				'description' => __( 'Allows to customise Moto ooter section.', 'moto' ),
			)
		);
		// footer logo
		$wp_customize->add_setting( 'moto_footer_logo',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_footer_logo',
			array(
				'label'    => __( 'Footer logo image', 'moto' ),
				'section'  => 'moto_footer',
				'settings' => 'moto_footer_logo'
			)
		) );
		//SOCIAL
		//facebook
		// image
		$wp_customize->add_setting( 'moto_facebook_icon',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_facebook_icon',
			array(
				'label'    => __( 'Facebook link icon', 'moto' ),
				'section'  => 'moto_footer',
				'settings' => 'moto_facebook_icon'
			)
		) );
		// link
		$wp_customize->add_setting(
			'moto_facebook',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_facebook',
				array(
					'label'    => __( 'Facebook link' ),
					'section'  => 'moto_footer',
					'settings' => 'moto_facebook',
				)
			)
		);
		//twitter
		// image
		$wp_customize->add_setting( 'moto_twitter_icon',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_twitter_icon',
			array(
				'label'    => __( 'Twitter link icon', 'moto' ),
				'section'  => 'moto_footer',
				'settings' => 'moto_twitter_icon'
			)
		) );
		// link
		$wp_customize->add_setting(
			'moto_twitter',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_twitter',
				array(
					'label'    => __( 'Twitter link' ),
					'section'  => 'moto_footer',
					'settings' => 'moto_twitter',
				)
			)
		);

		//google+
		// image
		$wp_customize->add_setting( 'moto_google_icon',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_google_icon',
			array(
				'label'    => __( 'Google+ link icon', 'moto' ),
				'section'  => 'moto_footer',
				'settings' => 'moto_google_icon'
			)
		) );
		// link
		$wp_customize->add_setting(
			'moto_google',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_google',
				array(
					'label'    => __( 'Google+ link' ),
					'section'  => 'moto_footer',
					'settings' => 'moto_google',
				)
			)
		);

		//youtube
		// image
		$wp_customize->add_setting( 'moto_youtube_icon',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'moto_youtube_icon',
			array(
				'label'    => __( 'Youtube link icon', 'moto' ),
				'section'  => 'moto_footer',
				'settings' => 'moto_youtube_icon'
			)
		) );
		// link
		$wp_customize->add_setting(
			'moto_youtube',
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_youtube',
				array(
					'label'    => __( 'Youtube link' ),
					'section'  => 'moto_footer',
					'settings' => 'moto_youtube',
				)
			)
		);

	}




}
