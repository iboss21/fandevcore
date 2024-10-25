<?php
// Convert images to WebP format and compress them for faster loading
function fandev_compress_images($image_path) {
    $info = getimagesize($image_path);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($image_path);
        imagewebp($image, str_replace('.jpg', '.webp', $image_path), 80);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($image_path);
        imagewebp($image, str_replace('.png', '.webp', $image_path), 80);
    }
}
add_action('wp_handle_upload', 'fandev_compress_images', 10, 1);
?>
