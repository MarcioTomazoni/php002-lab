<?php

require_once __DIR__ . '/../controllers/AuthController.php';

// Simples roteamento via GET
$action = $_GET['action'] ?? 'login';

$controller = new AuthController();

if ($action === 'login') {
    $controller->login();
} else {
    echo "Rota não encontrada";
}
