<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options(): void
{
	Container::make( 'theme_options', __( 'Настройки темы' ) )
		->add_tab( __( 'Хедер' ), [
			Field::make( 'image', 'logo', 'Логотип' )
				->set_width( 34 ),
			Field::make( 'text', 'address_main', 'Основной адрес' )
				->set_width( 33 ),
			Field::make( 'complex', 'additional_addresses', __( 'Дополнительные адреса' ) )
				->set_width( 33 )
				->add_fields( [
					Field::make( 'text', 'address', __( 'Адрес' ) )
				] ),
			Field::make( 'textarea', 'working_time', 'Время работы' )
				->set_help_text( __( 'Используйте &lt;br&gt; для переноса строки.' ) )
				->set_rows( 3 )
				->set_width( 50 ),
			Field::make( 'text', 'phone', 'Телефон' )
				->set_width( 50 ),
			Field::make( 'complex', 'links', __( 'Ссылки' ) )
				->add_fields( [
					Field::make( 'text', 'url', __( 'URL' ) )
						->set_width( 50 ),
					Field::make( 'image', 'icon', __( 'Иконка' ) )
						->set_width( 50 ),
				] ),
		] )

		->add_tab( __( 'Яндекс' ), [
			Field::make( 'text', 'yandex_maps_api_key', 'API ключ для карты Яндекс' )
		] );
}

