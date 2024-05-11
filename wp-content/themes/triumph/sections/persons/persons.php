<?php

/**
 * Persons section layout.
 *
 * @see        Page -> Sections -> Content -> Persons.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-persons', THEME_URI . '/static/css/sections/persons/persons.min.css', [], THEME_VERSION );

$title = $section['title'] ?? '';
$title = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$team  = $section['team'] ?? [];
?>

<section class="persons">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $team ) ){
			?>
			<div class="persons-wrapper">
				<div class="swiper swiper-persons">
					<div class="swiper-wrapper">
						<?php
						foreach( $team as $person ){
							if( ! $image = $person['image'] ?? '' ) continue;

							$name     = $person['name'] ?? '';
							$position = $person['position'] ?? '';
							?>
							<div class="swiper-slide">
								<div class="person-img">
									<?php
									get_template_part( 'components/image', null, [
										'data' => crit_prepare_image_data( $image, 'team', ['is_lazy' => 1] )
									] );
									?>
								</div>

								<?php
								if( $name ) echo '<div class="person-name">', esc_html( $name ), '</div>';

								if( $position ) echo '<div class="person-position">', esc_html( $position ), '</div>';
								?>
							</div>
							<?php
						}
						?>
					</div><!-- .swiper-wrapper -->

					<div class="persons-pagination"></div>
				</div><!-- .swiper -->

				<div class="swiper-buttons">
					<div class="persons-prev">
						<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
						</svg>
					</div>
					<div class="persons-next">
						<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
						</svg>
					</div>
				</div>
			</div><!-- .persons-wrapper -->
			<?php
		}
		?>
	</div><!-- .container -->
</section>

