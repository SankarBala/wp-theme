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
    wp_enqueue_script('main_script', get_template_directory_uri().'/assets/js/app.js', [], null, false);
    
}
add_action( 'wp_enqueue_scripts', 'push_script' );

// Register widget


$bn = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০");





function sakalerpata_widgets_init() {
    
    register_sidebar( array(
    'name'          => esc_html__( 'Banner Widget Area', 'sakalerpata' ),
    'id'            => 'banner',
    'description'   => esc_html__( 'This widget will be shown in banner inside header section.', 'sakalerpata' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 1 - 1/3 Widget Area', 'sakalerpata' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 2 - 2/3 Widget Area', 'sakalerpata' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar 3 - 3/3 Widget Area', 'sakalerpata' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
        register_sidebar( array(
		'name'          => esc_html__( 'Footer 1 - 1/3 Widget Area', 'sakalerpata' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2 - 2/3 Widget Area', 'sakalerpata' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3 - 3/3 Widget Area', 'sakalerpata' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4 - 4/4 Widget Area', 'sakalerpata' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 5 - 5/5 Widget Area', 'sakalerpata' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Facebook widget', 'sakalerpata' ),
		'id'            => 'facebook-page',
		'description'   => esc_html__( 'Add facebook page code here.', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Breadcum widget', 'sakalerpata' ),
		'id'            => 'breadcum-nav',
		'description'   => esc_html__( 'Add bredcum here', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Category widget 1', 'sakalerpata' ),
		'id'            => 'category-1',
		'description'   => esc_html__( 'Category widget 1', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Category widget 2', 'sakalerpata' ),
		'id'            => 'category-2',
		'description'   => esc_html__( 'Category widget 2', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Category widget 3', 'sakalerpata' ),
		'id'            => 'category-3',
		'description'   => esc_html__( 'Category widget 3', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Category widget 4', 'sakalerpata' ),
		'id'            => 'category-4',
		'description'   => esc_html__( 'Category widget 4', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Category widget 5', 'sakalerpata' ),
		'id'            => 'category-5',
		'description'   => esc_html__( 'Category widget 5', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page start widget 5', 'sakalerpata' ),
		'id'            => 'page-start',
		'description'   => esc_html__( 'Page start widget 5', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Page end widget 5', 'sakalerpata' ),
		'id'            => 'page-end',
		'description'   => esc_html__( 'Page end widget 5', 'sakalerpata' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );



}
add_action( 'widgets_init', 'sakalerpata_widgets_init' );

// Post view counter;

function get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count";
}
function set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo get_post_view();
    }
}

add_filter( 'manage_posts_columns', 'posts_column_views' );
add_action( 'manage_posts_custom_column', 'posts_custom_column_views' );