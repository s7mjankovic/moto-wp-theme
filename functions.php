<?php 


	if (isset($_GET['lang']) && trim($_GET['lang'] != '')) {
         $lang = trim($_GET['lang']);
    } else {
         $lang = 'en';
    }

    

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'menus' );

	include( 'vendor/front_end_loaders/FrontLoadStyles.php' );
	 $styles_load = new FrontLoadStyles();
	 add_action( 'wp_enqueue_scripts', array( $styles_load, 'load' ) );
	 //Include scripts for OTRS theme
	 include( 'vendor/front_end_loaders/FrontLoadScripts.php' );
	 $scripts_load = new FrontLoadScripts();
	 add_action( 'wp_enqueue_scripts', array( $scripts_load, 'load' ) );


	/**
	 * @ register menu
	 */
	$allLanguagesArray = explode(',',get_option('language_input'));
	foreach ($allLanguagesArray as $langMenu) {
		register_nav_menus( array(
			trim( $langMenu) =>  __('Main menu ' . trim(strtoupper( $langMenu)) )
		) );	
	}


	/**
	 * @ Customizer 
	 */

	include( "vendor/customiser/customiser_options.php" );

	/**
	 * @ Testimonials Front page
	 */
	include( "vendor/post_type/testimonials.php" );
	add_action( 'init', 'moto_testimonials', 0 );

	include( "vendor/meta/testimonials.php" );
	add_action( 'admin_menu', 'wpb_create_meta_box' );
	add_action( 'save_post', 'wpb_save_meta_box' );

	
	/**
	 * @ NEW RICH TEXTAREA IN POST/PAGES
	 */
	include( "vendor/meta/extra-rich-textarea.php" );



	/**
	 * @ ADDING THEME OPTIONS ( Language )
	 */
	include( "vendor/settings/theme_settings.php" );






