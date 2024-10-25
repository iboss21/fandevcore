<?php
// Generate an XML sitemap for better SEO
function fandev_generate_sitemap() {
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    
    $posts = get_posts(array('numberposts' => -1, 'post_status' => 'publish'));
    foreach ($posts as $post) {
        $sitemap .= '<url>
                        <loc>' . get_permalink($post->ID) . '</loc>
                        <lastmod>' . get_the_modified_time('Y-m-d\TH:i:sP', $post->ID) . '</lastmod>
                     </url>';
    }
    
    $sitemap .= '</urlset>';
    file_put_contents(ABSPATH . 'sitemap.xml', $sitemap);
}
add_action('publish_post', 'fandev_generate_sitemap');
?>
