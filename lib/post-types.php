<?php if ( ! function_exists('morrisonsjewelry_post_types') ) {

// Register Custom Post Type
function morrisonsjewelry_post_types() {

	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'morrisonsjewelry' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'morrisonsjewelry' ),
		'menu_name'           => __( 'Events', 'morrisonsjewelry' ),
		'parent_item_colon'   => __( 'Parent Item:', 'morrisonsjewelry' ),
		'all_items'           => __( 'All Events', 'morrisonsjewelry' ),
		'view_item'           => __( 'View Item', 'morrisonsjewelry' ),
		'add_new_item'        => __( 'Add New Event', 'morrisonsjewelry' ),
		'add_new'             => __( 'Add New', 'morrisonsjewelry' ),
		'edit_item'           => __( 'Edit Item', 'morrisonsjewelry' ),
		'update_item'         => __( 'Update Item', 'morrisonsjewelry' ),
		'search_items'        => __( 'Search Item', 'morrisonsjewelry' ),
		'not_found'           => __( 'Not found', 'morrisonsjewelry' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'morrisonsjewelry' ),
	);
	$rewrite = array(
		'slug'                => 'events',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'event', 'morrisonsjewelry' ),
		'description'         => __( 'Upcoming Events', 'morrisonsjewelry' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', ),
//		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'event', $args );


	$labels = array(
		'name'                => _x( 'Collections', 'Post Type General Name', 'morrisonsjewelry' ),
		'singular_name'       => _x( 'Collections', 'Post Type Singular Name', 'morrisonsjewelry' ),
		'menu_name'           => __( 'Collections', 'morrisonsjewelry' ),
		'parent_item_colon'   => __( 'Parent Item:', 'morrisonsjewelry' ),
		'all_items'           => __( 'All Collections', 'morrisonsjewelry' ),
		'view_item'           => __( 'View Item', 'morrisonsjewelry' ),
		'add_new_item'        => __( 'Add New Collections', 'morrisonsjewelry' ),
		'add_new'             => __( 'Add New', 'morrisonsjewelry' ),
		'edit_item'           => __( 'Edit Item', 'morrisonsjewelry' ),
		'update_item'         => __( 'Update Item', 'morrisonsjewelry' ),
		'search_items'        => __( 'Search Item', 'morrisonsjewelry' ),
		'not_found'           => __( 'Not found', 'morrisonsjewelry' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'morrisonsjewelry' ),
	);
	$rewrite = array(
		'slug'                => 'collections',
		'with_front'          => false,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'collections', 'morrisonsjewelry' ),
		'description'         => __( 'Collections', 'morrisonsjewelry' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array('category', 'post_tag'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
//		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'collections', $args );

}

// Hook into the 'init' action
add_action( 'init', 'morrisonsjewelry_post_types', 0 );

}