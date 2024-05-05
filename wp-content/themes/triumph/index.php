<?php

/**
 * Index page default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

get_header();

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
// wp_enqueue_script( 'fc-hero', THEME_URI . '/static/js/hero/hero.min.js', [ 'jquery' ], THEME_VERSION, true );

$sections = carbon_get_the_post_meta( 'page_sections' );
?>

	<main class="main">
		<section class="hero">
			<div class="container">
				<div class="hero-wrapper">
					<div class="hero-info">
						<h1>
							Клуб <span>акробатического рок-н-ролла</span> в Москве
							для детей от пяти лет
						</h1>
						<div class="hero-items">
							<div class="hero-item">
								<div class="hero-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/hero1.svg" alt="">
								</div>
								<p>
									Редкий и быстро развивающийся спортивный парно-командный стиль танца
								</p>
							</div>
							<div class="hero-item">
								<div class="hero-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/hero2.svg" alt="">
								</div>
								<p>
									На сегодня в клубе состоит более 150 человек
								</p>
							</div>
							<div class="hero-item">
								<div class="hero-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/hero3.svg" alt="">
								</div>
								<p>
									Хорошая атмосфера, новые друзья и отличные результаты
								</p>
							</div>
							<div class="hero-item">
								<div class="hero-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/hero4.svg" alt="">
								</div>
								<p>
									Возможность выполнить звание и стать чемпионом мира
								</p>
							</div>
						</div>
						<button class="button after-red">
							Записаться на пробное занятие
						</button>
					</div>
					<div class="hero-video">
						<video autoplay muted playsinline loop>
							<source src="<?php echo THEME_URI ?>/static/video/hero.mp4"/>
						</video>
					</div>
				</div>
			</div>
		</section>

		<?php
		while( have_posts() ){
			the_post();

			foreach( $sections as $section ){
				$type = $section['_type'];
				get_template_part( "sections/$type/$type", null, [ 'section' => $section ] );
			}
		}
		?>
	</main>

<?php
get_footer();

