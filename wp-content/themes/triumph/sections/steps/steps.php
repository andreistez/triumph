<?php

/**
 * Steps section layout.
 *
 * @see        Page -> Sections -> Content -> Steps.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-steps', THEME_URI . '/static/css/sections/steps/steps.min.css', [], THEME_VERSION );

$title  = $section['title'] ?? '';
$title  = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$steps  = $section['steps'] ?? null;
$videos = $section['videos'] ?? '';
?>

<section class="steps">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( ! empty( $steps ) || ! empty( $videos ) ){
			?>
			<div class="steps-wrapper">
				<?php
				if( ! empty( $steps ) ){
					echo '<div class="steps-items">';

					foreach( $steps as $step ){
						$arrow_type = $step['arrow_type'] ?? 'p';
						$heading    = $step['title'] ?? '';
						$desc       = $step['desc'] ?? '';
						$bg_color   = $step['bg_color'] ?? '#fff';

						if( ! $heading && ! $desc ) continue;
						?>
						<div class="step" style="background-color: <?php echo esc_attr( $bg_color ) ?>">
							<?php
							if( $arrow_type !== 'none' ){
								?>
								<img
									src="<?php echo THEME_URI . '/static/img/arr-' . esc_attr( $arrow_type ) . '.png' ?>"
									alt=""
								/>
								<?php
							}
							?>
							<div class="step-inner">
								<div class="step-num"></div>

								<?php
								if( $heading ) echo '<h5>', esc_html( $heading ), '</h5>';

								if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
								?>
							</div>
						</div>
						<?php
					}

					echo '</div>';
				}

				if( ! empty( $videos ) ){
					?>
					<div class="steps-videos">
						<div class="steps-videos-wrapper">
							<?php
							foreach( $videos as $key => $video ){
								if( ! $video_yt = $video['video_yt'] ?? '' ) continue;

								$video_arr  = explode( '?v=', $video_yt );
								$video_id   = $video_arr[1] ?? null;
								$video_desc = $video['video_desc'] ?? '';
								$poster     = $video['poster'] ?? '';
								?>
								<div class="steps-video">
									<div class="yt-lazy">
										<div
											id="player-<?php echo $key + 1 ?>" class="yt-lazy-placeholder"
											data-video="<?php echo esc_attr( $video_id ) ?>"
										>
											<?php
											if( $poster ) get_template_part( 'components/image', null, [
												'data' => crit_prepare_image_data( $poster, 'poster', [
													'class' => 'yt-lazy-poster'
												] )
											] );
											?>

											<button class="play-button">
												<svg
													width="19" height="24" viewBox="0 0 19 24" fill="none"
													xmlns="http://www.w3.org/2000/svg"
												>
													<path
														d="M16.7428 15.0857L6.45707 22.8C3.9143 24.7071 0.285644 22.8928 0.285644 19.7143L0.285644 4.28573C0.285643 1.10727 3.9143 -0.707062 6.45707 1.20001L16.7428 8.9143C18.7999 10.4572 18.7999 13.5429 16.7428 15.0857Z"
														fill="#E53724"
													/>
												</svg>
											</button>
										</div>
									</div>

									<?php
									if( $video_desc )
										echo '<div class="steps-video-desc">', esc_html( $video_desc ), '</div>';
									?>
								</div>
								<?php
							}
							?>
						</div><!-- .steps-videos-wrapper -->
					</div><!-- .steps-videos -->
					<?php
				}
				?>
			</div><!-- .steps-wrapper -->
			<?php
		}
		?>
	</div><!-- .container -->
</section>

