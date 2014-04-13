<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.22/skrollr.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header big" data-0="position:relative;border-bottom-width:4px" data-_smallheader="position:fixed;border-bottom-width:0px" >
    <div class="navigation-bar">
      <div class="bg"></div>
      <div class="container">
        <div class="navigation center">
          <i class="fill"></i>
        </div>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_left',
          'menu_class' => 'navigation left',
          'container' => false,
          'walker' => new Akai_Walker_Nav_Menu
        ));
        ?>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_right',
          'menu_class' => 'navigation right',
          'container' => false,
          'walker' => new Akai_Walker_Nav_Menu
        ));
        ?>
      </div>
    </div>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo" data-0="width:250px;height:250px;margin-top:-160px" data-_smallheader="width:60px;height:60px;margin-top:-65px">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="AKAI" data-0="padding:40px" data-_smallheader="padding:0px">
    </a>

    <div class="site-header-links" data-_smallheaderthird="opacity:1" data-_smallheaderhalf="opacity:0;display:block" data-_smallheader="display:none">
      <h1 class="site-title" data-_smallheaderthird="opacity:1" data-_smallheaderhalf="opacity:0;display:block" data-_smallheader="display:none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Akademickie Koło Aplikacji Internetowych</a></h1>

      <div class="social-buttons">
        <a href="#">
          <i class="akaicon akaicon-facebook"></i>
        </a>
        <a href="#">
          <i class="akaicon akaicon-twitter"></i>
        </a>
        <a href="#">
          <i class="akaicon akaicon-mail"></i>
        </a>
      </div>
    </div>
  </header>

  <div id="main" class="site-main" data-0="padding-top:!0" data-_smallheader="padding-top:!105px">
    <div class="container">
