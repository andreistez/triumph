<?php

/**
 * Hero section layout.
 *
 * @see        Page -> Sections -> Content -> Hero.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'fc-hero', THEME_URI . '/static/js/hero/hero.min.js', ['jquery'], THEME_VERSION, true );

$title        = $section['title'] ?? '';
$title        = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$items        = $section['items'] ?? null;
$button_label = $section['button_label'] ?? '';
$video        = $section['video'] ?? null;
?>

<section class="hero">
	<div class="container">
		<div class="hero-wrapper">
			<div class="hero-info">
				<?php
				if( $title ) echo '<h1>', $title, '</h1>';

				if( ! empty( $items ) ){
					echo '<div class="hero-items">';

					foreach( $items as $item ){
						$icon = $item['icon'] ?? null;
						$desc = $item['desc'] ?? '';

						if( ! $icon && ! $desc ) continue;
						?>
						<div class="hero-item">
							<?php
							if( $icon ){
								echo '<div class="hero-item-img">';
								get_template_part( 'components/image', null, [
									'data' => crit_prepare_image_data( $icon, 'hero-icon' )
								] );
								echo '</div>';
							}

							if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
							?>
						</div>
						<?php
					}

					echo '</div>';
				}

				if( $button_label ) echo '<button class="button after-red">', esc_html( $button_label ), '</button>';
				?>
			</div>

			<?php
			if( $video ){
				?>
				<div class="hero-video">
					<video autoplay muted playsinline loop>
						<source src="<?php echo wp_get_attachment_url( $video ) ?>"/>
					</video>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

