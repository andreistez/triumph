<?php

/**
 * Header default template.
 *
 * @package    WordPress
 * @subpackage triumph
 */

global $page, $paged;
$site_description = get_bloginfo( 'description', 'display' );
$logo             = carbon_get_theme_option( 'logo' ) ?? null;
$working_time     = carbon_get_theme_option( 'working_time' ) ?? '';
$phone            = carbon_get_theme_option( 'phone' ) ?? '';
$phone_cleaned    = crit_clean_phone( $phone );
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

					<?php
					if( $logo ){
						echo '<a href="' . get_bloginfo( 'url' ) . '" class="header-logo">';
						get_template_part( 'components/image', null, [
							'data' => crit_prepare_image_data( $logo, 'logo' )
						] );
						echo '</a>';
					}
					?>
				</div>

				<div class="addresses desktop"><?php get_template_part( 'components/addresses' ) ?></div>

				<?php
				if( $working_time ) echo '<div class="header-worktime desktop"><p>', $working_time, '</p></div>';
				?>

				<button class="button sm desktop">
					<?php _e( 'Получить консультацию', 'triumph' ) ?>
				</button>

				<div class="header-links">
					<?php
					get_template_part( 'components/links' );

					if( $phone ){
						?>
						<div class="phone">
							<a href="tel:<?php echo esc_attr( $phone_cleaned ) ?>">
								<?php echo esc_html( $phone ) ?>
							</a>
						</div>
						<?php
					}
					?>
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
								<?php get_template_part( 'components/addresses' ) ?>
							</div>

							<?php
							if( $working_time ) echo '<div class="header-worktime mobile"><p>', $working_time, '</p></div>';
							?>
						</div>

						<div class="header-links mobile">
							<?php
							get_template_part( 'components/links' );

							if( $phone ){
								?>
								<div class="phone mobile">
									<a href="<?php echo esc_attr( $phone_cleaned ) ?>">
										<?php echo esc_html( $phone ) ?>
									</a>
								</div>
								<?php
							}
							?>
						</div>

						<button class="button sm mobile">
							<?php _e( 'Получить консультацию', 'triumph' ) ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>