<?php

namespace CustomPosts;

\CustomPosts\initialize();

function initialize()
{
    add_action('init', '\CustomPosts\custom_post_type', 0);
    add_action('init', '\CustomPosts\custom_taxonomy_type', 0);
}

function custom_post_type()
{
    // Set UI labels for Custom Post Type Market
    $labels = array(
        'name'                => _x('Panels', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Panel', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Panels', 'rcc'),
        'parent_item_colon'   => __('Parent Panel', 'rcc'),
        'all_items'           => __('All Panels', 'rcc'),
        'view_item'           => __('View Panel', 'rcc'),
        'add_new_item'        => __('Add New Panel', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Panel', 'rcc'),
        'update_item'         => __('Update Panel', 'rcc'),
        'search_items'        => __('Search Panel', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('panel', 'rcc'),
        'description'         => __('Panels listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        // 'supports'            => array('title' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('seasons'),
        'rewrite' => array('slug' => 'panel' ),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('panel', $args); 

    // Set UI labels for Custom Post Type Poster
    $labels = array(
        'name'                => _x('Posters', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Poster', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Posters', 'rcc'),
        'parent_item_colon'   => __('Parent Poster', 'rcc'),
        'all_items'           => __('All Posters', 'rcc'),
        'view_item'           => __('View Poster', 'rcc'),
        'add_new_item'        => __('Add New Poster', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Poster', 'rcc'),
        'update_item'         => __('Update Poster', 'rcc'),
        'search_items'        => __('Search Poster', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('poster', 'rcc'),
        'description'         => __('Posters listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('seasons'),
        'rewrite' => array('slug' => 'poster' ),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type poster
    register_post_type('poster', $args);   
    
    // Set UI labels for Custom Post Type Exhibitor
    $labels = array(
        'name'                => _x('Exhibitors', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Exhibitor', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Exhibitors', 'rcc'),
        'parent_item_colon'   => __('Parent Exhibitor', 'rcc'),
        'all_items'           => __('All Exhibitors', 'rcc'),
        'view_item'           => __('View Exhibitor', 'rcc'),
        'add_new_item'        => __('Add New Exhibitor', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Exhibitor', 'rcc'),
        'update_item'         => __('Update Exhibitor', 'rcc'),
        'search_items'        => __('Search Exhibitor', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('exhibitor', 'rcc'),
        'description'         => __('Exhibitors listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('line'),
        'rewrite' => array('slug' => 'exhibitor', 'with_front' => false),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('exhibitor', $args);    

    // Set UI labels for Custom Post Type Sponsor
    $labels = array(
        'name'                => _x('Exhibitors', 'Post Type General Name', 'rcc'),
        'singular_name'       => _x('Sponsors', 'Post Type Singular Name', 'rcc'),
        'menu_name'           => __('Sponsors', 'rcc'),
        'parent_item_colon'   => __('Parent Sponsor', 'rcc'),
        'all_items'           => __('All Sponsors', 'rcc'),
        'view_item'           => __('View Sponsor', 'rcc'),
        'add_new_item'        => __('Add New Sponsor', 'rcc'),
        'add_new'             => __('Add New', 'rcc'),
        'edit_item'           => __('Edit Sponsor', 'rcc'),
        'update_item'         => __('Update Sponsor', 'rcc'),
        'search_items'        => __('Search Sponsor', 'rcc'),
        'not_found'           => __('Not Found', 'rcc'),
        'not_found_in_trash'  => __('Not found in Trash', 'rcc'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('sponsor', 'rcc'),
        'description'         => __('Sponsors listings', 'rcc'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('line'),
        'rewrite' => array('slug' => 'sponsor', 'with_front' => false),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('sponsor', $args);      
}

function custom_taxonomy_type()
{
    // register_taxonomy(
    //     'capacity',
    //     'exhibitor',
    //     array(
    //         'labels'    => array(
    //             'name'  => 'Capacity',
    //             'add_new_item'  => 'Add New Capacity',
    //             'new_item_name' => 'New Capacity'
    //         ),
    //         'show_ui'   => TRUE,
    //         'show_tagcloud' => FALSE,
    //         'hierarchical'  => TRUE
    //     )
    // );
    register_taxonomy(
        'event',
        'exhibitor',
        ['labels'       => [
            'name'          => 'Event',
            'add_new_item'  => 'Add New Event',
            'new_item_name' => 'New Event'
        ],
        'show_ui'       => TRUE,
        'show_tagcloud' => FALSE,
        'hierarchical'  => FALSE
        ]
    );
}
