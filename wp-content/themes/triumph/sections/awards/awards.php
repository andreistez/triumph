<?php

/**
 * Awards section layout.
 *
 * @see        Page -> Sections -> Content -> Awards.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-awards', THEME_URI . '/static/css/sections/awards/awards.min.css', [], THEME_VERSION );

$title  = $section['title'] ?? '';
$title  = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$photos = $section['photos'] ?? null;
?>

<section class="awards">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $photos ) ){
			?>
			<div class="awards-photos">
				<div class="swiper swiper-awards">
					<div class="swiper-wrapper">
						<?php
						foreach( $photos as $photo ){
							$image = $photo['image'] ?? null;
							$desc  = $photo['desc'] ?? '';

							if( ! $image ) continue;
							?>
							<div class="swiper-slide">
								<?php
								get_template_part( 'components/image', null, [
									'data' => crit_prepare_image_data( $image, 'award', [
										'loading' => 'lazy'
									] )
								] );
								?>

								<?php if( $desc ) echo '<div class="awards-desc">', esc_html( $desc ), '</div>' ?>
							</div>
							<?php
						}
						?>
					</div>

					<div class="awards-pagination"></div>
				</div>

				<div class="awards-prev">
					<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
					</svg>
				</div>
				<div class="awards-next">
					<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
					</svg>
				</div>
			</div><!-- .awards-photos -->
			<?php
		}
		?>
	</div><!-- .container -->
</section>

