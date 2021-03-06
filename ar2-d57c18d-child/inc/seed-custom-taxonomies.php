<?php

//hook into the init action and call create_book_taxonomies when it fires
//add_action( 'init', 'create_committee_taxonomies', 0 );
//add_action( 'init', 'create_project_taxonomies', 0 );
add_action( 'init', 'create_role_taxonomies', 0 );
add_action( 'init', 'create_type_taxonomies', 0 );
add_action( 'init', 'create_status_taxonomies', 0 );

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

  register_taxonomy( 'committee', array( 'person' ), $args );
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

  register_taxonomy( 'project', array( 'person' ), $args );
}

function create_role_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'                => _x( 'Roles', 'taxonomy general name' ),
    'singular_name'       => _x( 'Role', 'taxonomy singular name' ),
    'search_items'        => __( 'Search Roles' ),
    'all_items'           => __( 'All Roles' ),
    'parent_item'         => __( 'Parent Role' ),
    'parent_item_colon'   => __( 'Parent Role:' ),
    'edit_item'           => __( 'Edit Role' ),
    'update_item'         => __( 'Update Role' ),
    'add_new_item'        => __( 'Add New Role' ),
    'new_item_name'       => __( 'New Role Name' ),
    'menu_name'           => __( 'Roles' )
  );

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'roles' )
  );

  register_taxonomy( 'role', array( 'person' ), $args );
}

function create_type_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'                => _x( 'Types', 'taxonomy general name' ),
    'singular_name'       => _x( 'Type', 'taxonomy singular name' ),
    'search_items'        => __( 'Search Types' ),
    'all_items'           => __( 'All Types' ),
    'parent_item'         => __( 'Parent Type' ),
    'parent_item_colon'   => __( 'Parent Type:' ),
    'edit_item'           => __( 'Edit Type' ),
    'update_item'         => __( 'Update Type' ),
    'add_new_item'        => __( 'Add New Type' ),
    'new_item_name'       => __( 'New Type Name' ),
    'menu_name'           => __( 'Types' )
  );

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'types' )
  );

  register_taxonomy( 'type', array( 'sponsor' ), $args );
}

function create_status_taxonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'                => _x( 'Status', 'taxonomy general name' ),
    'singular_name'       => _x( 'Status', 'taxonomy singular name' ),
    'search_items'        => __( 'Search Statuses' ),
    'all_items'           => __( 'All Statuses' ),
    'parent_item'         => __( 'Parent Status' ),
    'parent_item_colon'   => __( 'Parent Status:' ),
    'edit_item'           => __( 'Edit Status' ),
    'update_item'         => __( 'Update Status' ),
    'add_new_item'        => __( 'Add New Status' ),
    'new_item_name'       => __( 'New Type Status' ),
    'menu_name'           => __( 'Status' )
  );

  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'show_ui'             => true,
    'show_admin_column'   => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'grants' )
  );

  register_taxonomy( 'status', array( 'project' ), $args );
}
