<?php

/**
 * Index page default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

get_header();

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'fc-hero', THEME_URI . '/static/js/hero/hero.min.js', [ 'jquery' ], THEME_VERSION, true );

$sections = carbon_get_the_post_meta( 'page_sections' );
?>

<main class="main">
	<section></section>
	<!-- <?php
	if( have_posts() ){
		while( have_posts() ){
			the_post();

			echo get_the_permalink();
			the_post_thumbnail( 'thumb-width' ) || ( $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ) );
			the_title();

			if ( has_excerpt() ) the_excerpt();

			echo esc_html( get_the_date( 'F j, Y' ) );
		}
	}	else {
		esc_html_e( 'Записи не найдены.', 'triumph' );
	}

	if( get_next_posts_link() ) next_posts_link( '' );
	?>
</main>

<?php
get_footer();

