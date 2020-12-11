<?php

function theme_setup()
{
    add_submenu_page(
        'themes.php',
        'Theme settings',
        'Theme settings',
        'manage_options',
        'theme-setup',
        'theme_setup_page',
        1
    );
}

add_action('admin_menu', 'theme_setup');

function theme_setup_page()
{
    include "theme_setup/theme-setup.php";
}


// Custom logo setup.

function custom_logo_setup()
{
    $defaults = array(
        'height' => 130,
        'width' => 350,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'custom_logo_setup');


// Custom header setup.

function custom_header_setup()
{
    $args = array(
        'default-image' => get_template_directory_uri() . '/src/images/header.jpg',
        'default-text-color' => '000',
        'width' => 992,
        'height' => 130,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => 'header text',
        'random-default' => true,
        'uploads' => true
    );
    add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'custom_header_setup');


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

function push_script()
{

    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/app.css', [], null, 'all');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/app.js', [], null, false);

}

add_action('wp_enqueue_scripts', 'push_script');

// Register widget


$bn = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০");


function promax_widgets_init()
{

//    register_sidebar( array(
//    'name'          => esc_html__( 'Banner Widget Area', 'promax' ),
//    'id'            => 'banner',
//    'description'   => esc_html__( 'This widget will be shown in banner inside header section.', 'promax' ),
//    'before_widget' => '',
//    'after_widget'  => '',
//    'before_title'  => '',
//    'after_title'   => '',
//    ) );

    register_sidebar(array(
        'name' => esc_html__('Topbar Widget Area', 'promax'),
        'id' => 'topbar',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar 1 - 1/3 Widget Area', 'promax'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar 2 - 2/3 Widget Area', 'promax'),
        'id' => 'sidebar-2',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<p class="archive_title">',
        'after_title' => '</p>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Sidebar 3 - 3/3 Widget Area', 'promax'),
        'id' => 'sidebar-3',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 1 - 1/3 Widget Area', 'promax'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2 - 2/3 Widget Area', 'promax'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3 - 3/3 Widget Area', 'promax'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 4 - 4/4 Widget Area', 'promax'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 5 - 5/5 Widget Area', 'promax'),
        'id' => 'footer-5',
        'description' => esc_html__('Add widgets here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Facebook widget', 'promax'),
        'id' => 'facebook-page',
        'description' => esc_html__('Add facebook page code here.', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<p class="archive_title">',
        'after_title' => '</p>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Breadcum widget', 'promax'),
        'id' => 'breadcum-nav',
        'description' => esc_html__('Add bredcum here', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => esc_html__('Category widget 1', 'promax'),
        'id' => 'category-1',
        'description' => esc_html__('Category widget 1', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Category widget 2', 'promax'),
        'id' => 'category-2',
        'description' => esc_html__('Category widget 2', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Category widget 3', 'promax'),
        'id' => 'category-3',
        'description' => esc_html__('Category widget 3', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Category widget 4', 'promax'),
        'id' => 'category-4',
        'description' => esc_html__('Category widget 4', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Category widget 5', 'promax'),
        'id' => 'category-5',
        'description' => esc_html__('Category widget 5', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Page start widget 5', 'promax'),
        'id' => 'page-start',
        'description' => esc_html__('Page start widget 5', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar(array(
        'name' => esc_html__('Page end widget 5', 'promax'),
        'id' => 'page-end',
        'description' => esc_html__('Page end widget 5', 'promax'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));


}

add_action('widgets_init', 'promax_widgets_init');

function activate_theme()
{

    // Social Link
    add_option('fb_link', 'https://facebook.com/itparlour/');
    add_option('tw_link', 'https://twitter.com/itparlour/');
    add_option('ig_link', 'https://instagram.com/itparlour/');
    add_option('yt_link', 'https://www.youtube.com/channel/UCGuyXPC_QKNCMxXYwLvvwBA/');

// Meta string
    add_option('latest_string', 'Latest');
    add_option('popular_string', 'Popular');
    add_option('read_more', 'Read more');
    add_option('more_news', 'More news');
    add_option('search_string', 'Search');
    add_option('not_found', 'Not found');
    add_option('may_be_like', 'You may like this');
    add_option('headline_string', 'Headlines');
    add_option('serial_string', '[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]');

// Layout settings
    for ($i = 1; $i < 16; $i++) {
        add_option("section_$i", 0);
    }
}

add_action("after_switch_theme", "activate_theme");

// Control theme setting form data.

function theme_setting()
{
    foreach ($_POST as $key => $value) {
        if ($key !== "action") {
            if ($key !== "submit") {
                update_option($key, $value);
            }
        }
    }
    wp_safe_redirect($_SERVER['HTTP_REFERER']);
    exit;
}

add_action('admin_post_theme-setup', 'theme_setting');

// Post view counter;
function get_post_view()
{
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    return "$count";
}

function set_post_view()
{
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int)get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}

function posts_column_views($columns)
{
    $columns['post_views'] = 'Views';
    return $columns;
}

function posts_custom_column_views($column)
{
    if ($column === 'post_views') {
        echo get_post_view();
    }
}

add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views');