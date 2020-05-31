<?php

/**
 * Ensure the received request came from a secure HTTPS connection. If it
 * didn't, return a permanent redirect notice.
 * 
 * @return void
 */
function ensureSecureConnection() : void {
    /**
     * Ensure the connection is secure.
     */
    $https = filter_input(INPUT_SERVER, 'HTTPS', FILTER_SANITIZE_STRING);

    if (!$https) {
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);

        header("Location: https://freebib.org$uri\n", true, 301);
        exit();
    }
}
