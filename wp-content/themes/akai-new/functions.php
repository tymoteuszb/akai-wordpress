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
 }
 add_action( 'after_setup_theme', 'akai_setup' );
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function akai_scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'akai', get_template_directory_uri() . "/assets/js/akai_new{$postfix}.js", array(), AKAI_VERSION, true );
		
	wp_enqueue_style( 'akai', get_template_directory_uri() . "/assets/css/akai_new{$postfix}.css", array(), AKAI_VERSION );
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