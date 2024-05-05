<?php

/**
 * About section layout.
 *
 * @see        Page -> Sections -> Content -> About.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-about', THEME_URI . '/static/css/sections/about/about.min.css', [], THEME_VERSION );

$title = $section['title'] ?? '';
$title = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$items = $section['items'] ?? null;
?>

<section class="about">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $items ) ){
			echo '<div class="about-items">';

			foreach( $items as $item ){
				$image = $item['image'] ?? null;
				$desc = $item['desc'] ?? '';

				if( ! $image && ! $desc ) continue;
				?>
				<div class="about-item">
					<div class="about-item-inner">
						<?php
						if( $desc ) echo '<div class="about-item-info"><p>', esc_html( $desc ), '</p></div>';

						if( $image ){
							echo '<div class="about-item-img">';
							get_template_part( 'components/image', null, [
								'data' => crit_prepare_image_data( $image, 'about' )
							] );
							echo '</div>';
						}
						?>
					</div>
				</div>
				<?php
			}

			echo '</div>';
		}
		?>
	</div>
</section>

