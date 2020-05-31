<?php

require_once('Util/Connection.php');

ensureSecureConnection();

/**
 * Include Database Initialization
 */
require_once('Util/Database.php');

/**
 * Display the Homepage
 */
require_once('Views/Home.php');

