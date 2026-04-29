<?php

require_once __DIR__ . '/../controllers/AuthController.php';

$action = $_GET['action'] ?? 'login';

$controller = new AuthController();

switch ($action) {
    case 'login':
        $controller->login();
        break;

    case 'dashboard':
        $controller->dashboard();
        break;

    case 'register':
        $controller->register();
        break;

    case 'logout':
    $controller->logout();
    break;

    default:
        echo "Página não encontrada";
}