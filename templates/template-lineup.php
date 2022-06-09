<?php
    /* Template Name: Lineup */

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    $args = [
        'post_type' => 'event',
        'posts_per_page' => -1,
        'orderby' => 'rand',
    ];

    if (get_field('event_types')) {

        $tax_query = [
            [
                'taxonomy' => 'event_type',
                'field' => 'slug',
                'terms' => get_field('event_types')|join(', '),
            ]
        ];

        $args[] = $tax_query;
    }



    $context['events'] = Timber::get_posts($args);

    Timber::render('template-lineup.twig', $context);

    get_footer();
