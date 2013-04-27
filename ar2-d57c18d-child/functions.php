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
		'name' => 'Latest News Sidebar',
		'id' => 'latest-news-sidebar',
		'description' => 'This sidebar will only display on the Latest News page.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
) );

/**
 * Register widgetized areas
 */
register_sidebar( array(
		'name' => 'Home Triptych Sidebar',
		'id' => 'home-triptych-sidebar',
		'description' => 'This sidebar will only display on the homepage.',
		'before_widget' => '<div id="%1$s" class="post">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
) );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'person',
		array(
			'labels' => array(
				'name'               => _x( 'Person', 'post type general name' ),
				'singular_name'      => _x( 'People', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Person' ),
				'edit_item'          => __( 'Edit Person' ),
				'new_item'           => __( 'New Person' ),
				'all_items'          => __( 'All People' ),
				'view_item'          => __( 'View Person' ),
				'search_items'       => __( 'Search People' ),
				'not_found'          => __( 'No People found' ),
				'not_found_in_trash' => __( 'No People found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'People'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'people'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true
		)
	);
	register_post_type( 'committee',
		array(
			'labels' => array(
				'name'               => _x( 'Committees', 'post type general name' ),
				'singular_name'      => _x( 'Committee', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Committee' ),
				'edit_item'          => __( 'Edit Committee' ),
				'new_item'           => __( 'New Committee' ),
				'all_items'          => __( 'All Committees' ),
				'view_item'          => __( 'View Committee' ),
				'search_items'       => __( 'Search Committees' ),
				'not_found'          => __( 'No Committees found' ),
				'not_found_in_trash' => __( 'No Committees found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Committees'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'committee'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true
		)
	);
	register_post_type( 'project',
		array(
			'labels' => array(
				'name'               => _x( 'Projects', 'post type general name' ),
				'singular_name'      => _x( 'Project', 'post type singular name' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Project' ),
				'edit_item'          => __( 'Edit Project' ),
				'new_item'           => __( 'New Project' ),
				'all_items'          => __( 'All Projects' ),
				'view_item'          => __( 'View Project' ),
				'search_items'       => __( 'Search Projects' ),
				'not_found'          => __( 'No Projects found' ),
				'not_found_in_trash' => __( 'No Projects found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Projects'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'project'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true
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
				'all_items'          => __( 'All Sponsor' ),
				'view_item'          => __( 'View Sponsor' ),
				'search_items'       => __( 'Search Sponsors' ),
				'not_found'          => __( 'No Sponsors found' ),
				'not_found_in_trash' => __( 'No Sponsors found in the Trash' ),
				'parent_item_colon'  => '',
				'menu_name'          => 'Sponsors'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sponsor'),
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true
		)
	);
}

function my_connection_types() {
	if( has_action( 'p2p_init' ) ) {
		p2p_register_connection_type( 
			array( 
			'name' => 'person_committee',
			'from' => 'person',
			'to' => 'committee'
			) 
		);
		p2p_register_connection_type( 
			array( 
			'name' => 'person_project',
			'from' => 'person',
			'to' => 'project'
			) 
		);
	}
}
add_action( 'p2p_init', 'my_connection_types' );

function filter_home_slider( $query ) {
	if ( $query->is_home() && $query->is_main_query() ) {
		$home_slider = get_category_by_slug( 'home-slider' );
        $query->set( 'cat', $home_slider->term_id );
        echo"<pre>";var_dump($query);echo"</pre>";
        die();
    }
}
add_action( 'pre_get_posts', 'filter_home_slider' );