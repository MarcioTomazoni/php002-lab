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

        // comparação simples (temporária)
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }
}
