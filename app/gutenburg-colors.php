<?php

if ( ! function_exists( 'foundationpress_gutenberg_support' ) ) :
  function foundationpress_gutenberg_support() {

  // Add foundation color palette to the editor
  add_theme_support( 'editor-color-palette', [
    [
      'name' => __( 'Black', 'foundfestival' ),
      'slug' => 'color-black',
      'color' => '#000',
    ],
    [
       'name' => __( 'White', 'foundfestival' ),
       'slug' => 'color-white',
       'color' => '#FFFFFF',
     ],
    [
      'name' => __( 'Highlight', 'foundfestival' ),
      'slug' => 'color-highlight',
      'color' => '#00ffd3',
    ],
    [
      'name' => __( 'Contrast', 'foundationpress' ),
      'slug' => 'color-contrast',
      'color' => '#facee1',
    ],
    ] );

  }

  add_action( 'after_setup_theme', 'foundationpress_gutenberg_support' );
endif;
