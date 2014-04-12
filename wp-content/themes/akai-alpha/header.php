<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package akai
 * @since akai 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<nav role="navigation" class="site-navigation block clearfix">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container_class' => 'nolist',
				'container' => false
			));
			?>

			<div class="get-social">
				<a>FB</a>
				<a>Tweet</a>
				<a>@</a>
			</div>
		</nav>

<?php do_action('before'); ?>
		<!--	<header id="masthead" class="site-header" role="banner">
				<hgroup>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<h2 class="site-description"><?php bloginfo('description'); ?></h2>
				</hgroup>

			</header>-->

		<div id="main" class="site-main">