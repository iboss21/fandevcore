<?php
// Theme Setup
require get_template_directory() . '/inc/setup.php';

// Enqueue Scripts and Styles
require get_template_directory() . '/inc/enqueue.php';

// Customizer Options
require get_template_directory() . '/inc/customizer.php';

// Security Enhancements
require get_template_directory() . '/inc/security.php';

// WooCommerce Support
require get_template_directory() . '/inc/woocommerce/woocommerce-support.php';

// Widgets and Breadcrumbs
require get_template_directory() . '/inc/widgets/popular-posts.php';
require get_template_directory() . '/inc/templates/breadcrumb.php';

// Meta Tags Customization
require get_template_directory() . '/inc/meta-tags.php';

// JSON-LD Structured Data
require get_template_directory() . '/inc/json-ld.php';

// Performance and Image Optimization
require get_template_directory() . '/inc/gzip.php';
require get_template_directory() . '/inc/cdn.php';
require get_template_directory() . '/inc/image-optimization.php';

// GDPR Compliance
require get_template_directory() . '/inc/gdpr.php';

// Sitemap Generator
require get_template_directory() . '/inc/sitemap.php';
?>
