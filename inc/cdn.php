<?php
// Integrate CDN support for static assets (images, CSS, JS)
function fandev_cdn_url($url) {
    // Change the base URL to your CDN URL
    $cdn_url = 'https://cdn.yourwebsite.com';
    return str_replace(home_url(), $cdn_url, $url);
}
add_filter('wp_get_attachment_url', 'fandev_cdn_url');
add_filter('stylesheet_directory_uri', 'fandev_cdn_url');
add_filter('script_loader_src', 'fandev_cdn_url');
?>
