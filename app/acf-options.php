<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// ---------------------------
//  Add ACF options page
// ---------------------------

if (function_exists('acf_add_options_page')) {

    $settingsPage = acf_add_options_page([
        'page_title' => 'Site General Settings',
        'menu_title' => 'Site Settings',
        'position' => '2.56',
        'menu_slug' => 'site-general-settings',
        'redirect' => true,
    ]);
}

function my_acf_map_init() {
    acf_update_setting('google_api_key', 'AIzaSyAiJRmvCL9-55PIOlntDpI-R5v6IHQk87U');
}
add_action('acf/init', 'my_acf_map_init');
