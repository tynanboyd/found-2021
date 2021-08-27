<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// ---------------------------
//  Add ACF init callback
// ---------------------------

function my_acf_init() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    register_custom_acf_blocks();
}

add_action('acf/init', 'my_acf_init');

// ---------------------------
//  Add ACF block fields
// ---------------------------

/**
 * Render Options:
 * .php - to render a .php file, use 'render_template' property and provide path to file - do not use render_callback
 * .twig - if ACF block just needs twig file, use 'render_callback' => 'acf_block_render_callback'
 *      refer to /app/timber.php for details on file naming specifics
 */
function register_custom_acf_blocks() {

    acf_register_block_type([
        'name' => 'artists',
        'title' => __('Artists'),
        'description' => __('A block for adding artists and bios.'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'art',
        'keywords' => ['artist', 'bio', 'performer'],
        'mode' => 'auto',
        'supports' => [
            'align' => false,
        ],
        'post_types' => ['page'],
    ]);

    acf_register_block_type([
        'name' => 'content-warning',
        'title' => __('Content Warning'),
        'description' => __('A block for adding collapsable content warnings.'),
        'render_callback' => 'acf_block_render_callback',
        'category' => 'common',
        'icon' => 'hidden',
        'keywords' => ['content', 'warning', 'accordion'],
        'mode' => 'auto',
        'supports' => [
            'align' => false,
        ],
        'post_types' => ['page', 'event'],
    ]);
}
