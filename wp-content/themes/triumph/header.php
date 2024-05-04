<?php

/**
 * Header default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

global $page, $paged;
$site_description = get_bloginfo( 'description', 'display' );
$logo             = carbon_get_theme_option( 'logo' );
?>

<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta content="" name="description"/>
	<meta content="" name="keywords"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="HandheldFriendly" content="true"/>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!--  -->

	<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		if( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";

		if( $paged > 1 || $page > 1 ) echo ' | ' . sprintf( __( 'Страница %s', 'triumph' ), max( $paged, $page ) );
		?>
	</title>

	<!-- FAVICON -->
	<!-- /FAVICON -->

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<div class="wrapper">
	<header class="header">
		<?php
		wp_nav_menu( [
			'theme_location'  => 'header_menu',
			'container'       => 'nav',
			'container_class' => 'header-nav'
		] );
		?>
	</header>

