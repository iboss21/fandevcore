<?php
// WooCommerce support
function fandev_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'fandev_add_woocommerce_support' );

// Custom WooCommerce functionality
// Add custom product layouts, AJAX cart, etc.
?>
