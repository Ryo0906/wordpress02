<?php
function theme_setup()  {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_styles() {
	wp_enqueue_style( 'theme-font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array(), '1.0.0' );
	wp_enqueue_style( 'theme-reset', get_template_directory_uri().'/css/normalize.css', array( 'theme-font' ), '1.0.0' );
	wp_enqueue_style( 'theme-style', get_template_directory_uri().'/css/style.css', array( 'theme-reset' ), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_scripts() {
	wp_deregister_script( 'jQuery' );
	wp_deregister_script( 'jQuery-migrate' );

	wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri().'/css/script.js', array( 'jQuery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );