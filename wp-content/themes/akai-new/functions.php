<?php
 
// Useful global constants
define( 'AKAI_VERSION', '0.1.0' );
define('SCRIPT_DEBUG', true);

define('EVENTS_CATEGORY_ID', 5);

include 'includes/template_tags.php';
 

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

  /**
   * This theme uses wp_nav_menu() in one location.
   */
  register_nav_menus( array(
    'primary_left' => "Menu główne - lewa strona",
    'primary_right' => "Menu główne - prawa strona"
  ) );

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
  
  register_post_type('partner', Array(
    'labels' => Array(
      'name' => 'Partnerzy',
      'singular_name' => 'Partner'
    ),
    'public' => false,
    'show_ui' => true,
    'supports' => Array('title', 'thumbnail', 'page-attributes')
  ));
}
add_action('init', 'akai_post_types');


// Make the_excerpt() shorter.
function akai_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'akai_excerpt_length' );


// Change "[...]" ellipsis into "..."
function akai_excerpt_more( $more ) {
  return ' &hellip;';
}
add_filter('excerpt_more', 'akai_excerpt_more');


// Used in primary navigation (wp_nav_menu() in header.php)
class Akai_Walker_Nav_Menu extends Walker_Nav_Menu {
  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    // If it's link to category "Events":
    // - change the URL to the homepage
    // - highlight as current, if we are on the homepage
    if ($item->object == 'category' && strpos($item->url, 'eventy') !== -1) {
      $item->url = home_url('/');

      if (is_home()) {
        $item->classes[] = 'current-menu-item';
      }
    }

    return parent::start_el($output, $item, $depth, $args, $id);
  }
}


// Show only posts from 'events' category on the home page
function akai_home_page_posts_query($query) {
  if ($query->is_home() && $query->is_main_query()){
    $query->set('cat', EVENTS_CATEGORY_ID);
  }
}
add_action( 'pre_get_posts', 'akai_home_page_posts_query' );
