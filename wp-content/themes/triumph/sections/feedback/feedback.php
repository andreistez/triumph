<?php

/**
 * Feedback section layout.
 *
 * @see        Page -> Sections -> Content -> Feedback.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-feedback', THEME_URI . '/static/css/sections/feedback/feedback.min.css', [], THEME_VERSION );

$type  = $section['type'] ?? 'standard';
$title = $section['title'] ?? '';
$title = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$desc  = $section['desc'] ?? '';
$form  = $section['form'] ?? '';

if( ! $title && ! $desc && ! $form ) return;
?>

<section class="feedback <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="feedback-wrapper">
			<div class="feedback-info">
				<?php
				if( $title ) echo '<h2>', $title, '</h2>';

				if( $desc ) echo '<p>', $desc, '</p>';
				?>
			</div>

			<?php if( $form ) echo '<div class="feedback-form">', do_shortcode( $form ), '</div>' ?>
		</div>
	</div>
</section>

