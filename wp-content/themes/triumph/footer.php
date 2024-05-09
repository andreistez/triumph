<?php

/**
 * Footer default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

$logo              = carbon_get_theme_option( 'footer_logo' ) ?? null;
$desc              = carbon_get_theme_option( 'footer_desc' ) ?? '';
$form_lesson       = carbon_get_theme_option( 'form_lesson' ) ?? '';
$form_consultation = carbon_get_theme_option( 'form_consultation' ) ?? '';
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

<?php
if( $form_lesson ){
	?>
	<div class="modal-wrapper" id="modal-lesson">
		<div class="modal">
			<button class="close"><span></span></button>
			<?php echo do_shortcode( $form_lesson ) ?>
		</div>
	</div>
	<?php
}

if( $form_consultation ){
	?>
	<div class="modal-wrapper" id="modal-consultation">
		<div class="modal">
			<button class="close"><span></span></button>
			<?php echo do_shortcode( $form_consultation ) ?>
		</div>
	</div>
	<?php
}

wp_footer();
?>
</div><!-- .wrapper --></body></html>

