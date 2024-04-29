<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options(): void
{
	Container::make( 'theme_options', __( 'Настройки темы' ) )
		->add_tab( __( 'Хедер' ), [
			Field::make( 'image', 'logo', 'Логотип' ),
		] );
}

