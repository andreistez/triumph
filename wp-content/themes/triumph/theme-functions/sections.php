<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Секции' ) )
	->where( 'post_type', '=', 'page' )
	->add_fields( [
		Field::make( 'complex', 'page_sections', __( 'Содержимое' ) )
			->set_layout( 'tabbed-horizontal' )

			// Hero section.
			->add_fields( 'hero', __( 'Главная секция' ), [
				Field::make( 'image', 'bg_image', __( 'Фоновое изображение' ) )
					->set_width( 25 ),
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_width( 25 ),
				Field::make( 'rich_text', 'desc', __( 'Описание' ) )
					->set_width( 25 ),
				Field::make( 'text', 'text', __( 'Текст' ) )
					->set_width( 25 )
			] )
	] );

