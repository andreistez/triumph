<?php

/**
 * Payments section layout.
 *
 * @see        Page -> Sections -> Content -> Payments.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-payments', THEME_URI . '/static/css/sections/payments/payments.min.css', [], THEME_VERSION );

$title        = $section['title'] ?? '';
$title        = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$button_label = $section['button_label'] ?? '';
$items        = $section['items'] ?? [];
?>

<section class="payments">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $items ) ){
			?>
			<div class="payments-items">
				<div class="swiper swiper-payments">
					<div class="swiper-wrapper">
						<?php
						foreach( $items as $item ){
							$icon        = $item['icon'] ?? '';
							$title       = $item['title'] ?? '';
							$desc        = $item['desc'] ?? '';
							$price       = $item['price'] ?? '';
							$bg_color    = $item['bg_color'] ?? '#fff';
							$title_color = $item['title_color'] ?? '#000';
							?>
							<div class="swiper-slide">
								<div class="payment">
									<div
										class="payment-inner"
										style="background-color: <?php echo esc_attr( $bg_color ) ?>"
									>
										<?php
										if( $icon ){
											echo '<div class="payment-img">';
											get_template_part( 'components/image', null, [
												'data' => crit_prepare_image_data( $icon, 'icon', [
													'is_lazy' => 1
												] )
											] );
											echo '</div>';
										}

										if( $title ) echo '<h4 style="color: ' . esc_attr( $title_color ) .
										                  '">', esc_html( $title ), '</h4>';

										if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
										?>
									</div>

									<?php
									if( $price ) echo '<div class="payment-price">', esc_html( $price ), '</div>';
									?>
								</div>
							</div>
							<?php
						}
						?>
					</div><!-- .swiper-wrapper -->

					<div class="payments-pagination"></div>
				</div><!-- .swiper -->
			</div><!-- .payments-items -->
			<?php
		}

		if( $button_label ){
			?>
			<div class="button-wrapper">
				<button class="button bg-red after modal-consultation">
					<?php echo esc_html( $button_label ) ?>
				</button>
			</div>
			<?php
		}
		?>
	</div><!-- .container -->
</section>

