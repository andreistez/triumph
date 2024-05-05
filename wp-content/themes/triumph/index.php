<?php

/**
 * Index page default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

get_header();

wp_enqueue_style( 'fc-hero', THEME_URI . '/static/css/sections/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-about', THEME_URI . '/static/css/sections/about/about.min.css', [], THEME_VERSION );
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
		<section class="about">
			<div class="container">
				<h2>Акробатический рок-н-ролл <span>это</span></h2>
				<div class="about-items">
					<div class="about-item">
						<div class="about-item-inner">
							<div class="about-item-info">
								<p>
									Объединение акробатических элементов и элементы танца. На острие эмоций и в полной атмосфере праздника.
								</p>
							</div>
							<div class="about-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/about1.png" alt="">
							</div>
						</div>
					</div>
					<div class="about-item">
						<div class="about-item-inner">
							<div class="about-item-info">
								<p>
									Фееричный вид спорта, где на сцене дети показывают высший класс в красивых костюмах.
								</p>
							</div>
							<div class="about-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/about2.png" alt="">
							</div>
						</div>
					</div>
					<div class="about-item">
						<div class="about-item-inner">
							<div class="about-item-info">
								<p>
									Мальчики и девочки становятся настоящими спортсменами выполняя сложнейшую акробатику в парах.
								</p>
							</div>
							<div class="about-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/about3.png" alt="">
							</div>
						</div>
					</div>
					<div class="about-item">
						<div class="about-item-inner">
							<div class="about-item-info">
								<p>
									Дети не только учатся танцевать и быть раскрепощёнными,
									но и учатся правильно взаимодействовать
									с противоположным полом.
								</p>
							</div>
							<div class="about-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/about4.png" alt="">
							</div>
						</div>
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

