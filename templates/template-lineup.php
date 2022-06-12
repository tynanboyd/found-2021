<?php
    /* Template Name: Lineup */

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    // Is this a music series?
    $event_types = get_field('event_types');

    $musicSlug = 'music';
    $chosenTypes = [];
    foreach($event_types as $typeID) {
        $term = get_term($typeID);
        $chosenTypes[] = $term->slug;
    }

    if(in_array($musicSlug, $chosenTypes)) {
        $context['is_music_lineup'] = true;
    }

    $args = [
        'post_type' => 'event',
        'posts_per_page' => -1,
        'tax_query' => '',
        // 'meta_key'  => '_date_time',
        'orderby'   => 'meta_value_num',
        'order'     => 'ASC',
    ];

    if (get_field('events_to_show') === 'specific' && get_field('event_types')) {

        $tax_query = [
            [
                'taxonomy' => 'event_type',
                'terms' => $event_types,
            ]
        ];

        $args['tax_query'] = $tax_query;
    }

    $context['events'] = Timber::get_posts($args);

    Timber::render('template-lineup.twig', $context);

    get_footer();
