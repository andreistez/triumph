<?php

/**
 * Gallery section layout.
 *
 * @see        Page -> Sections -> Content -> Gallery.
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'fc-gallery', THEME_URI . '/static/css/sections/gallery/gallery.min.css', [], THEME_VERSION );

$title       = $section['title'] ?? '';
$title       = $title ? str_replace( ['[color]', '[/color]'], ['<span>', '</span>'], $title ) : '';
$video_type  = $section['video_type'] ?? 'local';
$video_local = $section['video_local'] ?? null;
$video_yt    = $section['video_yt'] ?? '';
$video_arr   = ( $video_type === 'yt' && $video_yt ) ? explode( '?v=', $video_yt ) : [];
$video_id    = $video_arr[1] ?? null;
$video_desc  = $section['video_desc'] ?? '';
$poster      = $section['poster'] ?? '';
$gallery     = $section['gallery'] ?? [];
?>

<section class="gallery">
	<div class="container">
		<div class="gallery-wrapper">
			<div class="gallery-info">
				<?php
				if( $title ) echo '<h2>', $title, '</h2>';

				if( $video_type === 'yt' && $video_id ){
					?>
					<div class="gallery-video">
						<div class="yt-lazy">
							<div
								id="player"
								class="yt-lazy-placeholder"
								data-video="<?php echo esc_attr( $video_id ) ?>"
							>
								<?php
								if( $poster ) get_template_part( 'components/image', null, [
									'data' => crit_prepare_image_data( $poster, 'poster', [
										'class'   => 'yt-lazy-poster',
										'is_lazy' => 1
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
						if( $video_desc ) echo '<div class="gallery-video-desc"><p>', esc_html( $video_desc ), '</p></div>';
						?>
					</div>
					<?php
				}else if ( $video_type === 'local' && $video_local ){
					?>
					<div class="gallery-video">
						<video autoplay muted playsinline loop>
							<source src="<?php echo wp_get_attachment_url( $video_local ) ?>"/>
						</video>

						<?php
						if( $poster ) get_template_part( 'components/image', null, [
							'data' => crit_prepare_image_data( $poster, 'poster', [
								'class'   => 'yt-lazy-poster',
								'is_lazy' => 1
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
					<?php
				}
				?>
			</div><!-- .gallery-info -->

			<?php
			if( ! empty( $gallery ) ){
				?>
				<div class="gallery-photo">
					<div class="swiper swiper-gallery">
						<div class="swiper-wrapper">
							<?php
							foreach( $gallery as $item ){
								$image = $item['image'] ?? '';
								$desc  = $item['desc'] ?? '';

								if( ! $image && ! $desc ) continue;

								echo '<div class="swiper-slide">';

								if( $image ){
									echo '<div class="gallery-photo">';
									get_template_part( 'components/image', null, [
										'data' => crit_prepare_image_data( $image, 'slide', ['is_lazy' => 1] )
									] );
									echo '</div>';
								}

								if( $desc ) echo '<div class="gallery-photo-desc"><p>', esc_html( $desc ), '</p></div>';

								echo '</div>';
							}
							?>
						</div>
					</div><!-- .swiper.swiper-gallery -->
					<div class="swiper-gallery-controls">
							<div class="swiper-pagination"></div>
							<div class="swiper-buttons">
								<div class="swiper-prev sm">
									<svg
										width="18" height="14" viewBox="0 0 18 14" fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"
										/>
									</svg>
								</div>
								<div class="swiper-next sm">
									<svg
										width="18" height="14" viewBox="0 0 18 14" fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"
										/>
									</svg>
								</div>
							</div>
						</div>
				</div><!-- .gallery-photo -->
				<?php
			}
			?>
		</div><!-- .gallery-wrapper -->
	</div><!-- .container -->
</section>

