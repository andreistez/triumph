<?php

/**
 * Links component layout.
 *
 * @var array $args ['data']
 *
 * @package    WordPress
 * @subpackage triumph
 */

$links = carbon_get_theme_option( 'links' );

if( empty( $links ) ) return;

foreach( $links as $link ){
	$icon = $link['icon'] ?? null;
	$url  = $link['url'] ?? null;

	if( ! $icon || ! $url ) continue;
	?>
	<a href="<?php echo esc_url( $url ) ?>" target="_blank">
		<?php
		get_template_part( 'components/image', null, [
			'data' => crit_prepare_image_data( $icon, 'header-icon' )
		] );
		?>
	</a>
	<?php
}

