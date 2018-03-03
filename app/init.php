<?php

spl_autoload_register(function ($class) {
  include 'classes/' . $class . '.php';
});

function getDB(){
    $host = '172.27.0.2';
    $port = '3306';
    $db   = 'crypto_manager';
    $user = 'hjhj007';
    $pass = 'password';

    $dsn = "mysql:host=$host;port=$port;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);

    return $pdo;
}

 ?>