<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Misetes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<button class="js-menu-trigger sliding-menu-button">Sidebar</button>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<div id="site-navigation" class="main-navigation" >
			<div class="menu-wrapper">
				<p class="navigation-menu-button" id="js-mobile-menu">MENU</p>
				<nav class="nav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav>
			</div>
	</header>
	<script>
	  $(function() {
	    var menu = $('#site-navigation nav ul');
	    var menuToggle = $('#js-mobile-menu');

	    $(menuToggle).on('click', function(e) {
	      e.preventDefault();
	      menu.slideToggle(function(){
	        if(menu.is(':hidden')) {
	          menu.removeAttr('style');
	        }
	      });
	    });
	  });
	</script>
	<div id="content" class="site-content">
