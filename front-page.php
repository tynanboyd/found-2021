<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    $context['hero'] = get_field('hero');

    /*
    ** RANDOM HOMEPAGE VIDEO
    */

    if (get_field('random_videos')) {
        $videos = [];
        $videoCount = 0;
        foreach (get_field('random_videos') as $video) {
            $videos[] = [
                'link' => $video['video_embed_src'],
            ];
            $videoCount++;
        }
        $range = $videoCount - 1;
        $randIndex = rand(0, $range);
        $context['random_music_video'] = $videos[$randIndex]['link'];
    }

    /*
    ** QUERY CURRENTLY STREAMING EVENTS
    */

    $args = [
        'post_type' => 'event',
        'meta_key'      => 'streaming_now',
        'meta_value'    => '1',
    ];

    $context['currently_streaming_events'] = Timber::get_posts($args);

    Timber::render('front-page.twig', $context);

    get_footer();
