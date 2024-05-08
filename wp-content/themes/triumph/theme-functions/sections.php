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
					->set_width( 34 )
					->set_type( ['video'] )
					->set_conditional_logic( [['field' => 'video_type', 'value' => 'local']] ),
				Field::make( 'text', 'video_yt', __( 'YouTube URL' ) )
					->set_width( 34 )
					->set_conditional_logic( [['field' => 'video_type', 'value' => 'yt']] ),
				Field::make( 'image', 'poster', __( 'Обложка видео' ) )
					->set_width( 33 ),
				Field::make( 'text', 'video_desc', __( 'Описание' ) )
					->set_width( 33 ),
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
							->set_width( 25 )
					] )
			] )

			// Steps section.
			->add_fields( 'steps', __( 'Шаги' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'steps', __( 'Шаги' ) )
					->add_fields( [
						Field::make( 'select', 'arrow_type', __( 'Тип стрелки' ) )
							->add_options( ['none' => 'Нет', 'p' => 'Фиолетовая', 'a' => 'Зелёная', 'r' => 'Розовая'] )
							->set_width( 25 ),
						Field::make( 'text', 'title', __( 'Заголовок' ) )
							->set_width( 25 ),
						Field::make( 'textarea', 'desc', __( 'Описание' ) )
							->set_rows( 4 )
							->set_width( 25 ),
						Field::make( 'color', 'bg_color', __( 'Цвет фона' ) )
							->set_width( 25 )
					] ),
				Field::make( 'complex', 'videos', __( 'Видео' ) )
					->add_fields( [
						Field::make( 'image', 'poster', __( 'Обложка видео' ) )
							->set_width( 34 ),
						Field::make( 'text', 'video_yt', __( 'YouTube URL' ) )
							->set_width( 33 ),
						Field::make( 'text', 'video_desc', __( 'Описание' ) )
							->set_width( 33 )
					] )
			] )

			// Club section.
			->add_fields( 'club', __( 'Клуб' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'rich_text', 'text', __( 'Текст' ) )
					->set_width( 50 ),
				Field::make( 'image', 'poster', __( 'Обложка видео' ) )
					->set_width( 34 ),
				Field::make( 'text', 'video_yt', __( 'YouTube URL' ) )
					->set_width( 33 ),
				Field::make( 'text', 'video_desc', __( 'Описание' ) )
					->set_width( 33 )
			] )

			// Awards section.
			->add_fields( 'awards', __( 'Награды' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) ),
				Field::make( 'complex', 'photos', __( 'Фотографии' ) )
					->add_fields( [
						Field::make( 'image', 'image', __( 'Изображение' ) )
							->set_width( 50 ),
						Field::make( 'text', 'desc', __( 'Описание' ) )
							->set_width( 50 )
					] )
			] )

			// Feedback section.
			->add_fields( 'feedback', __( 'Обратная связь' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними, &lt;br&gt; для переноса строки.' ) )
					->set_width( 34 ),
				Field::make( 'textarea', 'desc', __( 'Описание' ) )
					->set_rows( 4 )
					->set_width( 33 ),
				Field::make( 'text', 'form', __( 'Contact Form 7 шорткод' ) )
					->set_width( 33 )
			] )

			// Persons section.
			->add_fields( 'persons', __( 'Преподаватели' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) ),
				Field::make( 'complex', 'team', __( 'Преподаватели' ) )
					->add_fields( [
						Field::make( 'image', 'image', __( 'Фото' ) )
							->set_width( 34 ),
						Field::make( 'text', 'name', __( 'Имя' ) )
							->set_width( 33 ),
						Field::make( 'text', 'position', __( 'Должность' ) )
							->set_width( 33 )
					] )
			] )

			// Payments section.
			->add_fields( 'payments', __( 'Оплата' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) )
					->set_width( 50 ),
				Field::make( 'text', 'button_label', __( 'Текст кнопки' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'items', __( 'Элементы' ) )
					->add_fields( [
						Field::make( 'image', 'icon', __( 'Иконка' ) )
							->set_width( 25 ),
						Field::make( 'text', 'title', __( 'Заголовок' ) )
							->set_width( 25 ),
						Field::make( 'textarea', 'desc', __( 'Описание' ) )
							->set_rows( 4 )
							->set_width( 25 ),
						Field::make( 'text', 'price', __( 'Цена' ) )
							->set_width( 25 ),
						Field::make( 'color', 'bg_color', 'Цвет фона' )
							->set_width( 50 ),
						Field::make( 'color', 'title_color', 'Цвет заголовка' )
							->set_width( 50 )
					] )
			] )

			// FAQ section.
			->add_fields( 'faq', __( 'Вопросы и ответы' ), [
				Field::make( 'text', 'title', __( 'Заголовок' ) )
					->set_help_text( __( 'Используйте [color] и [/color] для изменения цвета текста между ними.' ) ),
				Field::make( 'complex', 'items', __( 'Элементы' ) )
					->add_fields( [
						Field::make( 'text', 'question', __( 'Вопрос' ) )
							->set_width( 30 ),
						Field::make( 'rich_text', 'answer', __( 'Ответ' ) )
							->set_width( 70 )
					] )
			] )
	] );

