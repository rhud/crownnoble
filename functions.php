<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'blog-img', 525, 300, true );
add_image_size( 'blog-square', 150, 150, true );

add_filter( 'image_size_names_choose', 'hh_custom_sizes' );

function hh_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'blog-img' => __( 'Blog Image' ),
        'blog-square' => __( 'Blog Square' )
    ) );
}

function new_excerpt_more($more) {
       global $post;
    return '... <span class="readmore"><a href="'. get_permalink($post->ID) . '">Continue Reading &raquo;</a></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');