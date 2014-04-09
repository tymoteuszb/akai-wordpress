<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div>
  <header class="site-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="AKAI">
    </a>
  </header>

  <header id="masthead" class="site-header" role="banner">
    <div class="header-main">
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

      <div class="search-toggle">
        <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
      </div>

      <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
        <h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
        <a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      </nav>
    </div>

    <div id="search-container" class="search-box-wrapper hide">
      <div class="search-box">
        <?php get_search_form(); ?>
      </div>
    </div>
  </header><!-- #masthead -->

  <div id="main" class="site-main">
