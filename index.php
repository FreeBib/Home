<?php

ensureSecureConnection();

$view = filter_input(INPUT_GET, 'View', FILTER_SANITIZE_STRING);

require_once('Views/Components/Header.php');

switch ($view) {
    case 'CodeSample': {
        require_once('Views/CodeSample.php');
    } break;

    case 'CodeSamples': {
        require_once('Views/CodeSamples.php');
    } break;

    case 'Home': {
        require_once('Views/Home.php');
    } break;

    default: {
        require_once('Views/Home.php');
    } break;
}

require_once('Views/Components/Footer.php');
