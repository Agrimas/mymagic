<?php
require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

$host = $_SERVER['DB_HOST'];
$db   = $_SERVER['DB_NAME'];
$user = $_SERVER['DB_USER'];
$pass = $_SERVER['DB_PASSWORD'];
$charset = $_SERVER['DB_CHARSET'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);