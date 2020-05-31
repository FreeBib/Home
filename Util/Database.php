<?php

$db = null;

try {
    $db = new PDO('mysql:host=localhost;charset=UTF8;dbname=FreeBib', 'jflopezfernandez', '');
} catch (PDOException $pdoException) {
    die($pdoException->getMessage());
}

