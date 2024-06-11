<?php
function recettes_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'recettes_enqueue_styles');

function create_recette_cpt() {
    $labels = array(
        'name' => _x('Recettes', 'Post Type General Name'),
        'singular_name' => _x('Recette', 'Post Type Singular Name'),
        'menu_name' => __('Recettes'),
        'name_admin_bar' => __('Recette'),
        'archives' => __('Recette Archives'),
        'attributes' => __('Recette Attributes'),
        'parent_item_colon' => __('Parent Recette:'),
        'all_items' => __('All Recettes'),
        'add_new_item' => __('Add New Recette'),
        'add_new' => __('Add New'),
        'new_item' => __('New Recette'),
        'edit_item' => __('Edit Recette'),
        'update_item' => __('Update Recette'),
        'view_item' => __('View Recette'),
        'view_items' => __('View Recettes'),
        'search_items' => __('Search Recettes'),
        'not_found' => __('Not found'),
        'not_found_in_trash' => __('Not found in Trash'),
        'featured_image' => __('Featured Image'),
        'set_featured_image' => __('Set featured image'),
        'remove_featured_image' => __('Remove featured image'),
        'use_featured_image' => __('Use as featured image'),
        'insert_into_item' => __('Insert into recette'),
        'uploaded_to_this_item' => __('Uploaded to this recette'),
        'items_list' => __('Recettes list'),
        'items_list_navigation' => __('Recettes list navigation'),
        'filter_items_list' => __('Filter recettes list'),
    );
    $args = array(
        'label' => __('Recette'),
        'description' => __('Recettes'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('recette', $args);
}
add_action('init', 'create_recette_cpt', 0);