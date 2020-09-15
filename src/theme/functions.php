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
	'mobile'    => 'Мобильное',
	'footer'    => 'Футтер'
));

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title'    => __('Настройки сайта'),
		'menu_title'    => __('Настройки сайта'),
		'menu_slug'     => 'theme-general-settings'
  ));
	
}

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}




add_theme_support( 'post-thumbnails' ); 

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
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/textAndIllustration/textAndIllustration.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'mainSlider' );
function mainSlider() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'main-slider',
			  'title'             => __('Большой слайдер'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/main-slider/main-slider.php',
			  'enqueue_script'     => get_template_directory_uri() . '/gblocks/main-slider/main-slider.js',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'stepblock' );
function stepblock() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'stepblock',
			  'title'             => __('Шаги'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/stepblock/stepblock.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}



add_action( 'acf/init', 'whatDoYouGet' );
function whatDoYouGet() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'whatDoYouGet',
			  'title'             => __('Что вы получите'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/whatdoyouget/whatDoYouGet.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}


add_action( 'acf/init', 'textAndGif' );
function textAndGif() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'textAndGif',
			  'title'             => __('Текст и гифка'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/textAndGif/textAndGif.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}



add_action( 'acf/init', 'gigantTextAndButton' );
function gigantTextAndButton() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'gigantTextAndButton',
			  'title'             => __('Большой текст и кнопка'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/gigantTextAndButton/gigantTextAndButton.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}


add_action( 'acf/init', 'analyzing' );
function analyzing() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'analyzing',
			  'title'             => __('Блок «Что анализируем»'),
			  'description'       => __('Можно использовать если нужно показать два заголовка и картинку'),			  
			  'render_template'   => '/gblocks/analyzing/analyzing.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}


add_action( 'acf/init', 'partner' );
function partner() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'partner',
			  'title'             => __('Блок «Чам доверяют»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/partner/partner.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'quote' );
function quote() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'quote',
			  'title'             => __('Блок «Цитата»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/quote/quote.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'bigform' );
function bigform() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'bigform',
			  'title'             => __('Блок «Большая форма»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/bigform/bigform.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}


add_action( 'acf/init', 'leadProject' );
function leadProject() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'leadProject',
			  'title'             => __('Блок «Лид текст для проектов»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/leadProject/leadProject.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'videoBlock' );
function videoBlock() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'videoBlock',
			  'title'             => __('Блок «Видео»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/videoBlock/videoBlock.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'headlineDescription' );
function headlineDescription() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'headlineDescription',
			  'title'             => __('Блок «Заголовок и описание»'),
			  'description'       => __('С большим текстом'),			  
			  'render_template'   => '/gblocks/headlineDescription/headlineDescription.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'headlineDescriptionImage' );
function headlineDescriptionImage() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'headlineDescriptionImage',
			  'title'             => __('Блок «Заголовок, описание и картинка»'),
			  'description'       => __('С большим текстом'),			  
			  'render_template'   => '/gblocks/headlineDescriptionImage/headlineDescriptionImage.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'leadService' );
function leadService() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'leadService',
			  'title'             => __('Блок «Лид блок для услуг»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/leadService/leadService.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'project' );
function project() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'project',
			  'title'             => __('Блок «Выбор кейсов»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/project/project.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}

add_action( 'acf/init', 'checkandlist' );
function checkandlist() {
 
	// Проверяем, что функция доступна.
	if( function_exists( 'acf_register_block_type' ) ) {

		 // Регистрируем блок рекомендаций.
		 acf_register_block_type(array(
			  'name'              => 'checkandlist',
			  'title'             => __('Блок «Список с галочкой»'),
			  'description'       => __(''),			  
			  'render_template'   => '/gblocks/checkandlist/checkandlist.php',
			  'category'          => 'common',
			  'mode' => 'Preview',
			  'icon'			=> 'admin-users',
			  'mode'			=> 'edit'
		 ));
	}
}