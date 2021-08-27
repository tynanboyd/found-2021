<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly


// ---------------------------
//  Post Revisions
// ---------------------------

add_filter('wp_revisions_to_keep', 'pd_revisions_filter', 10, 2);

function pd_revisions_filter ($num, $post) {
  $num = 7;
  return $num;
}

// ---------------------------
//  Post Types
// ---------------------------

/**
 * Registers `event` custom post type.
 *
 * @return void
 */
function register_event_post_type()
{
    register_post_type('event', [
        'description' => __('Collection of events.', 'textdomain'),
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-video',
        'labels' => [
            'name' => _x('Events', 'post type general name', 'textdomain'),
            'singular_name' => _x('Event', 'post type singular name', 'textdomain'),
            'menu_name' => _x('Events', 'admin menu', 'textdomain'),
            'name_admin_bar' => _x('Event', 'add new on admin bar', 'textdomain'),
            'add_new' => _x('Add New', 'event', 'textdomain'),
            'add_new_item' => __('Add New Event', 'textdomain'),
            'new_item' => __('New Event', 'textdomain'),
            'edit_item' => __('Edit Event', 'textdomain'),
            'view_item' => __('View Event', 'textdomain'),
            'all_items' => __('All Events', 'textdomain'),
            'search_items' => __('Search Events', 'textdomain'),
            'parent_item_colon' => __('Parent events:', 'textdomain'),
            'not_found' => __('No events found.', 'textdomain'),
            'not_found_in_trash' => __('No events found in Trash.', 'textdomain'),
        ],
    ]);
}
add_action('init', 'register_event_post_type');
