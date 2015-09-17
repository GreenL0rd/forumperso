<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=forum';
$user = 'root';
$pass = '';

$pdo = new PDO($dsn, $user, $pass);