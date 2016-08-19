<?php 

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

	function register_theme_menus() {
		register_nav_menus(
			array(
				'main_menu' => __( 'Main menu' )
			)
		);
	}
	add_action('init', 'register_theme_menus');



	include( "vendor/customiser/customiser_options.php" );

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
	function moto_header_title() {
		return get_theme_mod( 'moto_header_title' );
	}
	function moto_header_description() {
		return get_theme_mod( 'moto_header_description' );
	}
	function moto_header_link() {
		return get_theme_mod( 'moto_header_link' );
	}
	function moto_header_left_image() {
		return get_theme_mod( 'moto_header_left_image' );
	}
	// ABOUT settings
	add_action( 'customize_register', 'moto_about_section' );
	function moto_about_heading() {
		return get_theme_mod( 'moto_about_heading' );
	}
	function moto_about_icon1() {
		return get_theme_mod( 'moto_about_icon1' );
	}
	function moto_about_title1() {
		return get_theme_mod( 'moto_about_title1' );
	}
	function moto_about_description1() {
		return get_theme_mod( 'moto_about_description1' );
	}
	function moto_about_icon2() {
		return get_theme_mod( 'moto_about_icon2' );
	}
	function moto_about_title2() {
		return get_theme_mod( 'moto_about_title2' );
	}
	function moto_about_description2() {
		return get_theme_mod( 'moto_about_description2' );
	}
	function moto_about_icon3() {
		return get_theme_mod( 'moto_about_icon3' );
	}
	function moto_about_title3() {
		return get_theme_mod( 'moto_about_title3' );
	}
	function moto_about_description3() {
		return get_theme_mod( 'moto_about_description3' );
	}
	function moto_about_icon4() {
		return get_theme_mod( 'moto_about_icon4' );
	}
	function moto_about_title4() {
		return get_theme_mod( 'moto_about_title4' );
	}
	function moto_about_description4() {
		return get_theme_mod( 'moto_about_description4' );
	}
	function moto_about_icon5() {
		return get_theme_mod( 'moto_about_icon5' );
	}
	function moto_about_title5() {
		return get_theme_mod( 'moto_about_title5' );
	}
	function moto_about_description5() {
		return get_theme_mod( 'moto_about_description5' );
	}
	function moto_about_icon6() {
		return get_theme_mod( 'moto_about_icon6' );
	}
	function moto_about_title6() {
		return get_theme_mod( 'moto_about_title6' );
	}
	function moto_about_description6() {
		return get_theme_mod( 'moto_about_description6' );
	}
	// GET MY QUOTE settings
	add_action( 'customize_register', 'moto_quote_section' );
	function moto_quote_icon1() {
		return get_theme_mod( 'moto_quote_icon1' );
	}
	function moto_quote_title1() {
		return get_theme_mod( 'moto_quote_title1' );
	}
	function moto_quote_description1() {
		return get_theme_mod( 'moto_quote_description1' );
	}
	function moto_quote_icon2() {
		return get_theme_mod( 'moto_quote_icon2' );
	}
	function moto_quote_title2() {
		return get_theme_mod( 'moto_quote_title2' );
	}
	function moto_quote_description2() {
		return get_theme_mod( 'moto_quote_description2' );
	}
	function moto_quote_link() {
		return get_theme_mod( 'moto_quote_link' );
	}
	// PRICING settings
	add_action( 'customize_register', 'moto_pricing_section' );
	function moto_pricing_heading() {
		return get_theme_mod( 'moto_pricing_heading' );
	}
	function moto_pricing_subheading() {
		return get_theme_mod( 'moto_pricing_subheading' );
	}
	// OFFER settings
	add_action( 'customize_register', 'moto_offer_section' );
	function moto_offer_heading() {
		return get_theme_mod( 'moto_offer_heading');
	}
	function moto_offer_subheading() {
		return get_theme_mod( 'moto_offer_subheading');
	}
	function moto_offer_icon1() {
		return get_theme_mod( 'moto_offer_icon1');
	}
	function moto_offer_title1() {
		return get_theme_mod( 'moto_offer_title1');
	}
	function moto_offer_icon2() {
		return get_theme_mod( 'moto_offer_icon2');
	}
	function moto_offer_title2() {
		return get_theme_mod( 'moto_offer_title2');
	}
	function moto_offer_icon3() {
		return get_theme_mod( 'moto_offer_icon3');
	}
	function moto_offer_title3() {
		return get_theme_mod( 'moto_offer_title3');
	}
	function moto_offer_icon4() {
		return get_theme_mod( 'moto_offer_icon4');
	}
	function moto_offer_title4() {
		return get_theme_mod( 'moto_offer_title4');
	}
	// TEASER TRACKING settings
	add_action( 'customize_register', 'moto_teaser_section' );
	function moto_teaser_heading() {
		return get_theme_mod( 'moto_teaser_heading');
	}
	function moto_teaser_image() {
		return get_theme_mod( 'moto_teaser_image');
	}
	// TEASER MY QUOTE settings
	add_action( 'customize_register', 'moto_teaser2_section' );
	function moto_teaser2_heading() {
		return get_theme_mod( 'moto_teaser2_heading');
	}
	function moto_teaser2_subheading() {
		return get_theme_mod( 'moto_teaser2_subheading');
	}
	function moto_teaser2_link() {
		return get_theme_mod( 'moto_teaser2_link');
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
	




/**
 * @ Testimonials Front page
 */
	function moto_testimonials() {
		$labels = array(
			'name'                => _x( 'Testimonials', 'Post Type General Name', 'moto' ),
			'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'moto' ),
			'menu_name'           => __( 'Testimonials', 'moto' ),
			'name_admin_bar'      => __( 'Testimonial', 'moto' ),
			'parent_item_colon'   => __( 'Parent Item:', 'moto' ),
			'all_items'           => __( 'All', 'moto' ),
			'add_new_item'        => __( 'Add New Testimonial', 'moto' ),
			'add_new'             => __( 'Add New', 'moto' ),
			'new_item'            => __( 'New Testimonial', 'moto' ),
			'edit_item'           => __( 'Edit Testimonial', 'moto' ),
			'update_item'         => __( 'Update Testimonial', 'moto' ),
			'view_item'           => __( 'View Testimonial', 'moto' ),
			'search_items'        => __( 'Search Testimonial', 'moto' ),
			'not_found'           => __( 'Not found', 'moto' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'moto' ),
		);

		$args = array(
			'label'               => __( 'testimonial', 'moto' ),
			'description'         => __( 'Custom Post Types testimonials', 'moto' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'thumbnail', ),
			'taxonomies'          => array( ),
			'hierarchical'        => false,
			'public'              => false, // not show frontend as post
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-slides',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'testimonial', $args );
	}

	add_action( 'init', 'moto_testimonials', 0 );



$key = "testimonial";
$meta_boxes = array(
"position" => array(
"name" => "position",
"title" => "Position in Company",
"description" => "Enter their position in their specific company."),
"testimonial" => array(
"name" => "testimonial",
"title" => "Testimonial content",
"description" => "Enter testimonial.")

);

function wpb_create_meta_box() {
	global $key;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', ucfirst( $key ) . ' Information', 'display_meta_box', 'testimonial', 'normal', 'high' );
	}
}

function display_meta_box() {
	global $post, $meta_boxes, $key;
	?>

	<div class="form-wrap">

	<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
		foreach($meta_boxes as $meta_box) {
			$data = get_post_meta($post->ID, $key, true);
	?>
		<div class="form-field form-required">
		<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>

	<?php if($meta_box[ 'name' ] == 'testimonial') : ?>
		<textarea name="<?php echo $meta_box[ 'name' ]; ?>" value="" rows="8"><?php echo (isset($data[ $meta_box[ 'name' ] ]) ? htmlspecialchars( $data[ $meta_box[ 'name' ] ] ) : ''); ?></textarea>
	<?php else : ?>
		<input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo (isset($data[ $meta_box[ 'name' ] ]) ? htmlspecialchars( $data[ $meta_box[ 'name' ] ] ) : ''); ?>" />
		<p><?php echo $meta_box[ 'description' ]; ?></p>
	<?php endif; ?>
		</div>

		<?php } ?>

		</div>

<?php } ?>

<?php

function wpb_save_meta_box( $post_id ) {

	global $post, $meta_boxes, $key;
	foreach( $meta_boxes as $meta_box ) {
		if (isset($_POST[ $meta_box[ 'name' ] ])) {
			$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
		}
	}

	if (!isset($_POST[ $key . '_wpnonce' ])) {
		return $post_id;
	}

	if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) ) {
		return $post_id;
	}


	if ( !current_user_can( 'edit_post', $post_id )) {
		return $post_id;
	}
	update_post_meta( $post_id, $key, $data );

}
add_action( 'admin_menu', 'wpb_create_meta_box' );
add_action( 'save_post', 'wpb_save_meta_box' );





	

?>

