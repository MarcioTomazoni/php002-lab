<?php

require_once __DIR__ . '/Database.php';

class User
{
    public function authenticate($email, $password)
    {
        $pdo = Database::connect();

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // valida senha com hash seguro
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function create($name, $email, $password)
    {
        $pdo = Database::connect();

        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $stmt->execute([$name, $email, $hashedPassword]);
    }


}