<?php

/**
 * Theme custom functions.
 * Please place all your custom functions declarations inside this file.
 *
 * @package    WordPress
 * @subpackage critick
 */

/**
 * Clean incoming value from trash.
 *
 * @param mixed $value Some value to clean.
 * @return    string
 */
function crit_clean( $value ): string
{
	$value = wp_unslash( $value );
	$value = trim( $value );
	$value = stripslashes( $value );
	$value = strip_tags( $value );

	return htmlspecialchars( $value );
}

/**
 * Output formatted data for debugging & testing.
 *
 * @param $data
 * @return void
 */
function crit_prettify_data( $data ): void
{
	echo '<pre>', print_r( $data, 1 ), '</pre>';
}

/**
 * Prepare data for the image component.
 *
 * @param        $image_id
 * @param string $size
 * @param array  $atts bool $is_lazy, string $class
 * @return array
 */
function crit_prepare_image_data( $image_id, string $size = 'full', array $atts = [] ): array
{
	if( ! $image_id ) return [];

	return [
		'id'     => esc_attr( $image_id ),
		'size'   => esc_attr( $size ),
		'url'    => wp_get_attachment_image_url( $image_id, $size ),
		'url_2x' => wp_get_attachment_image_url( $image_id, "$size@2x" ),
		'width'  => wp_get_attachment_image_src( $image_id, $size ) ? wp_get_attachment_image_src( $image_id, $size )[1] : null,
		'height' => wp_get_attachment_image_src( $image_id, $size ) ? wp_get_attachment_image_src( $image_id, $size )[2] : null,
		'alt'    => get_post_meta( $image_id, '_wp_attachment_image_alt', true ),
		'lazy'   => isset( $atts['is_lazy'] ) && $atts['is_lazy'],
		'class'  => ( isset( $atts['class'] ) && $atts['class'] ) ? esc_attr( " {$atts['class']}" ) : '',
		'mobile' => ( isset( $atts['mobile'] ) && $atts['mobile'] ) ? [
			'url'    => wp_get_attachment_image_url( $atts['mobile'], $atts['mobile_size'] ),
			'url_2x' => wp_get_attachment_image_url( $atts['mobile'], "{$atts['mobile_size']}@2x" )
		] : null,
	];
}

