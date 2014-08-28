<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage bb2013
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="http://fonts.googleapis.com/css?family=Rokkitt|PT+Serif|Arvo:400,700" rel="stylesheet">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome-4.1.0/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
<div class="sitewide"><p>I'm performing some maintenance, so things might look a little strange for a few minutes...</p></div>
<header role="banner" class="global-header">
	<div class="logo">
    	<!--<img src="img/logo.svg" alt="bf logo">-->
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    <div role="navigation">
        <nav>
            <?php wp_nav_menu( array( 'menu' => 'mainy', 'container' => '', 'menu_class' => 'nav', 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
        </nav>
    </div>
</header>
<div role="main" class="main-wrapper">