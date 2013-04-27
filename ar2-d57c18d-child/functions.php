<?php
// Edit
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

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_committee_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function create_committee_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'                => _x( 'Committees', 'taxonomy general name' ),
    'singular_name'       => _x( 'Committee', 'taxonomy singular name' ),
    'search_items'        => __( 'Search Committees' ),
    'all_items'           => __( 'All Committees' ),
    'parent_item'         => __( 'Parent Committee' ),
    'parent_item_colon'   => __( 'Parent Committee:' ),
    'edit_item'           => __( 'Edit Committee' ),
    'update_item'         => __( 'Update Committee' ),
    'add_new_item'        => __( 'Add New Committee' ),
    'new_item_name'       => __( 'New Committee Name' ),
    'menu_name'           => __( 'Committees' )
  );

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'committees' )
  );

  register_taxonomy( 'committee', array( 'board_of_director' ), $args );
}