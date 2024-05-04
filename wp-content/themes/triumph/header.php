<?php

/**
 * Header default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

global $page, $paged;
$site_description = get_bloginfo( 'description', 'display' );
$logo             = carbon_get_theme_option( 'logo' );
?>

<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta content="" name="description"/>
	<meta content="" name="keywords"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta content="telephone=no" name="format-detection"/>
	<meta name="HandheldFriendly" content="true"/>

	<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		if( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";

		if( $paged > 1 || $page > 1 ) echo ' | ' . sprintf( __( 'Страница %s', 'triumph' ), max( $paged, $page ) );
		?>
	</title>

	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- /FAVICON -->

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<div class="wrapper">
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="header-left">
					<button class="burger-button">
						<span></span>
					</button>
					<a href="/" class="header-logo">
						<img src="<?php echo THEME_URI ?>/static/img/logo.svg" alt="">
					</a>
				</div>
				<div class="addresses desktop">
					<address>
						<p>г. Москва, ш. Энтузиастов, 33</p>
					</address>
					<div class="addresses-more">
						<button class="show-maps">
							<span></span>
						</button>
						<p>ещё 2 филиала</p>
						<div class="hidden-addresses">
							<div class="hidden-addresses-item">
								<address>г. Москва, ш. Энтузиастов, 33</address>
								<a href="#" target="_blank">
									Смотреть на карте
								</a>
							</div>
							<div class="hidden-addresses-item">
								<address>г. Москва, Покровка, 10с5</address>
								<a href="#" target="_blank">
									Смотреть на карте
								</a>
							</div>
							<div class="hidden-addresses-item">
								<address>г. Москва, Измайловский проспект, 53</address>
								<a href="#" target="_blank">
									Смотреть на карте
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header-worktime desktop">
					<p>
						Ежедневно <br>
						с 10:00 до 21:00
					</p>
				</div>		
				<button class="button sm desktop">
					Получить консультацию
				</button>
				<div class="header-links">
					<a href="#">
						<img src="<?php echo THEME_URI ?>/static/img/whatsapp.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo THEME_URI ?>/static/img/telegram.svg" alt="">
					</a>
					<div class="phone">
						<a href="tel:+79161326468">+7 (916) 132-64-68</a>
					</div>
				</div>
				<div class="burger-menu">
					<button class="close red"></button>
					<?php
					wp_nav_menu( [
						'theme_location'  => 'header_menu',
						'container'       => 'nav',
						'container_class' => 'header-nav'
					] );
					?>
					<div class="burger-menu-bottom">
						<div class="burger-menu-box">
							<div class="addresses mobile">
								<address>
									<p>г. Москва, <br> ш. Энтузиастов, 33</p>
								</address>
								<div class="addresses-more">
									<button class="show-maps">
										<span></span>
									</button>
									<p>ещё 2 филиала</p>
									<div class="hidden-addresses">
										<div class="hidden-addresses-item">
											<address>г. Москва, ш. Энтузиастов, 33</address>
											<a href="#" target="_blank">
												Смотреть на карте
											</a>
										</div>
										<div class="hidden-addresses-item">
											<address>г. Москва, Покровка, 10с5</address>
											<a href="#" target="_blank">
												Смотреть на карте
											</a>
										</div>
										<div class="hidden-addresses-item">
											<address>г. Москва, Измайловский проспект, 53</address>
											<a href="#" target="_blank">
												Смотреть на карте
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="header-worktime mobile">
								<p>
									Ежедневно <br>
									с 10:00 до 21:00
								</p>
							</div>
						</div>
						<div class="header-links mobile">
							<a href="#">
								<img src="<?php echo THEME_URI ?>/static/img/whatsapp.svg" alt="">
							</a>
							<a href="#">
								<img src="<?php echo THEME_URI ?>/static/img/telegram.svg" alt="">
							</a>
							<div class="phone mobile">
								<a href="tel:+79161326468">+7 (916) 132-64-68</a>
							</div>
						</div>		
						<button class="button sm mobile">
							Получить консультацию
						</button>
					</div>
					
				</div>
			</div>
		</div>
	</header>