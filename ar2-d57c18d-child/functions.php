<?php
// Edit
require( __DIR__ . '/inc/seed-custom-taxonomies.php' );
require( __DIR__ . '/inc/seed-custom-meta-boxes.php' );

// Load additional image size
add_image_size( 'single_feature', 320 );
add_image_size( 'single_thumb', 240 );
add_image_size( 'biography', 240 );
add_image_size( 'biography_thumb', 160 );

/**
 * Register widgetized areas
 */
register_sidebar( array(
		'name' => __( 'Latest News Sidebar', 'lin' ),
		'id' => 'latest-news-sidebar',
		'description' => 'This sidebar will only display on the Latest News page.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
) );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'board_of_director',
		array(
			'labels' => array(
				'name'               => _x( 'Board of Directors', 'post type general name' ),
				'singular_name'      => _x( 'Board of Director', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Board of Director' ),
				'edit_item'          => __( 'Edit Board of Director' ),
				'new_item'           => __( 'New Board of Director' ),
				'all_items'          => __( 'All Board of Directors' ),
				'view_item'          => __( 'View Board of Director' ),
				'search_items'       => __( 'Search Board of Directors' ),
				'not_found'          => __( 'No Board of Directors found' ),
				'not_found_in_trash' => __( 'No Board of Directors found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Board of Directors'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'board'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		)
	);
	register_post_type( 'educator_profile',
		array(
			'labels' => array(
				'name'               => _x( 'Educator Profiles', 'post type general name' ),
				'singular_name'      => _x( 'Educator Profile', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Educator Profile' ),
				'edit_item'          => __( 'Edit Educator Profile' ),
				'new_item'           => __( 'New Educator Profile' ),
				'all_items'          => __( 'All Educator Profiles' ),
				'view_item'          => __( 'View Educator Profile' ),
				'search_items'       => __( 'Search Educator Profiles' ),
				'not_found'          => __( 'No Educator Profiles found' ),
				'not_found_in_trash' => __( 'No Educator Profiles found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Educator Profiles'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'educator_profile'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		)
	);
	register_post_type( 'sponsor',
		array(
			'labels' => array(
				'name'               => _x( 'Sponsors', 'post type general name' ),
				'singular_name'      => _x( 'Sponsor', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Sponsor' ),
				'edit_item'          => __( 'Edit Sponsor' ),
				'new_item'           => __( 'New Sponsor' ),
				'all_items'          => __( 'All Sponsors' ),
				'view_item'          => __( 'View Sponsor' ),
				'search_items'       => __( 'Search Sponsors' ),
				'not_found'          => __( 'No Sponsors found' ),
				'not_found_in_trash' => __( 'No Sponsors found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Sponsors'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sponsors'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		)
	);
}