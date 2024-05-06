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
wp_enqueue_style( 'fc-gallery', THEME_URI . '/static/css/sections/gallery/gallery.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-format', THEME_URI . '/static/css/sections/format/format.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-steps', THEME_URI . '/static/css/sections/steps/steps.min.css', [], THEME_VERSION );
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
		<section class="gallery">
			<div class="container">
				<div class="gallery-wrapper">
					<div class="gallery-info">
						<h2><span>Галерея</span> событий</h2>
						<div class="gallery-video">
							<div class="yt-lazy">
								<div id="player" class="yt-lazy-placeholder" data-video="0xhzwDXfLds">
									<img class="yt-lazy-poster" src="<?php echo THEME_URI ?>/static/img/gallery-cover.jpg" alt="">								
									<button class="play-button">
										<svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.7428 15.0857L6.45707 22.8C3.9143 24.7071 0.285644 22.8928 0.285644 19.7143L0.285644 4.28573C0.285643 1.10727 3.9143 -0.707062 6.45707 1.20001L16.7428 8.9143C18.7999 10.4572 18.7999 13.5429 16.7428 15.0857Z" fill="#E53724"/>
										</svg>
									</button>
								</div>
							</div>
							<div class="gallery-video-desc">
								<p>Здесь описание к видео</p>
							</div>
						</div>
					</div>
					<div class="gallery-photo">
						<div class="swiper swiper-gallery">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="gallery-photo">
										<img src="<?php echo THEME_URI ?>/static/img/g1.jpg" alt="">
									</div>
									<div class="gallery-photo-desc">
										<p>Здесь описание к фотографии</p>
									</div>
								</div>
							</div>
							<div class="swiper-gallery-controls">
								<div class="swiper-pagination"></div>
								<div class="swiper-buttons">
									<div class="swiper-prev sm">
										<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
										</svg>
									</div>
									<div class="swiper-next sm">
										<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
										</svg>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="format">
			<div class="container">
				<h2>Формат <span>занятий</span></h2>
				<div class="format-wrapper">
					<div class="swiper swiper-format">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="format-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/f1.png" alt="">
								</div>
								<div class="format-inner">
									<h4>Индивидуальные в парах</h4>
									<p>от 2000 ₽/занятие</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="format-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/f2.png" alt="">
								</div>
								<div class="format-inner">
									<h4>В командах</h4>
									<p>от 2000 ₽/занятие</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="format-item-img">
									<img src="<?php echo THEME_URI ?>/static/img/f3.png" alt="">
								</div>
								<div class="format-inner">
									<h4>В группах</h4>
									<p>от 2000 ₽/занятие</p>
								</div>
							</div>
						</div>
						<div class="format-pagination"></div>
					</div>
				</div>
				<div class="button-wrapper">
					<button class="button bg-red after">Записаться на пробное занятие</button>
				</div>
			</div>
		</section>
		<section class="steps">
			<div class="container">
				<h2>Как проходит <span>обучение</span></h2>
				<div class="steps-wrapper">
					<div class="steps-items">
						<div class="step">
							<img src="<?php echo THEME_URI ?>/static/img/arr-p.png" alt="">
							<div class="step-inner">
								<div class="step-num"></div>
								<h5>Общая физическая подготовка</h5>
								<p>
									Объединение акробатических элементов
									и элементы танца. На острие эмоций и в полной атмосфере праздника. 
								</p>
							</div>
						</div>
						<div class="step">
							<img src="<?php echo THEME_URI ?>/static/img/arr-a.png" alt="">
							<div class="step-inner">
								<div class="step-num"></div>
								<h5>Изучение базовых движений</h5>
								<p>
									Изучение основных движения рок-н-ролла и достижение отличной физической формы.
								</p>
							</div>
						</div>
						<div class="step">
							<img src="<?php echo THEME_URI ?>/static/img/arr-r.png" alt="">
							<div class="step-inner">
								<div class="step-num"></div>
								<h5>Переход к сложной хореографии</h5>
								<p>
									По мере освоения базовых шагов переходят к овладению сложной хореографией и акробатическимиэлементами.
								</p>
							</div>
						</div>
						<div class="step">
							<div class="step-inner">
								<div class="step-num"></div>
								<h5>Успешное участие в соревнованиях</h5>
								<p>
									Постепенно наши ученикиначинают участвовать всоревнованиях и получатьспортивные разряды
								</p>
							</div>
						</div>
					</div>
					<div class="steps-videos">
						<div class="steps-videos-wrapper">
							<div class="steps-video">
								<div class="yt-lazy">
									<div id="player-1" class="yt-lazy-placeholder" data-video="L3Dp4oGkn3k">
										<img class="yt-lazy-poster" src="<?php echo THEME_URI ?>/static/img/s1.jpg" alt="">								
										<button class="play-button">
											<svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M16.7428 15.0857L6.45707 22.8C3.9143 24.7071 0.285644 22.8928 0.285644 19.7143L0.285644 4.28573C0.285643 1.10727 3.9143 -0.707062 6.45707 1.20001L16.7428 8.9143C18.7999 10.4572 18.7999 13.5429 16.7428 15.0857Z" fill="#E53724"/>
											</svg>
										</button>
									</div>
								</div>
								<div class="steps-video-desc">
									Здесь описание к видео
								</div>
							</div>
							<div class="steps-video">
								<div class="yt-lazy">
									<div id="player-2" class="yt-lazy-placeholder" data-video="xJ_fFLgGHiU">
										<img class="yt-lazy-poster" src="<?php echo THEME_URI ?>/static/img/s2.jpg" alt="">								
										<button class="play-button">
											<svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M16.7428 15.0857L6.45707 22.8C3.9143 24.7071 0.285644 22.8928 0.285644 19.7143L0.285644 4.28573C0.285643 1.10727 3.9143 -0.707062 6.45707 1.20001L16.7428 8.9143C18.7999 10.4572 18.7999 13.5429 16.7428 15.0857Z" fill="#E53724"/>
											</svg>
										</button>
									</div>
								</div>
								<div class="steps-video-desc">
									Здесь описание к видео
								</div>
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

