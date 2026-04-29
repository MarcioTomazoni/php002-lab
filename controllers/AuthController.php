<?php

require_once __DIR__ . '/../core/flash.php';

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

    if ($success === true) {
        header('Location: index.php?action=login');
        exit;
    }

    if ($success === 'email_exists') {
        setFlash('error', 'Este e-mail já está cadastrado.');
    } else {
        $erro = "Erro ao cadastrar usuário.";
    }
    }

    require __DIR__ . '/../views/auth/register.php';
    }

    public function logout()
    {
        session_start();
    
        session_unset();
        session_destroy();
    
        setFlash('success', 'Usuário cadastrado com sucesso!');
        exit;
    }

}
