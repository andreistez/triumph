<?php

/**
 * Header addresses component layout.
 *
 * @var array $args ['data']
 *
 * @package    WordPress
 * @subpackage triumph
 */

$address_main         = carbon_get_theme_option( 'address_main' );
$additional_addresses = carbon_get_theme_option( 'additional_addresses' );

if( ! $address_main && ! $additional_addresses ) return;

if( $address_main ) echo '<address><p>', $address_main, '</p></address>';

if( ! empty( $additional_addresses ) ){
	?>
	<div class="addresses-more">
		<button class="show-maps">
			<span></span>
		</button>
		<p>
			<?php
			printf(
				__( 'ещё %d филиала', 'triumph' ),
				count( $additional_addresses )
			);
			?>
		</p>
		<div class="hidden-addresses">
			<?php
			if( $address_main ){
				?>
				<div class="hidden-addresses-item">
					<address><?php echo $address_main ?></address>
					<a href="#" target="_blank"> <?php _e( 'Смотреть на карте', 'triumph' ) ?> </a>
				</div>
				<?php
			}

			foreach( $additional_addresses as $address ){
				if( ! $addr = $address['address'] ?? '' ) continue;
				?>
				<div class="hidden-addresses-item">
					<address><?php echo $addr ?></address>
					<a href="#" target="_blank"> <?php _e( 'Смотреть на карте', 'triumph' ) ?> </a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<?php
}

