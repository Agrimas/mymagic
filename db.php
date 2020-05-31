<?php
include 'autoload.php';
$host = $_SERVER['DB_HOST'];
$db   = $_SERVER['DB_NAME'];
$user = $_SERVER['DB_USER'];
$pass = $_SERVER['DB_PASSWORD'];
$charset = $_SERVER['DB_CHARSET'];

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO( 'mysql:host='.$host.';dbname='.$db, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' " ) );
