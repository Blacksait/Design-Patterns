<?php
namespace BD;

use BD\Classes\User;

require_once __DIR__ . '/../vendor/autoload.php';


$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'laravel';
$db_port = 8889;

$mysqli = new \mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);

$users = new User($mysqli);
$users->category();

//$mysqli->close();