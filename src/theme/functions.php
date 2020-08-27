<?php
function wordpressify_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'wordpressify_resources' );

register_nav_menus(array(
	'whatwedo'    => 'Что мы делаем',
	'about'    => 'О нас',
	'music'    => 'Музыка',
	'contact'    => 'Контакты',
	'expert'    => 'Эксперты',
	'mobile'    => 'Мобильное'
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Настройки сайта'),
		'menu_title'    => __('Настройки сайта'),
		'menu_slug'     => 'theme-general-settings'
  ));
	
}



add_action( 'enqueue_block_editor_assets', 'guttenberEditor' );
function guttenberEditor() {
	
	wp_enqueue_style( 'guttenberEditor', get_theme_file_uri( '/style-editor.css' ), false );
}

add_action( 'acf/init', 'textAndIllustration' );
//Регистрация блоков
function textAndIllustration() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'textAndIllustration',
			  'title'             => __('Текст и илюстрация'),
			  'description'       => __('Обычно выводится только в ипотеке. Содержит заголовок, текст, кнопку'),
			  'enqueue_style'     => get_template_directory_uri() . '/gblocks/textAndIllustration/textAndIllustration.css',
			  'render_template'   => '/gblocks/textAndIllustration/textAndIllustration.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'Edit'
		 ));
	}
}