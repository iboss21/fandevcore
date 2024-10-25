<?php

// Theme Setup
function fandev_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
    ));

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'fandev-core' )
    ));
}
add_action( 'after_setup_theme', 'fandev_theme_setup' );

// Enqueue Scripts and Styles
function fandev_enqueue_assets() {
    wp_enqueue_style( 'fandev-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fandev-custom', get_template_directory_uri() . '/assets/css/custom.css', [], wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'fandev-script', get_template_directory_uri() . '/assets/js/custom.js', [], wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'fandev_enqueue_assets' );

// Custom Widgets, Security, and WooCommerce Features to follow in /inc
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/security.php';
require get_template_directory() . '/inc/woocommerce.php';
?>
