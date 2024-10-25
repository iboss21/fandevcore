<?php
// GDPR compliance: Display cookie consent banner
function fandev_cookie_consent_banner() {
    echo '<div id="cookie-consent-banner">
            <p>We use cookies to improve your experience. By continuing to visit this site, you agree to our use of cookies. <a href="/privacy-policy">Learn more</a></p>
            <button id="accept-cookies">Accept</button>
          </div>';
    echo '<style>#cookie-consent-banner { position: fixed; bottom: 0; width: 100%; background: #333; color: #fff; text-align: center; padding: 10px; }</style>';
}
add_action('wp_footer', 'fandev_cookie_consent_banner');

// GDPR functionality (Enable privacy settings)
function fandev_enable_gdpr_settings() {
    if (isset($_POST['accept_cookies'])) {
        setcookie('gdpr_consent', true, time() + (86400 * 30), "/");
    }
}
add_action('init', 'fandev_enable_gdpr_settings');
?>
