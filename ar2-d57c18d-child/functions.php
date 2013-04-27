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
		)
	);
	register_post_type( 'educator_profile',
		array(
			'labels' => array(
				'name' => __( 'Educator Profiles' ),
				'singular_name' => __( 'Educator Profile' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'educator_profile'),
		)
	);
	register_post_type( 'sponsor',
		array(
			'labels' => array(
				'name' => __( 'Sponsors' ),
				'singular_name' => __( 'Sponsor' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sponsors'),
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