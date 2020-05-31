<?php

if (!$View) {
    $View = "Home";
}

require_once('Views/Components/Header.php');
ensureSecureConnection();
require_once("Views/$View.php");
require_once('Views/Components/Footer.php');
