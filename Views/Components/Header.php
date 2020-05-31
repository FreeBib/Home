<?php

/**
 * Import Application Configuration
 */
require_once('Util/Configuration.php');

/**
 * Import Connection Utility File
 */
require_once('Util/Connection.php');

/**
 * Import Database Initialization File
 */
require_once('Util/Database.php');

/**
 * Get the request uri
 * 
 * @todo This is an experiment that is currently on hold.
 */
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>FreeBib.org</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&family=Source+Code+Pro&display=swap">
    <link rel="stylesheet" href="res/css/main.css">

    <!-- Preloaded Javascript -->
    <script src="res/js/main.js"></script>
</head>
<body>
