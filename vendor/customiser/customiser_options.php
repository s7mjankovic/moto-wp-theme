<?php

function moto_custom_settings( $wp_customize ) {
	$wp_customize->add_section( 'moto_settings',
		array(
			'title'       => __( 'Moto theme settings', 'moto' ),
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
		)
	) );


}

/**
*@param $wp_customize header
*/
function moto_header_section( $wp_customize ) {

	global $lang;

	$wp_customize->add_section( 'moto_header',
		array(
			'title'       => __( 'Moto header - ' . strtoupper($lang) , 'moto' ),
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
			'label'    => __( 'Header image - ' . strtoupper($lang) , 'moto' ),
			'section'  => 'moto_header',
			'settings' => 'moto_header_image',
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_header_title_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_title_'.$lang,
			array(
				'label'    => __( 'Heading - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_title_'.$lang,
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_header_description_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_description_'.$lang,
			array(
				'label'    => __( 'Description - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_description_'.$lang,
				'type' => 'textarea'
			)
		)
	);
	// button text
	$wp_customize->add_setting(
		'moto_header_button_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_button_'.$lang,
			array(
				'label'    => __( 'Button text - ' . strtoupper($lang), 'moto'  ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_button_'.$lang,
			)
		)
	);
	// link
	$wp_customize->add_setting(
		'moto_header_link_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_header_link_'.$lang,
			array(
				'label'    => __( 'Button link - ' . strtoupper($lang) , 'moto' ),
				'section'  => 'moto_header',
				'settings' => 'moto_header_link_'.$lang,
			)
		)
	);
	
	// left image
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
			'label'    => __( 'Header left image - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_header',
			'settings' => 'moto_header_left_image',
		)
	) );
}

/**
*@param $wp_customize ABOUT
*/
function moto_about_section( $wp_customize ) {
	global $lang;

	$wp_customize->add_section( 'moto_about',
		array(
			'title'       => __( 'Moto about', 'moto' ),
			'description' => __( 'Allows to customise Moto about section.', 'moto' ),
		)
	);
	$wp_customize->add_setting('moto_about_heading_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_heading_'.$lang,
			array(
				'label'    => __( 'About headline - ' . strtoupper($lang), 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_heading_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'First block icon - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon1',
			)
		) 
	);
	$wp_customize->add_setting('moto_about_title1_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title1_'.$lang,
			array(
				'label'    => __( 'First block title - ' . strtoupper($lang), 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title1_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description1_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description1_'.$lang,
			array(
				'label'    => __( 'First block description - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description1_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'Second block icon - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon2',
			)
		) 
	);
	$wp_customize->add_setting('moto_about_title2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title2_'.$lang,
			array(
				'label'    => __( 'Second block title - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title2_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description2_'.$lang,
			array(
				'label'    => __( 'Second block description - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description2_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'Third block icon - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon3',
			)
		) 
	);
	$wp_customize->add_setting('moto_about_title3_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title3_'.$lang,
			array(
				'label'    => __( 'Third block title - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title3_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description3_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description3_'.$lang,
			array(
				'label'    => __( 'Third block description - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description3_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'Fourth block icon - ' .strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon4',
			)
		)
	);
	$wp_customize->add_setting('moto_about_title4_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title4_'.$lang,
			array(
				'label'    => __( 'Fourth block title - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title4_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description4_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description4_'.$lang,
			array(
				'label'    => __( 'Fourth block description - ' . strtoupper($lang), 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description4_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'Fifth block icon - ' .strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon5',
			)
		) 
	);
	$wp_customize->add_setting('moto_about_title5_'. $lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title5_'. $lang,
			array(
				'label'    => __( 'Fifth block title - ' , strtoupper($lang), 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title5_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description5_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description5_'.$lang,
			array(
				'label'    => __( 'Fifth block description - ' .strtoupper($lang) , 'moto'),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description5_'.$lang,
				'type' => 'textarea'
			)
		)
	);
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
				'label'    => __( 'Sixth block icon - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_icon6',
			)
		) 
	);
	$wp_customize->add_setting('moto_about_title6_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_title6_'. $lang,
			array(
				'label'    => __( 'Sixth block title - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_title6_'.$lang,
			)
		)
	);
	$wp_customize->add_setting('moto_about_description6_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_about_description6_'.$lang,
			array(
				'label'    => __( 'Sixth block description - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_about',
				'settings' => 'moto_about_description6_'.$lang,
				'type' => 'textarea'
			)
		)
	);
}


/**
*@param $wp_customize GET MY QUOTE
*/
function moto_quote_section( $wp_customize ) {
	global $lang;

	$wp_customize->add_section( 'moto_quote',
		array(
			'title'       => __( 'Moto Get My Quote', 'moto' ),
			'description' => __( 'Allows to customise Moto Get My Quote section.', 'moto' ),
		)
	);
	// first
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
			'label'    => __( 'First block icon - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_quote',
			'settings' => 'moto_quote_icon1',
		)
	) );
	$wp_customize->add_setting(
		'moto_quote_title1_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_title1_'.$lang,
			array(
				'label'    => __( 'First block title -' . strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_title1_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_quote_description1_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_description1_'.$lang,
			array(
				'label'    => __( 'First block description - ' . strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_description1_'.$lang,
				'type' => 'textarea'
			)
		)
	);
	// second
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
			'label'    => __( 'Second block icon - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_quote',
			'settings' => 'moto_quote_icon2',
		)
	) );
	// title
	$wp_customize->add_setting(
		'moto_quote_title2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_title2_'.$lang,
			array(
				'label'    => __( 'Second block title - ' . strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_title2_'.$lang,
			)
		)
	);
	// description
	$wp_customize->add_setting(
		'moto_quote_description2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_description2_'.$lang,
			array(
				'label'    => __( 'Second block description -'. strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_description2_'.$lang,
				'type' => 'textarea'
			)
		)
	);
	$wp_customize->add_setting(
		'moto_quote_button_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_button_'.$lang,
			array(
				'label'    => __( 'Button text - ' . strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_button_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_quote_link_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_quote_link_'.$lang,
			array(
				'label'    => __( 'Get My Quote link - ' . strtoupper($lang) ),
				'section'  => 'moto_quote',
				'settings' => 'moto_quote_link_'.$lang,
			)
		)
	);

}

/**
* @param $wp_customize PRICING
*/
function moto_pricing_section( $wp_customize ) {
	global $lang;

	$wp_customize->add_section( 'moto_pricing',
		array(
			'title'       => __( 'Moto pricing', 'moto' ),
			'description' => __( 'Allows to customise Moto pricing section.', 'moto' ),
		)
	);
	$wp_customize->add_setting(
		'moto_pricing_heading_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);

	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_pricing_heading_'.$lang,
			array(
				'label'    => __( 'Pricing heading - '. strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_pricing_heading_'.$lang,
				'type' => 'textarea'
			)
		)
	);
	$wp_customize->add_setting(
		'moto_pricing_subheading_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_pricing_subheading_'.$lang,
			array(
				'label'    => __( 'Pricing subheading - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_pricing_subheading_'.$lang,
				'type' => 'textarea'
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_title_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_title_'.$lang,
			array(
				'label'    => __( 'Top heading - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_title_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_monthly_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_monthly_'.$lang,
			array(
				'label'    => __( 'Monthly price &euro; - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_monthly_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_title2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_title2_'.$lang,
			array(
				'label'    => __( 'Bottom heading - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_title2_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_included_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_included_'.$lang,
			array(
				'label'    => __( 'Include #1 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_included_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_included2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_included2_'.$lang,
			array(
				'label'    => __( 'Include #2 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_included2_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_button_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_button_'.$lang,
			array(
				'label'    => __( 'Button text - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_button_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_price_link_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_price_link_'.$lang,
			array(
				'label'    => __( 'SIGN IN link - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_price_link_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_title_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_title_'.$lang,
			array(
				'label'    => __( 'Top heading - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_title_'.$lang,
			)
		)
	);

	$wp_customize->add_setting(
		'moto_user_monthly_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_monthly_'.$lang,
			array(
				'label'    => __( '+ every user monthly price &euro; - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_monthly_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_title2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_title2_'.$lang,
			array(
				'label'    => __( 'Bottom heading - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_title2_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_included_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_included_'.$lang,
			array(
				'label'    => __( 'Include #1 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_included_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_included2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_included2_'.$lang,
			array(
				'label'    => __( 'Include #2 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_included2_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_included3_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_included3_'.$lang,
			array(
				'label'    => __( 'Include #3 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_included3_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_included4_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_included4_'.$lang,
			array(
				'label'    => __( 'Include #4 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_included4_'.$lang,
			)
		)
	);
	$wp_customize->add_setting(
		'moto_user_included5_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_user_included5_'.$lang,
			array(
				'label'    => __( 'Include #5 - ' . strtoupper($lang) , 'moto'),
				'section'  => 'moto_pricing',
				'settings' => 'moto_user_included5_'.$lang,
			)
		)
	);
	
}


/**
*@param $wp_customize OFFER
*/
function moto_offer_section( $wp_customize ) {
	global $lang;

	$wp_customize->add_section( 'moto_offer',
		array(
			'title'       => __( 'Moto offer', 'moto' ),
			'description' => __( 'Allows to customise Moto offer section.', 'moto' ),
		)
	);
	$wp_customize->add_setting(
		'moto_offer_heading_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_heading_'.$lang,
			array(
				'label'    => __( 'Offer heading -' . strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_heading_'.$lang,
				'type' => 'textarea',
			)
		)
	);
	$wp_customize->add_setting(
		'moto_offer_subheading_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_subheading_'.$lang,
			array(
				'label'    => __( 'Offer subheading - ' .strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_subheading_'.$lang,
				'type' => 'textarea',
			)
		)
	);
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
			'label'    => __( 'First block icon - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon1',
		)
	) 
	);
	$wp_customize->add_setting(
		'moto_offer_title1_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title1_'.$lang,
			array(
				'label'    => __( 'First block title - ' . strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title1_'.$lang,
			)
		)
	);
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
			'label'    => __( 'Second block icon - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon2',
		)
	) 
	);
	$wp_customize->add_setting(
		'moto_offer_title2_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title2_'.$lang,
			array(
				'label'    => __( 'Second block title - ' . strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title2_'.$lang,
			)
		)
	);
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
			'label'    => __( 'Third block icon - '. strtoupper($lang), 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon3',
		)
	) 
	);
	$wp_customize->add_setting(
		'moto_offer_title3_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title3_'.$lang,
			array(
				'label'    => __( 'Third block title - ' . strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title3_'.$lang,
			)
		)
	);
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
			'label'    => __( 'Fourth block icon - ' . strtoupper($lang), 'moto' ),
			'section'  => 'moto_offer',
			'settings' => 'moto_offer_icon4',
		)
	) 
	);
	$wp_customize->add_setting (
		'moto_offer_title4_'.$lang,
		array(
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'postMessage',
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'moto_offer_title4_'.$lang,
			array(
				'label'    => __( 'Fourth block title - ' . strtoupper($lang) ),
				'section'  => 'moto_offer',
				'settings' => 'moto_offer_title4_'.$lang,
			)
		)
	);

}

	/**
	*@param $wp_customize TEASER TRACKING
	*/
	function moto_teaser_section( $wp_customize ) {
		global $lang;

		$wp_customize->add_section( 'moto_teaser',
			array(
				'title'       => __( 'Moto teaser tracking', 'moto' ),
				'description' => __( 'Allows to customise Moto teaser tracking section.', 'moto' ),
			)
		);
		// heading
		$wp_customize->add_setting(
			'moto_teaser_heading_'.$lang,
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser_heading_'.$lang,
				array(
					'label'    => __( 'Teaser tracking heading - ' .strtoupper($lang)  ),
					'section'  => 'moto_teaser',
					'settings' => 'moto_teaser_heading_'.$lang,
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
				'label'    => __( 'teaser tracking image - ' . strtoupper($lang), 'moto' ),
				'section'  => 'moto_teaser',
				'settings' => 'moto_teaser_image',
			)
		) );
	}

	/**
	*@param $wp_customize TEASER Quote
	*/
	function moto_teaser2_section( $wp_customize ) {
		global $lang;

		$wp_customize->add_section( 'moto_teaser2',
			array(
				'title'       => __( 'Moto teaser Get My Quote', 'moto' ),
				'description' => __( 'Allows to customise Moto teaser Get My Quote section.', 'moto' ),
			)
		);
		// heading
		$wp_customize->add_setting(
			'moto_teaser2_heading_'.$lang,
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_heading_'.$lang,
				array(
					'label'    => __( 'Teaser tracking heading - ' . strtoupper($lang) ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_heading_'.$lang,
					'type' => 'textarea'
				)
			)
		);
		$wp_customize->add_setting(
			'moto_teaser2_subheading_'.$lang,
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_subheading_'.$lang,
				array(
					'label'    => __( 'Teaser tracking subheading - ' . strtoupper($lang) ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_subheading_'.$lang,
					'type' => 'textarea'
				)
			)
		);
		// button text
		$wp_customize->add_setting(
			'moto_teaser2_button_'.$lang,
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_button_'.$lang,
				array(
					'label'    => __( 'Button text - ' . strtoupper($lang) ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_button_'.$lang,
				)
			)
		);
		// link
		$wp_customize->add_setting(
			'moto_teaser2_link_'.$lang,
			array(
				'type'       => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport'  => 'postMessage',
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
				$wp_customize,
				'moto_teaser2_link_'.$lang,
				array(
					'label'    => __( 'Teaser Get My Quote link - ' . strtoupper($lang) ),
					'section'  => 'moto_teaser2',
					'settings' => 'moto_teaser2_link_'.$lang,
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
				'title'       => __( 'Moto footer', 'moto' ),
				'description' => __( 'Allows to customise Moto ooter section.', 'moto' ),
			)
		);
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
			) 
		);
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
			) 
		);
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
			) 
		);
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



// logo settings
	add_action( 'customize_register', 'moto_custom_settings' );
	function moto_theme_logo() {
		return get_theme_mod( 'moto_logo' );
	}
	function moto_theme_responsive_logo() {
		return get_theme_mod( 'moto_logo_responsive' );
	}
	function moto_favicon() {
		return get_theme_mod( 'moto_favicon' );
	}
	// header settings
	add_action( 'customize_register', 'moto_header_section' );
	function moto_header_image() {
		return get_theme_mod( 'moto_header_image' );
	}
	function moto_header_title($lang) {
		return get_theme_mod( 'moto_header_title_'.$lang );
	}
	function moto_header_description($lang) {
		return get_theme_mod( 'moto_header_description_'.$lang );
	}
	function moto_header_button($lang) {
		return get_theme_mod( 'moto_header_button_'.$lang );
	}
	function moto_header_link($lang) {
		return get_theme_mod( 'moto_header_link_'.$lang );
	}
	function moto_header_left_image() {
		return get_theme_mod( 'moto_header_left_image' );
	}
	// ABOUT settings
	add_action( 'customize_register', 'moto_about_section' );
	function moto_about_heading($lang) {
		return get_theme_mod( 'moto_about_heading_'.$lang );
	}
	function moto_about_icon1() {
		return get_theme_mod( 'moto_about_icon1' );
	}
	function moto_about_title1($lang) {
		return get_theme_mod( 'moto_about_title1_'.$lang );
	}
	function moto_about_description1($lang) {
		return get_theme_mod( 'moto_about_description1_'.$lang );
	}
	function moto_about_icon2() {
		return get_theme_mod( 'moto_about_icon2' );
	}
	function moto_about_title2($lang) {
		return get_theme_mod( 'moto_about_title2_'.$lang );
	}
	function moto_about_description2($lang) {
		return get_theme_mod( 'moto_about_description2_'.$lang );
	}
	function moto_about_icon3() {
		return get_theme_mod( 'moto_about_icon3' );
	}
	function moto_about_title3($lang) {
		return get_theme_mod( 'moto_about_title3_'.$lang );
	}
	function moto_about_description3($lang) {
		return get_theme_mod( 'moto_about_description3_'.$lang );
	}
	function moto_about_icon4() {
		return get_theme_mod( 'moto_about_icon4' );
	}
	function moto_about_title4($lang) {
		return get_theme_mod( 'moto_about_title4_'.$lang );
	}
	function moto_about_description4($lang) {
		return get_theme_mod( 'moto_about_description4_'.$lang );
	}
	function moto_about_icon5() {
		return get_theme_mod( 'moto_about_icon5' );
	}
	function moto_about_title5($lang) {
		return get_theme_mod( 'moto_about_title5_'.$lang );
	}
	function moto_about_description5($lang) {
		return get_theme_mod( 'moto_about_description5_'.$lang );
	}
	function moto_about_icon6() {
		return get_theme_mod( 'moto_about_icon6' );
	}
	function moto_about_title6($lang) {
		return get_theme_mod( 'moto_about_title6_'.$lang );
	}
	function moto_about_description6($lang) {
		return get_theme_mod( 'moto_about_description6_'.$lang );
	}
	// GET MY QUOTE settings
	add_action( 'customize_register', 'moto_quote_section' );
	function moto_quote_icon1() {
		return get_theme_mod( 'moto_quote_icon1' );
	}
	function moto_quote_title1($lang) {
		return get_theme_mod( 'moto_quote_title1_'.$lang );
	}
	function moto_quote_description1($lang) {
		return get_theme_mod( 'moto_quote_description1_'.$lang );
	}
	function moto_quote_icon2() {
		return get_theme_mod( 'moto_quote_icon2' );
	}
	function moto_quote_title2($lang) {
		return get_theme_mod( 'moto_quote_title2_'.$lang );
	}
	function moto_quote_description2($lang) {
		return get_theme_mod( 'moto_quote_description2_'.$lang );
	}
	function moto_quote_link($lang) {
		return get_theme_mod( 'moto_quote_link_'.$lang );
	}
	function moto_quote_button($lang) {
		return get_theme_mod( 'moto_quote_button_'.$lang );
	}
	// PRICING settings
	add_action( 'customize_register', 'moto_pricing_section' );
	function moto_pricing_heading($lang) {
		return get_theme_mod( 'moto_pricing_heading_'.$lang );
	}
	function moto_pricing_subheading($lang) {
		return get_theme_mod( 'moto_pricing_subheading_'.$lang );
	}
	  // Monthly
	function moto_price_title($lang) {
		return get_theme_mod( 'moto_price_title_'.$lang );
	}
	function moto_price_monthly($lang) {
		return get_theme_mod( 'moto_price_monthly_'.$lang );
	}
	function moto_price_title2($lang) {
		return get_theme_mod( 'moto_price_title2_'.$lang );
	}
	function moto_price_included($lang) {
		return get_theme_mod( 'moto_price_included_'.$lang );
	}
	function moto_price_included2($lang) {
		return get_theme_mod( 'moto_price_included2_'.$lang );
	}
	function moto_price_button($lang) {
		return get_theme_mod( 'moto_price_button_'.$lang );
	}
	function moto_price_link($lang) {
		return get_theme_mod( 'moto_price_link_'.$lang );
	}
		// each user +
	function moto_user_title($lang) {
		return get_theme_mod( 'moto_user_title_'.$lang );
	}
	function moto_user_monthly($lang) {
		return get_theme_mod( 'moto_user_monthly_'.$lang );
	}
	function moto_user_title2($lang) {
		return get_theme_mod( 'moto_user_title2_'.$lang );
	}
	function moto_user_included($lang) {
		return get_theme_mod( 'moto_user_included_'.$lang );
	}
	function moto_user_included2($lang) {
		return get_theme_mod( 'moto_user_included2_'.$lang );
	}
	function moto_user_included3($lang) {
		return get_theme_mod( 'moto_user_included3_'.$lang );
	}
	function moto_user_included4($lang) {
		return get_theme_mod( 'moto_user_included4_'.$lang );
	}
	function moto_user_included5($lang) {
		return get_theme_mod( 'moto_user_included5_'.$lang );
	}

	// OFFER settings
	add_action( 'customize_register', 'moto_offer_section' );
	function moto_offer_heading($lang) {
		return get_theme_mod( 'moto_offer_heading_'. $lang);
	}
	function moto_offer_subheading($lang) {
		return get_theme_mod( 'moto_offer_subheading_'.$lang);
	}
	function moto_offer_icon1() {
		return get_theme_mod( 'moto_offer_icon1');
	}
	function moto_offer_title1($lang) {
		return get_theme_mod( 'moto_offer_title1_'.$lang);
	}
	function moto_offer_icon2() {
		return get_theme_mod( 'moto_offer_icon2');
	}
	function moto_offer_title2($lang) {
		return get_theme_mod( 'moto_offer_title2_'.$lang);
	}
	function moto_offer_icon3() {
		return get_theme_mod( 'moto_offer_icon3');
	}
	function moto_offer_title3($lang) {
		return get_theme_mod( 'moto_offer_title3_'.$lang);
	}
	function moto_offer_icon4() {
		return get_theme_mod( 'moto_offer_icon4');
	}
	function moto_offer_title4($lang) {
		return get_theme_mod( 'moto_offer_title4_'.$lang);
	}
	// TEASER TRACKING settings
	add_action( 'customize_register', 'moto_teaser_section' );
	function moto_teaser_heading($lang) {
		return get_theme_mod( 'moto_teaser_heading_'.$lang);
	}
	function moto_teaser_image() {
		return get_theme_mod( 'moto_teaser_image');
	}
	// TEASER MY QUOTE settings
	add_action( 'customize_register', 'moto_teaser2_section' );
	function moto_teaser2_heading($lang) {
		return get_theme_mod( 'moto_teaser2_heading_'.$lang);
	}
	function moto_teaser2_subheading($lang) {
		return get_theme_mod( 'moto_teaser2_subheading_'.$lang);
	}
	function moto_teaser2_button($lang) {
		return get_theme_mod( 'moto_teaser2_button_'.$lang );
	}
	function moto_teaser2_link($lang) {
		return get_theme_mod( 'moto_teaser2_link_'.$lang);
	}
	// FOOTER settings
	add_action( 'customize_register', 'moto_footer_section' );
	function moto_footer_logo() {
		return get_theme_mod( 'moto_footer_logo');
	}
	function moto_facebook_icon() {
		return get_theme_mod( 'moto_facebook_icon');
	}
	function moto_facebook() {
		return get_theme_mod( 'moto_facebook');
	}
	function moto_twitter_icon() {
		return get_theme_mod( 'moto_twitter_icon');
	}
	function moto_twitter() {
		return get_theme_mod( 'moto_twitter');
	}
	function moto_google_icon() {
		return get_theme_mod( 'moto_google_icon');
	}
	function moto_google() {
		return get_theme_mod( 'moto_google');
	}
	function moto_youtube_icon() {
		return get_theme_mod( 'moto_youtube_icon');
	}
	function moto_youtube() {
		return get_theme_mod( 'moto_youtube');
	}
 
