<?php

class Database
{
    public static function connect()
    {
        $host = "localhost";
        $dbname = "php002";
        $user = "phpuser";
        $pass = "senha123";

        try {
            return new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                $user,
                $pass
            );
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
