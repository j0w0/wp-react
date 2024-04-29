<?php

function register_custom_taxonomies() {
    // Place category
    $labels = [
        'name'          => 'Categories',
        'singular_name' => 'Category',
        'search_items'  => 'Search Categories',
        'all_items'     => 'All Categories',
        'edit_item'     => 'Edit Category',
        'update_item'   => 'Update Categories',
        'add_new_item'  => 'Add New Category',
        'new_item_name' => 'New Category Name',
        'menu_name'     => 'Categories',
    ];
    $args = [
        'labels'              => $labels,
        'hierarchical'        => true,
        'sort'                => true,
        'args'                => ['orderby' => 'term_order'],
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'show_in_graphql'     => true,
        'graphql_single_name' => 'placeCategory',
        'graphql_plural_name' => 'placeCategories',
    ];
    register_taxonomy('place_category', ['place'], $args);

    // Place amenity
    $labels = [
        'name'          => 'Amenities',
        'singular_name' => 'Amenity',
        'search_items'  => 'Search Amenities',
        'all_items'     => 'All Amenities',
        'edit_item'     => 'Edit Amenity',
        'update_item'   => 'Update Amenity',
        'add_new_item'  => 'Add New Amenity',
        'new_item_name' => 'New Amenity Name',
        'menu_name'     => 'Amenities',
    ];
    $args = [
        'labels'              => $labels,
        'hierarchical'        => true,
        'sort'                => true,
        'args'                => ['orderby' => 'term_order'],
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'show_in_graphql'     => true,
        'graphql_single_name' => 'placeAmenity',
        'graphql_plural_name' => 'placeAmenities',
    ];
    register_taxonomy('place_amenity', ['place'], $args);
}
add_action('init', 'register_custom_taxonomies');
