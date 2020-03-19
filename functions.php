<?php 

function push_script() {
    
	wp_enqueue_style( 'main_style', get_template_directory_uri().'/assets/css/app.css', [], null, 'all' );
    wp_enqueue_script('main_script', get_template_directory_uri().'/assets/js/app.js', [], null, true);
    
}
add_action( 'wp_enqueue_scripts', 'push_script' );

