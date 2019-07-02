<?php

/*
Plugin Name: Surbma | SMTP
Plugin URI: https://surbma.com/wordpress-plugins/
Description: External SMTP mail configuration via constants in wp-config.php.
Network: True

Version: 2.2

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-smtp
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Configures WordPress PHPMailer with values from wp-config.php
function surbma_smtp_phpmailer( $phpmailer ) {
    if ( defined( 'SURBMA_SMTP_HOST' ) && defined( 'SURBMA_SMTP_USER' ) && defined( 'SURBMA_SMTP_PASSWORD' ) ) {
        $phpmailer->isSMTP();
        $phpmailer->Host = SURBMA_SMTP_HOST;
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = SURBMA_SMTP_USER;
        $phpmailer->Password = SURBMA_SMTP_PASSWORD;

        // Additional settings
        // $phpmailer->Port = 25;
        if ( defined( 'SURBMA_SMTP_PORT' ) ) $phpmailer->Port = SURBMA_SMTP_PORT;
        // Choose SSL or TLS, if necessary for your server
        if ( defined( 'SURBMA_SMTP_SECURE' ) ) $phpmailer->SMTPSecure = SURBMA_SMTP_SECURE;
        // Must be a valid email address
        if ( defined( 'SURBMA_SMTP_FROM' ) ) $phpmailer->From = SURBMA_SMTP_FROM;
        if ( defined( 'SURBMA_SMTP_FROMNAME' ) ) $phpmailer->FromName = SURBMA_SMTP_FROMNAME;
    }
}
add_action( 'phpmailer_init', 'surbma_smtp_phpmailer' );
