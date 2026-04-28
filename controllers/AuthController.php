<?php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    public function login()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'] ?? '';
            $senha = $_POST['senha'] ?? '';

            $userModel = new User();
            $user = $userModel->authenticate($email, $senha);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nome'] = $user['name'];

                header('Location: index.php?action=dashboard');
                exit;
            }

            $erro = "Login inválido.";
        }

        require __DIR__ . '/../views/auth/login.php';
    }

    public function dashboard()
    {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }

        require __DIR__ . '/../views/auth/dashboard.php';
    }

    public function register()
    {   
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name  = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $userModel = new User();

        $success = $userModel->create($name, $email, $senha);

        if ($success) {
            header('Location: index.php?action=login');
            exit;
        }

        $erro = "Erro ao cadastrar usuário.";
    }

    require __DIR__ . '/../views/auth/register.php';
    }

}
