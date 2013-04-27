<?php

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

function create_project_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'                => _x( 'Projects', 'taxonomy general name' ),
    'singular_name'       => _x( 'Project', 'taxonomy singular name' ),
    'search_items'        => __( 'Search Projects' ),
    'all_items'           => __( 'All Projects' ),
    'parent_item'         => __( 'Parent Project' ),
    'parent_item_colon'   => __( 'Parent Project:' ),
    'edit_item'           => __( 'Edit Project' ), 
    'update_item'         => __( 'Update Project' ),
    'add_new_item'        => __( 'Add New Project' ),
    'new_item_name'       => __( 'New Project Name' ),
    'menu_name'           => __( 'Projects' )
  ); 	

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'projects' )
  );

  register_taxonomy( 'project', array( 'educator_profile' ), $args );
}