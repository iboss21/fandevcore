<?php
get_header(); // Include header

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    echo '<p>No content found</p>';
endif;

get_footer(); // Include footer
?>
