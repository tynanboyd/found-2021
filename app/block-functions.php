<?php

/**
 * Filter the allowed blocks in the Gutenberg editor
 *
 * @param $allowed_blocks
 * @param $post
 * @return array
 */
function found_allowed_block_types($allowed_blocks, $post)
{

    $allowed_blocks = [
        'core/image',
        'core/audio',
        'core/buttons',
        'core/paragraph',
        'core/columns',
        'core/separator',
        'core/heading',
        'core/list',
        'core/html',
        'core/gallery',
        'core/quote',
        'core/pullquote',
        'core/file',
        'core/freeform', // classic editor
        'core-embed/youtube',
        'core-embed/vimeo',
        'gravityforms/form',
        'acf/content-warning',
    ];

    if ($post->post_type === 'page') {
        $allowed_blocks[] = 'acf/artists';
    }

    if ($post->post_type === 'event') {
        $allowed_blocks[] = 'acf/content-warning';
    }

    return $allowed_blocks;
}
add_filter( 'allowed_block_types', 'found_allowed_block_types', 10, 2 );
