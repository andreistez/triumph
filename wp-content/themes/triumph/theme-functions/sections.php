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
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'text', 'button_label', __( 'Текст кнопки' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'items', __( 'Элементы' ) )
					->set_width( 50 )
					->add_fields( [
						Field::make( 'image', 'icon', __( 'Иконка' ) )
							->set_width( 50 ),
						Field::make( 'text', 'desc', __( 'Описание' ) )
							->set_width( 50 )
					] ),
				Field::make( 'file', 'video', __( 'Видео' ) )
					->set_width( 50 )
					->set_type( ['video'] )
			] )
	] );

