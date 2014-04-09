<?php
/**
 * AKAI New functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package AKAI New
 * @since 0.1.0
 */
 
 // Useful global constants
define( 'AKAI_VERSION', '0.1.0' );

include 'includes/helpers.php';
 
 /**
  * Set up theme defaults and register supported WordPress features.
  *
  * @uses load_theme_textdomain() For translation/localization support.
  *
  * @since 0.1.0
  */
 function akai_setup() {
	/**
	 * Makes AKAI New available for translation.
	 *
	 * Translations can be added to the /lang directory.
	 * If you're building a theme based on AKAI New, use a find and replace
	 * to change 'akai' to the name of your theme in all template files.
	 */
	load_theme_textdomain( 'akai', get_template_directory() . '/languages' );
  
  /**
   * Enable support for Post Thumbnails
   */
  add_theme_support( 'post-thumbnails' );
 }
 add_action( 'after_setup_theme', 'akai_setup' );
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function akai_scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'akai', get_template_directory_uri() . "/assets/js/main{$postfix}.js", array(), AKAI_VERSION, true );
		
	wp_enqueue_style( 'akai', get_template_directory_uri() . "/assets/css/main{$postfix}.css", array(), AKAI_VERSION );
 }
 add_action( 'wp_enqueue_scripts', 'akai_scripts_styles' );
 
 /**
  * Add humans.txt to the <head> element.
  */
 function akai_header_meta() {
	$humans = '<link type="text/plain" rel="author" href="' . get_template_directory_uri() . '/humans.txt" />';
	
	echo apply_filters( 'akai_humans', $humans );
 }
 add_action( 'wp_head', 'akai_header_meta' );

// Register AKAI additional post types.
function akai_post_types() {
 register_taxonomy('person_category', 'person', Array(
   'labels' => Array(
     'name' => 'Kategorie osób',
     'singular_name' => 'Kategoria osób'
   ),
   'public' => false,
   'show_ui' => true,
   'hierarchical' => true
 ));

  register_post_type('person', Array(
    'labels' => Array(
      'name' => 'Osoby',
      'singular_name' => 'Osoba'
    ),
    'public' => false,
    'show_ui' => true,
    'supports' => Array('title', 'thumbnail', 'page-attributes'),
    'taxonomies' => Array('person_category')
  ));
  
  register_post_type('company', Array(
    'labels' => Array(
      'name' => 'Firmy',
      'singular_name' => 'Firma'
    ),
    'public' => false,
    'show_ui' => true,
    'supports' => Array('title', 'thumbnail', 'page-attributes')
  ));
}
add_action('init', 'akai_post_types');

// Make the_excerpt() shorter.
function akai_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'akai_excerpt_length' );

// Change "[...]" ellipsis into "..."
function akai_excerpt_more( $more ) {
  return ' &hellip;';
}
add_filter('excerpt_more', 'akai_excerpt_more');

