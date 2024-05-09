<?php

/**
 * Format section layout.
 *
 * @see        Page -> Sections -> Content -> Format.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-format', THEME_URI . '/static/css/sections/format/format.min.css', [], THEME_VERSION );

$title        = $section['title'] ?? '';
$title        = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$items        = $section['items'] ?? null;
$button_label = $section['button_label'] ?? '';
?>

<section class="format">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( $items ){
			?>
			<div class="format-wrapper">
				<div class="swiper swiper-format">
					<div class="swiper-wrapper">
						<?php
						foreach( $items as $item ){
							$image    = $item['image'] ?? '';
							$heading  = $item['title'] ?? '';
							$desc     = $item['desc'] ?? '';
							$bg_color = $item['bg_color'] ?? '#fff';

							if( ! $image && ! $heading && ! $desc ) continue;
							?>
							<div class="swiper-slide">
								<div
									class="format-item-bg"
									style="background-color: <?php echo esc_attr( $bg_color ) ?>"
								></div>

								<?php
								if( $image ){
									echo '<div class="format-item-img">';
									get_template_part( 'components/image', null, [
										'data' => crit_prepare_image_data( $image, 'format' )
									] );
									echo '</div>';
								}

								if( $heading || $desc ){
									echo '<div class="format-inner">';

									if( $heading ) echo '<h4>', esc_html( $heading ), '</h4>';

									if( $desc ) echo '<p>', esc_html( $desc ), '</p>';

									echo '</div>';
								}
								?>
							</div>
							<?php
						}
						?>
					</div><!-- .swiper-wrapper -->

					<div class="format-pagination"></div>
				</div><!-- .swiper -->
			</div><!-- .format-wrapper -->
			<?php
		}

		if( $button_label ){
			?>
			<div class="button-wrapper">
				<button class="button bg-red after modal-lesson"><?php echo esc_html( $button_label ) ?></button>
			</div>
			<?php
		}
		?>
	</div><!-- .container -->
</section>

