<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// ---------------------------
//  Taxonomies
// ---------------------------

/**
 * Registers `event_type` custom taxonomy.
 */
function register_event_type_taxonomy(): void
{
    register_taxonomy(
        'event_type',
        'event',
        [
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => [
                'name' => _x('Types', 'taxonomy general name', 'textdomain'),
                'singular_name' => _x('Type', 'taxonomy singular name', 'textdomain'),
                'search_items' => __('Search Types', 'textdomain'),
                'all_items' => __('All Types', 'textdomain'),
                'parent_item' => __('Parent Type', 'textdomain'),
                'parent_item_colon' => __('Parent Type:', 'textdomain'),
                'edit_item' => __('Edit Type', 'textdomain'),
                'update_item' => __('Update Type', 'textdomain'),
                'add_new_item' => __('Add New Type', 'textdomain'),
                'new_item_name' => __('New Type Name', 'textdomain'),
                'menu_name' => __('Types', 'textdomain'),
            ],
        ]
    );
}
add_action('init', 'register_event_type_taxonomy');
