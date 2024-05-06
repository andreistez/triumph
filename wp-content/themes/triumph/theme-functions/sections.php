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

			// About section.
			->add_fields( 'about', __( 'О нас' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'items', __( 'Элементы' ) )
					->set_width( 50 )
					->add_fields( [
						Field::make( 'image', 'image', __( 'Изображение' ) )
							->set_width( 50 ),
						Field::make( 'text', 'desc', __( 'Описание' ) )
							->set_width( 50 )
					] )
			] )

			// Gallery section.
			->add_fields( 'gallery', __( 'Галерея' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'select', 'video_type', __( 'Тип видео' ) )
					->add_options( ['yt' => 'YouTube', 'local' => 'Локальное'] )
					->set_width( 50 ),
				Field::make( 'file', 'video_local', __( 'Видео' ) )
					->set_width( 50 )
					->set_type( ['video'] )
					->set_conditional_logic( [['field' => 'video_type', 'value' => 'local']] ),
				Field::make( 'text', 'video_yt', __( 'YouTube URL' ) )
					->set_width( 50 )
					->set_conditional_logic( [['field' => 'video_type', 'value' => 'yt']] ),
				Field::make( 'image', 'poster', __( 'Обложка видео' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'gallery', __( 'Галерея' ) )
					->add_fields( [
						Field::make( 'image', 'image', __( 'Изображение' ) )
							->set_width( 50 ),
						Field::make( 'text', 'desc', __( 'Описание' ) )
							->set_width( 50 )
					] )
			] )

			// Format section.
			->add_fields( 'format', __( 'Формат' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'text', 'button_label', __( 'Текст кнопки' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'items', __( 'Элементы' ) )
					->add_fields( [
						Field::make( 'image', 'image', __( 'Изображение' ) )
							->set_width( 25 ),
						Field::make( 'text', 'title', __( 'Заголовок' ) )
							->set_width( 25 ),
						Field::make( 'text', 'desc', __( 'Описание' ) )
							->set_width( 25 ),
						Field::make( 'color', 'bg_color', __( 'Цвет фона' ) )
							->set_alpha_enabled()
							->set_width( 25 )
					] )
			] )
	] );

