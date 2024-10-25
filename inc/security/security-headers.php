<?php
// Add security headers for HSTS, CSP, etc.
function fandev_security_headers() {
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
    header("Content-Security-Policy: default-src 'self'; script-src 'self' https://trusted-scripts.com;");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-XSS-Protection: 1; mode=block");
    header("X-Content-Type-Options: nosniff");
}
add_action('send_headers', 'fandev_security_headers');
?>
