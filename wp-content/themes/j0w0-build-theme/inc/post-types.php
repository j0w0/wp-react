<?php

function register_custom_post_types() {
    // Place
    $labels = [
        'name'               => 'Places',
        'singular_name'      => 'Place',
        'add_new'            => 'New Place',
        'add_new_item'       => 'Add New Place',
        'edit_item'          => 'Edit Place',
        'new_item'           => 'New Place',
        'view_item'          => 'View Place',
        'search_items'       => 'Search Places',
        'not_found'          => 'No Places Found',
        'not_found_in_trash' => 'No Places found in Trash',
    ];
    $args = [
        'labels'       => $labels,
        'has_archive'  => true,
        'public'       => true,
        'hierarchical' => false,
        'show_in_rest' => true,
        'supports'     => [
            'title',
            'editor',
            'thumbnail',
        ],
        'taxonomies'          => ['place_category', 'place_amenity'],
        'show_in_graphql'     => true,
        'graphql_single_name' => 'place',
        'graphql_plural_name' => 'places',
    ];
    register_post_type('place', $args);
}
add_action('init', 'register_custom_post_types');
