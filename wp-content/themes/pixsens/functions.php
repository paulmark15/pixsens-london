<?php

add_theme_support('menus');

$args = array(
	'flex-width'    => true,
	'width'         => 172,
	'flex-height'   => true,
	'height'        => 32,
	'default-image' => get_template_directory_uri() . '/img/logo.svg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

function register_theme_menus() {

	register_nav_menus(
		array(
				'primary-menu' => __('Primary Menu')
			)
	);
}
add_action('init', 'register_theme_menus');


function pix_theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'main_font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,700');

	wp_enqueue_style( 'second_font', 'https://fonts.googleapis.com/css?family=Quicksand:300');

}
add_action('wp_enqueue_scripts', 'pix_theme_styles');

function pix_theme_js() {

	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js' , array('jquery'), '', true );

}
add_action('wp_enqueue_scripts', 'pix_theme_js');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
