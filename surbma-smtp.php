<?php

/*
Plugin Name: Surbma | SMTP
Plugin URI: https://surbma.com/wordpress-plugins/
Description: External SMTP mail configuration via constants in wp-config.php.
Network: True

Version: 2.3

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-smtp
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Configures WordPress PHPMailer with values from wp-config.php
add_action( 'phpmailer_init', function( $phpmailer ) {
	if ( defined( 'SURBMA_SMTP_HOST' ) && defined( 'SURBMA_SMTP_USER' ) && defined( 'SURBMA_SMTP_PASSWORD' ) ) {
		$phpmailer->isSMTP();
		$phpmailer->Host = SURBMA_SMTP_HOST;
		$phpmailer->SMTPAuth = true;
		$phpmailer->Username = SURBMA_SMTP_USER;
		$phpmailer->Password = SURBMA_SMTP_PASSWORD;

		// Additional settings
		if ( defined( 'SURBMA_SMTP_PORT' ) ) {
			// Default $phpmailer->Port = 25;
			$phpmailer->Port = SURBMA_SMTP_PORT;
		}
		if ( defined( 'SURBMA_SMTP_SECURE' ) ) {
			// Choose SSL or TLS, if necessary for your server
			$phpmailer->SMTPSecure = SURBMA_SMTP_SECURE;
		}
		if ( defined( 'SURBMA_SMTP_FROM' ) ) {
			// Must be a valid email address
			$phpmailer->From = SURBMA_SMTP_FROM;
		}
		if ( defined( 'SURBMA_SMTP_FROMNAME' ) ) {
			$phpmailer->FromName = SURBMA_SMTP_FROMNAME;
		}
	}
} );
