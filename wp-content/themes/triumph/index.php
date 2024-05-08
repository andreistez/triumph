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
wp_enqueue_style( 'fc-club', THEME_URI . '/static/css/sections/club/club.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-awards', THEME_URI . '/static/css/sections/awards/awards.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-feedback', THEME_URI . '/static/css/sections/feedback/feedback.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-persons', THEME_URI . '/static/css/sections/persons/persons.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-payments', THEME_URI . '/static/css/sections/payments/payments.min.css', [], THEME_VERSION );
wp_enqueue_style( 'fc-faq', THEME_URI . '/static/css/sections/faq/faq.min.css', [], THEME_VERSION );
wp_enqueue_script( 'fc-faq', THEME_URI . '/static/js/faq/faq.min.js', [ 'jquery' ], THEME_VERSION, true );
wp_enqueue_style( 'fc-contact', THEME_URI . '/static/css/sections/contact/contact.min.css', [], THEME_VERSION );

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
		<section class="club">
			<div class="container">
				<h2>О <span>клубе</span></h2>
				<div class="club-wrapper">
					<div class="club-info">
						<p>
							Мы рады представить вам наш клуб, который стал яркой звездой в этом захватывающем виде спорта. <br><br>
							Наш клуб - молодые амбициозные тренеры, высшей спортивной подготовки, вырастившие множество чемпионов к своему молодому возрасту. <br><br>
							Наше главное желание - подарить детям незабываемые эмоции и оставить след в их сердцах. Мы уверены, что наш клуб станет яркой точкой для любого ребёнка и оставит потрясающие воспоминания на всю жизнь. <br><br>
							Доверьтесь нашей команде профессионалов и позвольте нам сделать детство вашего ребёнка счастливым. Ведь каждое его выступление станет настоящим триумфом стиля, энергии и таланта.
						</p>
					</div>
					<div class="club-video">
						<div class="yt-lazy">
							<div id="player-1a" class="yt-lazy-placeholder" data-video="Kq2pjFd0EAY">
								<img class="yt-lazy-poster" src="<?php echo THEME_URI ?>/static/img/c1.jpg" alt="">								
								<button class="play-button">
									<svg width="19" height="24" viewBox="0 0 19 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.7428 15.0857L6.45707 22.8C3.9143 24.7071 0.285644 22.8928 0.285644 19.7143L0.285644 4.28573C0.285643 1.10727 3.9143 -0.707062 6.45707 1.20001L16.7428 8.9143C18.7999 10.4572 18.7999 13.5429 16.7428 15.0857Z" fill="#E53724"/>
									</svg>
								</button>
							</div>
						</div>
						<div class="club-video-desc">
							Здесь видео с рассказом о клубе
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="awards">
			<div class="container">
				<h2>Награды</h2>
				<div class="awards-photos">
					<div class="swiper swiper-awards">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo THEME_URI ?>/static/img/a1.jpg" alt="">
								<div class="awards-desc">
									Описание за что награда
								</div>
							</div>
							<div class="swiper-slide">
								<img src="<?php echo THEME_URI ?>/static/img/a2.jpg" alt="">
								<div class="awards-desc">
									Описание за что награда
								</div>
							</div>
							<div class="swiper-slide">
								<img src="<?php echo THEME_URI ?>/static/img/a1.jpg" alt="">
								<div class="awards-desc">
									Описание за что награда
								</div>
							</div>
							<div class="swiper-slide">
								<img src="<?php echo THEME_URI ?>/static/img/a2.jpg" alt="">
								<div class="awards-desc">
									Описание за что награда
								</div>
							</div>
						</div>
						<div class="awards-pagination"></div>
					</div>
					<div class="awards-prev">
							<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
							</svg>
						</div>
						<div class="awards-next">
							<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
							</svg>
						</div>
				</div>
			</div>
		</section>
		<section class="feedback">
			<div class="container">
				<div class="feedback-wrapper">
					<div class="feedback-info">
						<h2>
							Просто попробуйте <br> и убедитесь, <span>что <br> акробатический <br> рок-н-ролл</span>  это круто!
						</h2>
						<p>
							Мы предоставляем возможность бесплатного пробного посещение нашего клуба, чтобы вы и ваш ребенок убедились, что вам это подходит
						</p>
					</div>
					<div class="feedback-form">
					 	<?php echo do_shortcode( '[contact-form-7 id="13def80" title="Запись на пробное занятие"]' ) ?>
					</div>
				</div>
			</div>
		</section>
		<section class="persons">
			<div class="container">
				<h2>Преподаватели</h2>
				<div class="persons-wrapper">
					<div class="swiper swiper-persons">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="person-img">
									<img src="<?php echo THEME_URI ?>/static/img/p1.jpg" alt="">
								</div>
								<div class="person-name">Валентин Стогниенков</div>
								<div class="person-position">Должность, Стаж</div>
							</div>
							<div class="swiper-slide">
								<div class="person-img">
									<img src="<?php echo THEME_URI ?>/static/img/p2.jpg" alt="">
								</div>
								<div class="person-name">Валентин Стогниенков</div>
								<div class="person-position">Должность, Стаж</div>
							</div>
							<div class="swiper-slide">
								<div class="person-img">
									<img src="<?php echo THEME_URI ?>/static/img/p3.jpg" alt="">
								</div>
								<div class="person-name">Валентин Стогниенков</div>
								<div class="person-position">Должность, Стаж</div>
							</div>
							<div class="swiper-slide">
								<div class="person-img">
									<img src="<?php echo THEME_URI ?>/static/img/p4.jpg" alt="">
								</div>
								<div class="person-name">Валентин Стогниенков</div>
								<div class="person-position">Должность, Стаж</div>
							</div>
							<div class="swiper-slide">
								<div class="person-img">
									<img src="<?php echo THEME_URI ?>/static/img/p2.jpg" alt="">
								</div>
								<div class="person-name">Валентин Стогниенков</div>
								<div class="person-position">Должность, Стаж</div>
							</div>
						</div>
						<div class="persons-pagination"></div>
					</div>
					<div class="swiper-buttons">
						<div class="persons-prev">
							<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
							</svg>
						</div>
						<div class="persons-next">
							<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M18 7H2M2 7L7.80357 13M2 7L7.80357 1" stroke="#E53724" stroke-width="2"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="payments">
			<div class="container">
				<h2>У нас <span>гибкая система оплаты</span></h2>
				<div class="payments-items">
					<div class="swiper swiper-payments">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="payment">
									<div class="payment-inner">
										<div class="payment-img">
											<svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_150_402)">
												<path d="M11.0833 23.2734L21.0415 36.0568C21.9587 37.2375 24.0333 36.579 24.3172 35.1485C26.8286 22.9555 35.1489 14.4182 43.5565 6.17598C45.3909 4.35951 42.6175 1.47588 40.7831 3.29234C31.895 12.0341 23.1816 21.2072 20.5392 34.0814L23.8149 33.1731L13.8568 20.3898C12.2626 18.3463 9.48916 21.2526 11.0833 23.2734Z" fill="#5C3A84"/>
												<path d="M34.952 2.95199C26.6099 -1.45293 15.5817 -0.953406 7.93834 4.60951C-2.54392 12.2386 -0.425626 30.1535 6.366 39.8716C13.5944 50.2254 29.4051 49.7259 39.2104 43.6634C49.0157 37.601 52.2477 19.8224 43.5562 11.1261C41.7436 9.3096 38.9484 12.1932 40.7827 14.0097C50.7191 23.9548 41.5252 40.0986 30.4315 42.8687C19.3378 45.6388 9.42333 41.5518 6.14762 29.4723C3.17765 18.5054 5.86373 6.33515 18.2241 4.33704C22.5917 3.63316 28.9902 4.35974 32.9866 6.47138C35.2359 7.65208 37.2231 4.13269 34.9738 2.95199H34.952Z" fill="#5C3A84"/>
												</g>
												<defs>
												<clipPath id="clip0_150_402">
												<rect width="48" height="48" fill="white" transform="translate(0.666504)"/>
												</clipPath>
												</defs>
											</svg>
										</div>
										<h4>Оплата за занятие</h4>
										<p>
											Объединение акробатических элементов и элементы танца. На острие эмоций и в полной атмосфере праздника. 
										</p>
									</div>
									<div class="payment-price">
										от 2000 р./занятие
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="payment">
									<div class="payment-inner">
										<div class="payment-img">
											<svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_150_403)">
												<path d="M11.0833 23.2734L21.0415 36.0568C21.9587 37.2375 24.0333 36.579 24.3172 35.1485C26.8286 22.9555 35.1489 14.4182 43.5565 6.17598C45.3909 4.35951 42.6175 1.47588 40.7831 3.29234C31.895 12.0341 23.1816 21.2072 20.5392 34.0814L23.8149 33.1731L13.8568 20.3898C12.2626 18.3463 9.48916 21.2526 11.0833 23.2734Z" fill="#169796"/>
												<path d="M34.952 2.95199C26.6099 -1.45293 15.5817 -0.953406 7.93834 4.60951C-2.54392 12.2386 -0.425626 30.1535 6.366 39.8716C13.5944 50.2254 29.4051 49.7259 39.2104 43.6634C49.0157 37.601 52.2477 19.8224 43.5562 11.1261C41.7436 9.3096 38.9484 12.1932 40.7827 14.0097C50.7191 23.9548 41.5252 40.0986 30.4315 42.8687C19.3378 45.6388 9.42333 41.5518 6.14762 29.4723C3.17765 18.5054 5.86373 6.33515 18.2241 4.33704C22.5917 3.63316 28.9902 4.35974 32.9866 6.47138C35.2359 7.65208 37.2231 4.13269 34.9738 2.95199H34.952Z" fill="#169796"/>
												</g>
												<defs>
												<clipPath id="clip0_150_403">
												<rect width="48" height="48" fill="white" transform="translate(0.666504)"/>
												</clipPath>
												</defs>
											</svg>
										</div>
										<h4>Оплата за месяц</h4>
										<p>
											Здесь нужен текст поясняющий эту систему оплаты
										</p>
									</div>
									<div class="payment-price">
										от 8 000 р./в месяц
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="payment">
									<div class="payment-inner">
										<div class="payment-img">
											<svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_150_404)">
												<path d="M11.0833 23.2734L21.0415 36.0568C21.9587 37.2375 24.0333 36.579 24.3172 35.1485C26.8286 22.9555 35.1489 14.4182 43.5565 6.17598C45.3909 4.35951 42.6175 1.47588 40.7831 3.29234C31.895 12.0341 23.1816 21.2072 20.5392 34.0814L23.8149 33.1731L13.8568 20.3898C12.2626 18.3463 9.48916 21.2526 11.0833 23.2734Z" fill="#E53724"/>
												<path d="M34.952 2.95199C26.6099 -1.45293 15.5817 -0.953406 7.93834 4.60951C-2.54392 12.2386 -0.425626 30.1535 6.366 39.8716C13.5944 50.2254 29.4051 49.7259 39.2104 43.6634C49.0157 37.601 52.2477 19.8224 43.5562 11.1261C41.7436 9.3096 38.9484 12.1932 40.7827 14.0097C50.7191 23.9548 41.5252 40.0986 30.4315 42.8687C19.3378 45.6388 9.42333 41.5518 6.14762 29.4723C3.17765 18.5054 5.86373 6.33515 18.2241 4.33704C22.5917 3.63316 28.9902 4.35974 32.9866 6.47138C35.2359 7.65208 37.2231 4.13269 34.9738 2.95199H34.952Z" fill="#E53724"/>
												</g>
												<defs>
												<clipPath id="clip0_150_404">
												<rect width="48" height="48" fill="white" transform="translate(0.666504)"/>
												</clipPath>
												</defs>
											</svg>
										</div>
										<h4>Абонемент</h4>
										<p>
											Выдаётся на определенное количество занятий (10, 20, 40). Чем больше занятий, тем меньше цена за 1 занятие
										</p>
									</div>
									<div class="payment-price">
										от 1700 р./занятие
									</div>
								</div>
							</div>
						</div>
						<div class="payments-pagination"></div>
					</div>
				</div>
				<div class="button-wrapper">
					<button class="button bg-red after">
						Получить консультацию
					</button>
				</div>
			</div>
		</section>
		<section class="faq">
			<div class="container">
				<h2>Часто-задаваемые <span>вопросы</span></h2>
				<div class="dropdowns">
					<div class="dropdown">
						<button class="dropdown-button">
							<div class="dropdown-button-ico">
								<img src="<?php echo THEME_URI ?>/static/img/dropdown.svg" alt="">
							</div>
						</button>
						<div class="dropdown-box">
							<h4>Часто-задаваемый вопрос</h4>
							<div class="dropdown-open">
								<div class="dropdown-inner">
									<p>
										Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект требует от нас анализа новых предложений. Вот вам яркий пример современных тенденций — семантический разбор внешних противодействий представляет собой интересный эксперимент проверки стандартных подходов.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropdown-button">
							<div class="dropdown-button-ico">
								<img src="<?php echo THEME_URI ?>/static/img/dropdown.svg" alt="">
							</div>
						</button>
						<div class="dropdown-box">
							<h4>Часто-задаваемый вопрос</h4>
							<div class="dropdown-open">
								<div class="dropdown-inner">
									<p>
										Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект требует от нас анализа новых предложений. Вот вам яркий пример современных тенденций — семантический разбор внешних противодействий представляет собой интересный эксперимент проверки стандартных подходов.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropdown-button">
							<div class="dropdown-button-ico">
								<img src="<?php echo THEME_URI ?>/static/img/dropdown.svg" alt="">
							</div>
						</button>
						<div class="dropdown-box">
							<h4>Часто-задаваемый вопрос</h4>
							<div class="dropdown-open">
								<div class="dropdown-inner">
									<p>
										Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект требует от нас анализа новых предложений. Вот вам яркий пример современных тенденций — семантический разбор внешних противодействий представляет собой интересный эксперимент проверки стандартных подходов.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropdown-button">
							<div class="dropdown-button-ico">
								<img src="<?php echo THEME_URI ?>/static/img/dropdown.svg" alt="">
							</div>
						</button>
						<div class="dropdown-box">
							<h4>Часто-задаваемый вопрос</h4>
							<div class="dropdown-open">
								<div class="dropdown-inner">
									<p>
										Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект требует от нас анализа новых предложений. Вот вам яркий пример современных тенденций — семантический разбор внешних противодействий представляет собой интересный эксперимент проверки стандартных подходов.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown">
						<button class="dropdown-button">
							<div class="dropdown-button-ico">
								<img src="<?php echo THEME_URI ?>/static/img/dropdown.svg" alt="">
							</div>
						</button>
						<div class="dropdown-box">
							<h4>Часто-задаваемый вопрос</h4>
							<div class="dropdown-open">
								<div class="dropdown-inner">
									<p>
										Разнообразный и богатый опыт говорит нам, что курс на социально-ориентированный национальный проект требует от нас анализа новых предложений. Вот вам яркий пример современных тенденций — семантический разбор внешних противодействий представляет собой интересный эксперимент проверки стандартных подходов.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact">
			<div class="container">
				<div class="contact-wrapper">
					<div class="contact-info">
						<h2>Контакты</h2>
						<div class="contact-buttons">
							<button class="contact-button active">
								<div class="contact-button-inner">
									<address>г. Москва, ш. Энтузиастов, 33</address>
									<div class="address-desc">Основной адрес</div>
								</div>
							</button>
							<button class="contact-button">
								<div class="contact-button-inner">
									<address>г. Москва, Покровка, 10с5</address>
									<div class="address-desc">Филиал</div>
								</div>
							</button>
							<button class="contact-button">
								<div class="contact-button-inner">
									<address>г. Москва, Измайловский проспект, 53</address>
									<div class="address-desc">Филиал</div>
								</div>
							</button>
						</div>
						<div class="contact-worktime">
							<p>
								Время работы: 
							</p>
							<p>
								пн-вс, 10:00-21:00
							</p>
						</div>
						<div class="contact-links">
							<p>Телефон для связи:</p>
							<div class="contact-links-wrapper">
								<a class="social-link" href="#">
									<img src="<?php echo THEME_URI ?>/static/img/whatsapp.svg" alt="">
								</a>
								<a class="social-link" href="#">
									<img src="<?php echo THEME_URI ?>/static/img/telegram.svg" alt="">
								</a>
								<a class="contact-phone" href="tel:79161326468">
									+7 (916) 132-64-68
								</a>
							</div>
						</div>
					</div>
					<div class="contact-map"></div>
				</div>
			</div>
		</section>
		<section class="feedback consultation">
			<div class="container">
				<div class="feedback-wrapper">
					<div class="feedback-info">
						<h2>
							Если у вас <span>остались вопросы</span> напишите нам и мы с радостью на них ответим
						</h2>
						<p>
							Обычно мы перезваниваем в течение 2х часов
						</p>
					</div>
					<div class="feedback-form">
					 	<?php echo do_shortcode( '[contact-form-7 id="913835f" title="Получить консультацию"]' ) ?>
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

