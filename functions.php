<?php
/**
 * Kanata Cafe Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kanata Cafe
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_KANATA_CAFE_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'kanata-cafe-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_KANATA_CAFE_VERSION, 'all' );
	
	// Add Fonts for Japanese Script - Google Fonts Early access
	wp_enqueue_style('kanata-googlefonts', 'https://fonts.googleapis.com/css?family=Noto+Sans' );
	wp_enqueue_style('kanata-googlefonts-japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


function kanata_child_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/waypoints/lib/jquery.waypoints.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'kanata_script', get_stylesheet_directory_uri() . '/js/kanata-script.js', array('jquery','waypoints'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'kanata_child_scripts' );


function kanata_gallery_scripts() {
		

    	wp_enqueue_style('kanata-slicktheme', get_template_directory_uri() . 'node_modules/slick-carousel/slick/slick-theme.css');

    	wp_enqueue_style('kanata-slick', get_template_directory_uri() . 'node_modules/slick-carousel/slick/slick.css');
    		
    	wp_enqueue_script('kanata-slickjs', get_template_directory_uri().'node_modules/slick-carousel/slick/slick.min.js', array('jquery'), '1', true);

    	wp_enqueue_script('kanata-slicksettings', get_template_directory_uri() . 'node_modules/slick-carousel/slick/slicksettings.js', array('kanata-slickjs'), '1', true);

}



/* ---------- Add Custom Image Sizes ----------------------- */

add_theme_support( 'post-thumbnails' );
add_image_size( 'front-cover', 1200, 9999 ); // Unlimited Height