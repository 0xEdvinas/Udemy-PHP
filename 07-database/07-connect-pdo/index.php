<?php

$host = 'localhost';
$port = 3306;
$dbname = 'blog';
$username = 'edv';
$password = 'password'; // woopsies password leaked

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
  $pdo = new PDO($dsn, $username, $password);

  // PDO error mode to throw exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully';
} catch (PDOException $e){
  echo 'Connection failed: ' . $e->getMessage();
}