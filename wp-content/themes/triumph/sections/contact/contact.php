<?php

/**
 * Contact section layout.
 *
 * @see        Page -> Sections -> Content -> Contact.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-contact', THEME_URI . '/static/css/sections/contact/contact.min.css', [], THEME_VERSION );

$title          = $section['title'] ?? '';
$title          = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$addresses      = $section['addresses'] ?? [];
$worktime_title = $section['worktime_title'] ?? '';
$worktime       = $section['worktime'] ?? '';
$links_title    = $section['links_title'] ?? '';
$links          = $section['links'] ?? [];
$phone          = carbon_get_theme_option( 'phone' ) ?? '';
?>

<section class="contact">
	<div class="container">
		<div class="contact-wrapper">
			<div class="contact-info">
				<?php
				if( $title ) echo '<h2>', $title, '</h2>';

				if( ! empty( $addresses ) ){
					echo '<div class="contact-buttons">';

					foreach( $addresses as $key => $addr ){
						$address = $addr['address'] ?? '';
						$desc    = $addr['address_desc'] ?? '';

						if( ! $address && ! $desc ) continue;
						?>
						<button class="contact-button<?php echo $key === 0 ? ' active' : '' ?>">
							<div class="contact-button-inner">
								<?php
								if( $address ) echo '<address>', $address, '</address>';

								if( $desc ) echo '<div class="address-desc">', esc_html( $desc ), '</div>';
								?>
							</div>
						</button>
						<?php
					}

					echo '</div>';
				}

				if( $worktime_title || $worktime ){
					echo '<div class="contact-worktime">';

					if( $worktime_title ) echo '<p>', esc_html( $worktime_title ), '</p>';

					if( $worktime ) echo '<p>', esc_html( $worktime ), '</p>';

					echo '</div>';
				}

				if( $links_title || $links ){
					echo '<div class="contact-links">';

					if( $links_title ) echo '<p>', esc_html( $links_title ), '</p>';

					if( ! empty( $links ) ){
						echo '<div class="contact-links-wrapper">';

						foreach( $links as $link ){
							$icon = $link['icon'] ?? '';
							$url  = $link['url'] ?? '';

							if( ! $url || ! $link ) continue;
							?>
							<a class="social-link" href="<?php echo esc_url( $url ) ?>" target="_blank">
								<?php
								get_template_part( 'components/image', null, [
									'data' => crit_prepare_image_data( $icon, 'header-icon' )
								] );
								?>
							</a>
							<?php
						}

						if( $phone ){
							?>
							<a class="contact-phone" href="tel:<?php echo esc_attr( crit_clean_phone( $phone ) ) ?>">
								<?php echo esc_html( $phone ) ?>
							</a>
							<?php
						}

						echo '</div>';
					}

					echo '</div>';
				}
				?>
			</div><!-- .contact-info -->

			<div id="contact-map" class="contact-map"></div>
		</div><!-- .contact-wrapper -->
	</div><!-- .container -->
</section>

