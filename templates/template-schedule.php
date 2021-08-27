<?php
    /* Template Name: Schedule */

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    $args = [
        'post_type' => 'event',
        'posts_per_page' => -1,
        'meta_key'      => 'time',
        'meta_value'    => 'ongoing',
    ];

    $context['ongoing_events'] = Timber::get_posts($args);

    Timber::render('template-schedule.twig', $context);

    get_footer();
