<?php

//* Add the code snippet below to your WordPress child theme's functions.php


add_action( 'send_headers', 'child_wphostingblog_strict_transport_security_header' );
/**
 * Enables the HTTP Strict Transport Security (HSTS) header.
 *
 * @since 1.0.0
 */
function child_wphostingblog_strict_transport_security_header() {

	header( 'Strict-Transport-Security: max-age=10886400; includeSubDomains; preload' );

}
