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

function client_fields_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args[ 'id' ] ); ?>"><?php esc_html_e( 'Edit Client Settings', 'wpr' ); ?></p>
	<?php
}

function software_fields_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args[ 'id' ] ); ?>"><?php esc_html_e( 'Edit Software Settings', 'wpr' ); ?></p>
	<?php
}

add_action(
	'admin_init',
	function() {

		register_setting( 'wpr_academy_group', 'wpr_options' );

		add_settings_section(
			'client_fields',
			'Client Fields',
			'client_fields_callback',
			'wpr_academy_group'
		);

		add_settings_field(
			'wpr_api_token',
			'Token',
			'api_token_field_callback',
			'wpr_academy_group',
			'client_fields',
			array(
				'label_for'       => 'wpr_api_token',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom'
			)
		);

		add_settings_field(
			'wpr_api_client',
			'Client ID',
			'api_client_field_callback',
			'wpr_academy_group',
			'client_fields',
			array(
				'label_for'       => 'wpr_api_client',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom'
			)
		);

		add_settings_section(
			'software_fields',
			'Software Fields',
			'software_fields_callback',
			'wpr_academy_group'
		);

		add_settings_field(
			'wpr_api_discount',
			'Price discount',
			'api_discount_field_callback',
			'wpr_academy_group',
			'software_fields',
			array(
				'label_for'       => 'wpr_api_discount',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom',
			)
		);

		add_settings_field(
			'wpr_api_period',
			'Discount period',
			'api_period_field_callback',
			'wpr_academy_group',
			'software_fields',
			array(
				'label_for'       => 'wpr_api_period',
				'class'           => 'wpr_row',
				'wpr_custom_data' => 'custom',
			)
		);

	}
);

add_action(
	'admin_menu',
	function() {

		add_menu_page(
			'API settings',
			'API options',
			'manage_options',
			'WPR_API_Settings',
			'wpr_api_pagehtml',
			'dashicons-admin-settings',
			1
		);
	}
);

function wpr_api_pagehtml() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'wpr_messages', 'wpr_message', __( 'Settings Saved', 'wpr' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'wpr_messages' );

	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "wpr_academy"
			settings_fields( 'wpr_academy_group' );

			// output setting sections and their fields
			// (sections are registered for "wpr_academy", each field is registered to a specific section)
			do_settings_sections( 'wpr_academy_group' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php

}

function api_token_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="text">
	
	<?php
}

function api_client_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="text">
	
	<?php
}

function api_discount_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args['label_for']]; ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="number">
	
	<?php
}
function api_period_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'wpr_options' );
	
	?>
	
	<input
		value="<?php echo $options[$args[ 'label_for' ]]; ?>"
		id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>"
		data-custom="<?php echo esc_attr( $args[ 'wpr_custom_data' ] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args[ 'label_for' ] ); ?>]"
		type="number">
	
	<?php
}
