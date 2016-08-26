<?php

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

?>