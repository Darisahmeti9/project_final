<?php
/**
 * Real Madrid WordPress Theme Functions
 */

require get_template_directory() . '/inc/customizer.php';

/**
 * Load styles and scripts
 */
function realmadrid_load_scripts(){
    // Main stylesheet (cache bust with filemtime)
    wp_enqueue_style(
        'realmadrid-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_template_directory() . '/style.css' ),
        'all'
    );

    // Dropdown menu script
    wp_enqueue_script(
        'realmadrid-dropdown',
        get_template_directory_uri() . '/js/dropdown.js',
        array(),
        '1.0',
        true
    );

    // Slider script
    wp_enqueue_script(
        'realmadrid-slider',
        get_template_directory_uri() . '/js/slider.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'realmadrid_load_scripts' );

/**
 * Theme setup
 */
function realmadrid_config(){
    // Menus
    register_nav_menus(
        array(
            'realmadrid_main_menu'   => __( 'Main Menu', 'realmadrid' ),
            'realmadrid_footer_menu' => __( 'Footer Menu', 'realmadrid' ),
        )
    );

    // Custom header (hero image / stadium)
    add_theme_support( 'custom-header', array(
        'height' => 300,
        'width'  => 1920,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Logo (Real crest)
    add_theme_support( 'custom-logo', array(
        'width'       => 220,
        'height'      => 120,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Other WP features
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action( 'after_setup_theme', 'realmadrid_config', 0 );

/**
 * Sidebars / Widget areas
 */
function realmadrid_sidebars(){
    register_sidebar(array(
        'name'          => __( 'Blog Sidebar', 'realmadrid' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Sidebar for news & articles.', 'realmadrid' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    // Services → can be used for “Squad”, “Fixtures”, “Trophies”
    register_sidebar(array(
        'name'          => __( 'Squad Area', 'realmadrid' ),
        'id'            => 'services-1',
        'description'   => __( 'Showcase players or squad highlights.', 'realmadrid' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __( 'Fixtures Area', 'realmadrid' ),
        'id'            => 'services-2',
        'description'   => __( 'Upcoming matches & fixtures.', 'realmadrid' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __( 'Trophies Area', 'realmadrid' ),
        'id'            => 'services-3',
        'description'   => __( 'Show Real Madrid’s trophies or history.', 'realmadrid' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'realmadrid_sidebars' );

/**
 * Fallback for wp_body_open
 */
if ( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
