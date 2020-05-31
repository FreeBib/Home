<?php

/**
 * Ensure the connection is secure.
 */
$https = filter_input(INPUT_SERVER, 'HTTPS', FILTER_SANITIZE_STRING);

if (!$https) {
    $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);

    header("Location: https://freebib.org$uri\n", true, 301);
    exit();
}

/**
 * Include Database Initialization
 */
require_once('Util/Database.php');

/**
 * Display the Homepage
 */
require_once('Views/Home.php');

