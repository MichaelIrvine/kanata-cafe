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


function kanata_child_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/js/waypoints/lib/jquery.waypoints.min.js', array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'kanata_script', get_stylesheet_directory_uri() . '/js/kanata-script.js', array('jquery','waypoints'), '1.1', false );

}

add_action( 'wp_enqueue_scripts', 'kanata_child_scripts' );
/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'kanata-cafe-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_KANATA_CAFE_VERSION, 'all' );
	
    // Add Fonts for Japanese Script - Google Fonts Early access
        wp_enqueue_style('kanata-googlefonts-japanese', 'https://fonts.googleapis.com/earlyaccess/notosansjapanese.css' );
	wp_enqueue_style('kanata-googlefonts-noto', 'https://fonts.googleapis.com/css?family=Noto+Sans' );
	wp_enqueue_style('kanata-googlefonts-unna', 'https://fonts.googleapis.com/css?family=Unna' );

    

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );







function kanata_gallery_scripts() {
		
    	wp_enqueue_style('kanata-slicktheme', get_stylesheet_directory_uri() . '/slick/slick-theme.css');

    	wp_enqueue_style('kanata-slick', get_stylesheet_directory_uri() . '/slick/slick.css');
    		
    	wp_enqueue_script('kanata-slickjs', get_stylesheet_directory_uri().'/slick/slick.min.js', array('jquery'), '1', false);

    	wp_enqueue_script('kanata-slicksettings', get_stylesheet_directory_uri() . '/js/slicksettings.js', array('kanata-slickjs'), '1', false);
}

add_action( 'wp_enqueue_scripts', 'kanata_gallery_scripts' );

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// -------------------------------
// ------ Font Awesome -----------
// -------------------------------


function loadFontAwesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );

}

add_action( 'wp_enqueue_scripts', 'loadFontAwesome' );

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------





/* ---------- Add Custom Image Sizes ----------------------- */

add_theme_support( 'post-thumbnails' );
add_image_size( 'front-cover', 1200, 9999 ); // Unlimited Height



/* ---------- Add Google Maps API ----------------------- */

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAA_NlAaj4mE1x66SF_JqpH44Rd-MYModw');
}

add_action('acf/init', 'my_acf_init');


/* --------------------------- Register Menus ---------------------------- */


	register_nav_menus( array(
		'footer-navigation' => esc_html__( 'Footer Navigation', 'kanata cafe' ),
		'social' => esc_html__( 'Social Media Footer', 'kanata cafe' )
	) );

/* --------------------------- ACF Options Page ---------------------------- */

if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Contact Info',
		  'menu_title' => 'Contact Info',
		  'menu_slug'  => 'contact_info',
          'icon_url' => 'dashicons-schedule'
          //other args
      );
    acf_add_options_page($args);

}

if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Copyright Info',
		  'menu_title' => 'Copyright Info',
		  'menu_slug'  => 'copyright_info',
          'icon_url' => 'dashicons-edit'
          //other args
      );
    acf_add_options_page($args);

}

if( function_exists('acf_add_options_page') ) {
    $args = array(
          'page_title' => 'Partners',
		  'menu_title' => 'Partners',
		  'menu_slug'  => 'partners',
          'icon_url' => 'dashicons-smiley'
          //other args
      );
    acf_add_options_page($args);

}

// -------------------------------
// ------ SVG support ------------
// -------------------------------


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');