<?php
/**
 * Hanan Events Theme Functions and Definitions
 */

// Set up theme defaults and registers support for various WordPress features
function hanan_events_setup() {
    // Make theme available for translation
    load_theme_textdomain('hanan-events', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Enable support for title tag
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register a single navigation menu location
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hanan-events'),
    ));

    // Enable support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enable support for Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'hanan_events_setup');

// Enqueue scripts and styles
function hanan_events_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('hanan-events-style', get_stylesheet_uri());

    // Enqueue custom script file
    wp_enqueue_script('hanan-events-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hanan_events_scripts');

// Register widget area
function hanan_events_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'hanan-events'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'hanan-events'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'hanan_events_widgets_init');

// Include the Customizer settings
require get_template_directory() . '/customizer.php';

?>
