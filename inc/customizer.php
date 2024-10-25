<?php
function fandev_theme_customizer($wp_customize) {
    $wp_customize->add_section('layout_options', array(
        'title' => __('Layout Options', 'fandev-core'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('layout_setting', array(
        'default' => 'full-width',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('layout_setting_control', array(
        'label' => __('Choose Layout', 'fandev-core'),
        'section' => 'layout_options',
        'settings' => 'layout_setting',
        'type' => 'radio',
        'choices' => array(
            'full-width' => __('Full Width', 'fandev-core'),
            'boxed' => __('Boxed', 'fandev-core'),
        ),
    ));
    $wp_customize->add_setting('primary_color', array(
        'default' => '#3498db',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color_control', array(
        'label' => __('Primary Color', 'fandev-core'),
        'section' => 'colors',
        'settings' => 'primary_color',
    )));
    $wp_customize->add_section('typography_options', array(
        'title' => __('Typography Options', 'fandev-core'),
        'priority' => 40,
    ));
    $wp_customize->add_setting('body_font', array(
        'default' => 'Roboto',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('body_font_control', array(
        'label' => __('Body Font', 'fandev-core'),
        'section' => 'typography_options',
        'settings' => 'body_font',
        'type' => 'select',
        'choices' => array(
            'Roboto' => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
        ),
    ));
}
add_action('customize_register', 'fandev_theme_customizer');

function fandev_customizer_live_preview() {
    wp_enqueue_script('fandev-theme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery', 'customize-preview'), '', true);
}
add_action('customize_preview_init', 'fandev_customizer_live_preview');
?>
