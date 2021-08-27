<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();
    $context['posts'] = new Timber\PostQuery();

    Timber::render( 'home.twig', $context );

    get_footer();
