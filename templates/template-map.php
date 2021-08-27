<?php
    /* Template Name: Map */

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    $args = [
        'post_type' => 'event',
        'posts_per_page' => -1,
    ];

    $context['events'] = Timber::get_posts($args);
    Timber::render('template-map.twig', $context);

    get_footer();
