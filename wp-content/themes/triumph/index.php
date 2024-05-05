<?php

/**
 * Index page default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

get_header();

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
// wp_enqueue_script( 'fc-hero', THEME_URI . '/static/js/hero/hero.min.js', [ 'jquery' ], THEME_VERSION, true );

$sections = carbon_get_the_post_meta( 'page_sections' );
?>

	<main class="main">
		<section class="hero">
			HERO!!!!!!!
		</section>

		<?php
		while( have_posts() ){
			the_post();

			foreach( $sections as $section ){
				$type = $section['_type'];
				get_template_part( "sections/$type/$type", null, [ 'section' => $section ] );
			}
		}
		?>
	</main>

<?php
get_footer();

