<?php

$host = "localhost";
$user = "phpuser";
$pass = "senha123";
$db   = "php002";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
