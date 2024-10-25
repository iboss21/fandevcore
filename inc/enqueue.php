<?php
function fandev_theme_enqueue_assets() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false);
    wp_enqueue_style('theme-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom.css', [], wp_get_theme()->get('Version'));
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/main.js', [], wp_get_theme()->get('Version'), true);
    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'fandev_theme_enqueue_assets');
?>
