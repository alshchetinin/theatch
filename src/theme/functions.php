<?php
function wordpressify_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'wordpressify_resources' );

register_nav_menus(array(
	'top'    => 'Верхнее меню'
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Настройки сайта'),
		'menu_title'    => __('Настройки сайта'),
		'menu_slug'     => 'theme-general-settings'
  ));
	
}