<?php

// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
    'name'                       => _x( 'QA Groups', 'taxonomy general name', 'textdomain' ),
    'singular_name'              => _x( 'QA Group', 'taxonomy singular name', 'textdomain' ),
    'search_items'               => __( 'Search QA Groups', 'textdomain' ),
    'popular_items'              => __( 'Popular QA Groups', 'textdomain' ),
    'all_items'                  => __( 'All QA Groups', 'textdomain' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit QA Group', 'textdomain' ),
    'update_item'                => __( 'Update QA Group', 'textdomain' ),
    'add_new_item'               => __( 'Add New QA Group', 'textdomain' ),
    'new_item_name'              => __( 'New QA Group Name', 'textdomain' ),
    'separate_items_with_commas' => __( 'Separate partners with commas', 'textdomain' ),
    'add_or_remove_items'        => __( 'Add or remove partners', 'textdomain' ),
    'choose_from_most_used'      => __( 'Choose from the most used partners', 'textdomain' ),
    'not_found'                  => __( 'No partners found.', 'textdomain' ),
    'menu_name'                  => __( 'QA Groups', 'textdomain' ),
);

$args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => false,
);

register_taxonomy( 'qagroup', array('qastep','qaitem'), $args );
