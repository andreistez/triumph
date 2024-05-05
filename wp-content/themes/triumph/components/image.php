<?php

/**
 * Image component layout.
 *
 * @var array $args ['data']
 *
 * @package    WordPress
 * @subpackage triumph
 */

if( ! $data = $args['data'] ?? null ) return;

$loading    = ( isset( $data['lazy'] ) && $data['lazy'] ) ? "loading='lazy'" : '';
$has_mobile = isset( $data['mobile'] ) && $data['mobile'];

if( ! $has_mobile ){
	?>
	<img
		class="c-image<?php echo $data['class'] ?>" src="<?php echo $data['url'] ?>"
		<?php echo $data['url_2x'] ? 'srcset="' . $data['url'] . ' 1x, ' . $data['url_2x'] . ' 2x"' : '' ?>
		width="<?php echo $data['width'] ?>" height="<?php echo $data['height'] ?>" alt="<?php echo $data['alt'] ?>"
		<?php echo $loading ?>
		decoding="async"
	/>
	<?php
}
else{
	?>
	<picture>
		<source
			media="(max-width:768px)"
			srcset="<?php echo $data['mobile']['url'] . ' 1x, ' . $data['mobile']['url_2x'] . ' 2x' ?>"
		>
		<img
			class="c-image" src="<?php echo $data['url'] ?>" width="<?php echo $data['width'] ?>"
			height="<?php echo $data['height'] ?>" alt="<?php echo $data['alt'] ?>"
		/>
	</picture>
	<?php
}

