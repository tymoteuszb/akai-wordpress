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

  <header class="site-header big">
    <div class="navigation-bar">
      <div class="container">
        <div class="navigation center">
          <i class="fill"></i>
        </div>

        <ul class="navigation left">
          <li>
            <a href="#">Wydazrenia</a>
          </li>
          <li>
            <a href="#">Wydazrenia</a>
          </li>
        </ul>

        <ul class="navigation right">
          <li>
            <a href="#">Wydazrenia</a>
          </li>
          <li>
            <a href="#">Wydazrenia</a>
          </li>
        </ul>
      </div>
    </div>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="AKAI">
    </a>

    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Akademickie Koło Aplikacji Internetowych</a></h1>

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
  </header>

  <div id="main" class="site-main">
    <div class="container">
