<?php 

// Custom logo setup.

function custom_logo_setup() {
    $defaults = array(
    'height'      => 130,
    'width'       => 350,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
add_action( 'after_setup_theme', 'custom_logo_setup' );

// Suport post thumbnails.

add_theme_support('post-thumbnails');
$defaults = array(
    'default-color' => '',
    'default-image' => '',
    'default-repeat' => 'repeat',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-attachment' => 'scroll',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
);
add_theme_support('custom-background', $defaults);


register_nav_menus(array(
    'Navmenu' => __('Primary Menu', ''),
    '2ndmenu' => __('Secondery Menu', ''),
    '3rdmenu' => __('Social Menu', ''),
));

// Script and style push.

function push_script() {
    
	wp_enqueue_style( 'main_style', get_template_directory_uri().'/assets/css/app.css', [], null, 'all' );
    wp_enqueue_script('main_script', get_template_directory_uri().'/assets/js/app.js', [], null, true);
    
}
add_action( 'wp_enqueue_scripts', 'push_script' );

// Register widget

