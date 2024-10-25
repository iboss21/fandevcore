<?php
function fandev_breadcrumb() {
    if (!is_home()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . home_url() . '">Home</a>';
        if (is_category() || is_single()) {
            echo ' &raquo; ';
            the_category(' &bull; ');
            if (is_single()) {
                echo ' &raquo; ';
                the_title();
            }
        } elseif (is_page()) {
            echo ' &raquo; ';
            echo the_title();
        }
        echo '</nav>';
    }
}
?>
