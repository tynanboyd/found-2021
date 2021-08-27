<?php

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// ---------------------------
//  Register menu positions
// ---------------------------

add_action('init', 'pd_register_menus');

function pd_register_menus() {
    register_nav_menus([
        'main-menu' => __('Main Menu', 'foundfestival'), // main nav in header
        'footer-menu' => __('Footer Menu', 'foundfestival'),  // nav in footer
    ]);
}
