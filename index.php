<?php

if (!$_GET['View']) {
    $View = "Home";
} else {
    $View = $_GET['View'];
}

require_once('Views/Components/Header.php');
ensureSecureConnection();
require_once("Views/$View.php");
require_once('Views/Components/Footer.php');
