<?php
// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'QA Items', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'QA Item', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'QA Register', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent QA Item', 'twentythirteen' ),
    'all_items'           => __( 'All QA Items', 'twentythirteen' ),
    'view_item'           => __( 'View QA Item', 'twentythirteen' ),
    'add_new_item'        => __( 'Add New QA Item', 'twentythirteen' ),
    'add_new'             => __( 'Add New', 'twentythirteen' ),
    'edit_item'           => __( 'Edit QA Item', 'twentythirteen' ),
    'update_item'         => __( 'Update QA Item', 'twentythirteen' ),
    'search_items'        => __( 'Search QA Item', 'twentythirteen' ),
    'not_found'           => __( 'Not Found', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
);

// Set other options for Custom Post Type

$args = array(
    'label'               => __( 'qaitem', 'twentythirteen' ),
    'description'         => __( 'QA Items', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'custom-fields' ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array(  ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
    	'show_in_menu'  => true,

	'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => true,
    'publicly_queryable'  => false,
    'capability_type'     => 'page',
    'delete_with_user'    => false,
);

// Registering QA Items Custom Post Type
register_post_type( 'qaitem', $args );

// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'QA User Roles', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'QA User Role', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'QA Register', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent QA User Role', 'twentythirteen' ),
    'all_items'           => __( 'All QA User Roles', 'twentythirteen' ),
    'view_item'           => __( 'View QA User Role', 'twentythirteen' ),
    'add_new_item'        => __( 'Add New QA User Role', 'twentythirteen' ),
    'add_new'             => __( 'Add New', 'twentythirteen' ),
    'edit_item'           => __( 'Edit QA User Role', 'twentythirteen' ),
    'update_item'         => __( 'Update QA User Role', 'twentythirteen' ),
    'search_items'        => __( 'Search QA User Role', 'twentythirteen' ),
    'not_found'           => __( 'Not Found', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
);

// Set other options for Custom Post Type

$args = array(
    'label'               => __( 'qauserrole', 'twentythirteen' ),
    'description'         => __( 'QA User Roles', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'custom-fields' ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array(  ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
	'show_in_menu'  =>	'edit.php?post_type=qaitem',
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => true,
    'publicly_queryable'  => false,
    'capability_type'     => 'page',
    'delete_with_user'    => false,
);

// Registering QA User Roles Custom Post Type
register_post_type( 'qauserrole', $args );
unset($labels);
unset($args);


// Set UI labels for Custom Post Type
$labels = array(
    'name'                => _x( 'QA Steps', 'Post Type General Name', 'twentythirteen' ),
    'singular_name'       => _x( 'QA Step', 'Post Type Singular Name', 'twentythirteen' ),
    'menu_name'           => __( 'QA Register', 'twentythirteen' ),
    'parent_item_colon'   => __( 'Parent QA Step', 'twentythirteen' ),
    'all_items'           => __( 'All QA Steps', 'twentythirteen' ),
    'view_item'           => __( 'View QA Step', 'twentythirteen' ),
    'add_new_item'        => __( 'Add New QA Step', 'twentythirteen' ),
    'add_new'             => __( 'Add New', 'twentythirteen' ),
    'edit_item'           => __( 'Edit QA Step', 'twentythirteen' ),
    'update_item'         => __( 'Update QA Step', 'twentythirteen' ),
    'search_items'        => __( 'Search QA Step', 'twentythirteen' ),
    'not_found'           => __( 'Not Found', 'twentythirteen' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
);

// Set other options for Custom Post Type

$args = array(
    'label'               => __( 'qastep', 'twentythirteen' ),
    'description'         => __( 'QA Steps', 'twentythirteen' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'custom-fields' ),
    // You can associate this CPT with a taxonomy or custom taxonomy.
    'taxonomies'          => array(  ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
    	'show_in_menu'  =>	'edit.php?post_type=qaitem',
'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => true,
    'publicly_queryable'  => false,
    'capability_type'     => 'page',
    'delete_with_user'    => false,
);

// Registering QA Steps Custom Post Type
register_post_type( 'qastep', $args );
unset($labels);
unset($args);


