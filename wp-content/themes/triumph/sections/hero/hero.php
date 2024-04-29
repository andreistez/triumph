<?php

/**
 * Hero section layout.
 *
 * @see Page -> Sections -> Content -> Hero.
 *
 * @package    WordPress
 * @subpackage triumph
 */

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'fc-hero', THEME_URI . '/static/js/hero/hero.min.js', [ 'jquery' ], THEME_VERSION, true );
?>

<section class="hero">
	HERO
</section>

