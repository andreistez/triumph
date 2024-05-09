<?php

/**
 * Footer default template.
 *
 * @package WordPress
 * @subpackage triumph
 */

$logo = carbon_get_theme_option( 'footer_logo' ) ?? null;
$desc = carbon_get_theme_option( 'footer_desc' ) ?? '';
?>

			<footer class="footer">
				<div class="container">
					<div class="footer-wrapper">
						<?php
						if( $logo ){
							echo '<a href="' . get_bloginfo( 'url' ) . '">';
							get_template_part( 'components/image', null, [
								'data' => crit_prepare_image_data( $logo, 'logo' )
							] );
							echo '</a>';
						}

						if( $desc ) echo '<p>', $desc, '</p>';
						?>
					</div>
				</div>
			</footer>
			<div class="modal-wrapper" id="modal-lesson">
                <div class="modal">
                    <?php echo do_shortcode( '[contact-form-7 id="1e0bb42" title="Запись на пробное занятие(модальное окно)"]' ) ?>
                </div>
            </div>
			<div class="modal-wrapper" id="modal-consultation">
                <div class="modal">
                    <?php echo do_shortcode( '[contact-form-7 id="ee25a4e" title="Получить консультацию(модальное окно)"]' ) ?>
                </div>
            </div>
			<?php wp_footer() ?>
		</div><!-- .wrapper -->
    </body>
</html>

