<?php

/**
 * FAQ section layout.
 *
 * @see        Page -> Sections -> Content -> FAQ.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-faq', THEME_URI . '/static/css/sections/faq/faq.min.css', [], THEME_VERSION );
wp_enqueue_script( 'fc-faq', THEME_URI . '/static/js/faq/faq.min.js', ['jquery'], THEME_VERSION, true );

$title = $section['title'] ?? '';
$title = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$items = $section['items'] ?? [];
?>

<section class="faq">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $items ) ){
			echo '<div class="dropdowns">';

			foreach( $items as $item ){
				$question = $item['question'] ?? '';
				$answer   = $item['answer'] ?? '';

				if( ! $question || ! $answer ) return;
				?>
				<div class="dropdown">
					<button class="dropdown-button">
						<div class="dropdown-button-ico">
							<span></span>
						</div>
					</button>
					<div class="dropdown-box">
						<h4><?php echo esc_html( $question ) ?></h4>

						<div class="dropdown-open">
							<div class="dropdown-inner">
								<?php echo apply_filters( 'the_content', $answer ) ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}

			echo '</div>';
		}
		?>
	</div><!-- .container -->
</section>

