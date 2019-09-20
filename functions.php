<?php
	// Убираем ненужные пункты меню
//	function remove_menus() {
//		remove_menu_page( 'index.php' );                  //Консоль
//		remove_menu_page( 'edit.php' );                   //Записи
//		remove_menu_page( 'upload.php' );                 //Медиафайлы
//		remove_menu_page( 'edit.php?post_type=page' );    //Страницы
//		remove_menu_page( 'edit-comments.php' );          //Комментарии
//		remove_menu_page( 'themes.php' );                 //Внешний вид
//		remove_menu_page( 'plugins.php' );                //Плагины
//		remove_menu_page( 'users.php' );                  //Пользователи
//		remove_menu_page( 'tools.php' );                  //Инструменты
//		remove_menu_page( 'options-general.php' );        //Настройки
//	}

	// add_action( 'admin_menu', 'remove_menus' );

	// Региструрем меню
	// register_nav_menus(array(
	// 	'top'    => 'Основное меню',   //Название месторасположения меню в шаблоне
	// ));

	// Глобальные настройки
	if ( function_exists( 'acf_add_options_page' ) ) {
		// Глобальные настройки сайта
		acf_add_options_page( array(
			'page_title'  => 'Настройки сайта',
			'menu_title'  => 'Настройки сайта',
//			'parent_slug' => $parent['menu_slug'],
		) );
	}


		function bs_euconsult_setup() {
			// Add default posts and comments RSS feed links to head.
			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'title-tag' );

			add_theme_support( 'post-thumbnails' );

			// This theme uses wp_nav_menu() in one location.
			register_nav_menus( array(
				'menu-top' => 'Top menu',
			) );

			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

			// Set up the WordPress core custom background feature.
			add_theme_support( 'custom-background', apply_filters( 'bs_euconsult_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );

			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );

			/**
			 * Add support for core custom logo.
			 *
			 * @link https://codex.wordpress.org/Theme_Logo
			 */
			add_theme_support( 'custom-logo', array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			) );
		}
	add_action( 'after_setup_theme', 'bs_euconsult_setup' );

	function bs_euconsult_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Languages', 'bs-euconsult' ),
			'id'            => 'wpglobus',
			'description'   => esc_html__( 'Add widgets here.', 'bs-euconsult' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}
	add_action( 'widgets_init', 'bs_euconsult_widgets_init' );


	function clear_phone( $phone ) {
		return str_replace( [ '(', ')', '-', '+', ' ' ], '', $phone );
	}

	// Удаляем подробнее в записях
	// function new_excerpt_more( $more ) {
	//     return '';
	// }
	// add_filter('excerpt_more', 'new_excerpt_more');

	//Оnключаем сжатие картинок
	add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

	// Выключаем Админ Бар
	//add_filter('show_admin_bar', '__return_false');

	//Выводим переводы строк в polylang
//	add_action( 'init', function () {
//		pll_register_string( 'УСЛУГИ', 'УСЛУГИ' );
//		pll_register_string( 'Узнать больше', 'Узнать больше' );
//		pll_register_string( 'О КОМПАНИИ', 'О КОМПАНИИ' );
//		pll_register_string( 'НАШИ', 'НАШИ' );
//		pll_register_string( 'ФИЛИАЛЫ', 'ФИЛИАЛЫ' );
//		pll_register_string( 'ОБСЛУЖИВАНИЕ ВСЕЙ', 'ОБСЛУЖИВАНИЕ ВСЕЙ' );
//		pll_register_string( 'ТЕРРИТОРИИ МОЛДОВЫ', 'ТЕРРИТОРИИ МОЛДОВЫ' );
//		pll_register_string( 'ПАРТНЕРЫ', 'ПАРТНЕРЫ' );
//		pll_register_string( 'КОНТАКТЫ', 'КОНТАКТЫ' );
//		pll_register_string( 'Позвоните', 'Позвоните' );
//		pll_register_string( 'Напишите нам сообщение', 'Напишите нам сообщение' );
//		pll_register_string( 'Наш адрес', 'Наш адрес' );
//		pll_register_string( 'Телефон', 'Телефон' );
//		pll_register_string( 'Назад', 'Назад' );
//		pll_register_string( 'Наши услуги', 'Наши услуги' );
//	} );