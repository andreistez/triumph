<?php

/**
 * Theme functions.
 *
 * @package WordPress
 * @subpackage triumph
 */

use Carbon_Fields\Carbon_Fields;

const THEME_NAME = 'triumph';
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_VERSION', mt_rand() );   // Change to static value when go live.

add_action( 'after_setup_theme', 'critick_load_theme_dependencies' );
/**
 * Theme dependencies.
 */
function critick_load_theme_dependencies(): void
{
	// Register theme menus.
	register_nav_menus( [
		'header_menu'	=> 'Меню хедера',
		'footer_menu'	=> 'Меню футера'
	] );

	require_once( 'vendor/autoload.php' );
	Carbon_Fields::boot();

	// Please place all custom functions declarations in this file.
	require_once( 'theme-functions/theme-settings.php' );
	require_once( 'theme-functions/sections.php' );
	require_once( 'theme-functions/theme-filters.php' );
	require_once( 'theme-functions/theme-functions.php' );
}

add_action( 'init', 'critick_init_theme' );
/**
 * Theme initialization.
 */
function critick_init_theme(): void
{
	// Remove extra styles and default SVG tags.
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes.
	add_image_size( 'logo', 0, 40 );
	add_image_size( 'logo@2x', 0, 80 );

	add_image_size( 'header-icon', 24, 24 );
	add_image_size( 'header-icon@2x', 48, 48 );

	add_image_size( 'hero-icon', 59, 48 );
	add_image_size( 'hero-icon@2x', 118, 96 );

	add_image_size( 'team', 243, 360 );
	add_image_size( 'team@2x', 486, 720 );

	add_image_size( 'about', 266, 320 );
	add_image_size( 'about@2x', 532, 640 );

	add_image_size( 'format', 383, 268 );
	add_image_size( 'format@2x', 766, 536 );

	add_image_size( 'slide', 486, 596 );
	add_image_size( 'slide@2x', 972, 1192 );

	add_image_size( 'award', 513, 360 );
	add_image_size( 'award@2x', 1026, 720 );

	add_image_size( 'poster', 591, 400 );
	add_image_size( 'poster@2x', 1182, 800 );
}

add_action( 'wp_enqueue_scripts', 'critick_inclusion_enqueue' );
/**
 * Enqueue styles and scripts.
 */
function critick_inclusion_enqueue(): void
{
	// Remove Gutenberg styles on front-end except single posts where Gutenberg is used.
	if( ! is_admin() && ! is_singular( 'post' ) ){
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
	}

	// Main styles & scripts.
	wp_enqueue_style( 'main', THEME_URI . '/static/css/main.min.css', [], THEME_VERSION );
	wp_enqueue_script( 'main', THEME_URI . '/static/js/main.min.js', [], THEME_VERSION, true );

	/**
	 * Additional pages styles & scripts below:
	 */
}

