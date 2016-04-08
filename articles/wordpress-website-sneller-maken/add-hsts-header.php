<?php

// Add the code snippet below to your WordPress (child) theme's functions.php


add_action( 'send_headers', 'child_themename_strict_transport_security_header' );
/**
 * Enables the HTTP Strict Transport Security (HSTS) header.
 */
function child_themename_strict_transport_security_header() {
 
    header( 'Strict-Transport-Security: max-age=10886400; includeSubDomains; preload' );
 
}
