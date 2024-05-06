<?php

/**
 * Club section layout.
 *
 * @see        Page -> Sections -> Content -> Club.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-club', THEME_URI . '/static/css/sections/club/club.min.css', [], THEME_VERSION );

$title      = $section['title'] ?? '';
$title      = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$text       = $section['text'] ?? '';
$video_yt   = $section['video_yt'] ?? null;
$video_arr  = $video_yt ? explode( '?v=', $video_yt ) : '';
$video_id   = $video_arr[1] ?? null;
$video_desc = $section['video_desc'] ?? '';
$poster     = $section['poster'] ?? null;
?>

<section class="club">
	<div class="container">
		<?php
		if( $title ) echo '<h2>', $title, '</h2>';

		if( $text || $video_id ){
			?>
			<div class="club-wrapper">
				<?php
				if( $text ) echo '<div class="club-info">', apply_filters( 'the_content', $text ), '</div>';

				if( $video_id ){
					?>
					<div class="club-video">
						<div class="yt-lazy">
							<div
								id="player-1a"
								class="yt-lazy-placeholder"
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
							echo '<div class="club-video-desc">', esc_html( $video_desc ), '</div>';
						?>
					</div>
					<?php
				}
				?>
			</div><!-- .club-wrapper -->
			<?php
		}
		?>
	</div><!-- .container -->
</section>

