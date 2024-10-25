<?php
// Basic security improvements for Fandev Theme Core
// Add security headers
function fandev_security_headers() {
    header( 'Content-Security-Policy: default-src https:' );
    header( 'Strict-Transport-Security: max-age=31536000' );
}
add_action( 'send_headers', 'fandev_security_headers' );
?>
