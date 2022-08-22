<?php

function wpr_add_style() {
    wp_enqueue_style('wpr-academy-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpr_add_style');

function register_software_cpt() {

	$args_dom = array(
		'labels' 		=> array(
			'name' 				=> __( 'Domains', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Domain', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Domains' ),
			'all_items' 		=> __( 'All Domains' ),
			'parent_item' 		=> __( 'Parent Domain' ),
			'parent_item_colon' => __( 'Parent Domain:' ),
			'edit_item' 		=> __( 'Edit Domain' ),
			'update_item' 		=> __( 'Update Domain' ),
			'add_new_item'		=> __( 'Add New Domain' ),
			'new_item_name' 	=> __( 'New Domain' ),
			'menu_name' 		=> __( 'Domains' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'domain'
		)
	);
	register_taxonomy( 'domain', array( 'domain' ), $args_dom );

	$args_cl = array(
		'labels' 		=> array(
			'name' 				=> __( 'Coding languages', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Coding language', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Coding languages' ),
			'all_items' 		=> __( 'All Coding languages' ),
			'parent_item' 		=> __( 'Parent Coding language' ),
			'parent_item_colon' => __( 'Parent Coding language:' ),
			'edit_item' 		=> __( 'Edit Coding language' ),
			'update_item' 		=> __( 'Update Coding language' ),
			'add_new_item'		=> __( 'Add New Coding language' ),
			'new_item_name' 	=> __( 'New Coding language Name' ),
			'menu_name' 		=> __( 'Coding languages' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'codlang'
		)
	);
	register_taxonomy( 'codlang', array( 'codlang' ), $args_cl );

	$args = array(
		'label'               => __( 'Software', '' ),
		'labels'              => array(
			'name'                  => __( 'Software', '' ),
			'singular_name'         => __( 'Software', '' ),
			'featured_image'        => __( 'Software Image', '' ),
			'set_featured_image'    => __( 'Set Software Image', '' ),
			'remove_featured_image' => __( 'Remove Software Image', '' ),
			'use_featured_image'    => __( 'Use Software Image', '' ),
			'add_new_item'          => 'Add new Software',
			'add_new'               => 'Add Software',
			'edit_item'             => 'Edit Software',
			'view_item'             => 'View Software',
			'view_items'            => 'View Software',
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => false,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'          => array( 'domain', 'codlang' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
	);
	register_post_type( 'software', $args );

}
add_action( 'init', 'register_software_cpt' );

function register_engineer_cpt() {
	
	$args_sl = array(
		'labels' 		=> array(
			'name' 				=> __( 'Spoken languages', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Spoken language', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Spoken languages' ),
			'all_items' 		=> __( 'All Spoken languages' ),
			'parent_item' 		=> __( 'Parent Spoken language' ),
			'parent_item_colon' => __( 'Parent Spoken language:' ),
			'edit_item' 		=> __( 'Edit Spoken language' ),
			'update_item' 		=> __( 'Update Spoken language' ),
			'add_new_item'		=> __( 'Add New Spoken language' ),
			'new_item_name' 	=> __( 'New Spoken language Name' ),
			'menu_name' 		=> __( 'Spoken languages' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'rewrite'				=> array(
			'slug'	=> 'spoklang'
		)
	);
	register_taxonomy( 'spoklang', array( 'spoklang' ), $args_sl );

	$args_hb = array(
		'labels' 		=> array(
			'name' 				=> __( 'Hobbies', 'taxonomy general name' ),
			'singular_name' 	=> __( 'Hobby', 'taxonomy singular name' ),
			'search_items' 		=>  __( 'Search Hobbies' ),
			'all_items' 		=> __( 'All Hobbies' ),
			'parent_item' 		=> __( 'Parent Hobby' ),
			'parent_item_colon' => __( 'Parent Hobby:' ),
			'edit_item' 		=> __( 'Edit Hobby' ),
			'update_item' 		=> __( 'Update Hobby' ),
			'add_new_item'		=> __( 'Add New Hobby' ),
			'new_item_name' 	=> __( 'New Hobby' ),
			'menu_name' 		=> __( 'Hobbies' )
		),
		'hierarchical'			=> true,
		'has_archive'			=> true,
		'show_admin_column'		=> true,
		'show_ui'				=> true,
		'show_in_rest'			=> true,
		'query_var' 			=> true,
		'rewrite'				=> array(
			'slug'	=> 'hobby'
		)
	);
	register_taxonomy( 'hobby', array( 'hobby' ), $args_hb );

	$args = array(
		'label'               => __( 'Engineers', '' ),
		'labels'              => array(
			'name'                  => __( 'Engineers', '' ),
			'singular_name'         => __( 'Engineer', '' ),
			'featured_image'        => __( 'Engineer Image', '' ),
			'set_featured_image'    => __( 'Set Engineer Image', '' ),
			'remove_featured_image' => __( 'Remove Engineer Image', '' ),
			'use_featured_image'    => __( 'Use Engineer Image', '' ),
			'add_new_item'          => 'Add new Engineer',
			'add_new'               => 'Add Engineer',
			'edit_item'             => 'Edit Engineer',
			'view_item'             => 'View Engineer',
			'view_items'            => 'View Engineers',
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array( 'spoklang', 'hobby' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
	);
	register_post_type( 'engineer', $args );

	add_theme_support( 'post-thumbnails', array( 'engineer' ) );

}
add_action( 'init', 'register_engineer_cpt' );