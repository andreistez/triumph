<?php

/**
 * Index page default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

get_header();

$sections = carbon_get_the_post_meta( 'page_sections' );
?>

	<main class="main">
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

