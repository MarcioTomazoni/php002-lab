<?php

// bloco usado para ver possiveis erros PHP: 
ini_set('display_errors', 1);
error_reporting(E_ALL);



require 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sqlCheck = "SELECT id FROM users WHERE email = ?";
    $stmtCheck = $conn->prepare($sqlCheck);
    $stmtCheck->bind_param("s", $email);
    $stmtCheck->execute();
    $stmtCheck->store_result();

    if ($stmtCheck->num_rows > 0) {
    echo "⚠️ Email já cadastrado!";
} else {

    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $passwordHash);

    if ($stmt->execute()) {
        echo "✅ Usuário cadastrado com sucesso!";
    } else {
        echo "❌ Erro: " . $stmt->error;
    }

    $stmt->close();
}
    
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
    die("Erro no prepare: " . $conn->error);
    }
    
    $stmt->bind_param("sss", $name, $email, $passwordHash);

    if ($stmt->execute()) {
        echo "✅ Usuário cadastrado com sucesso!";
    } else {
        echo "❌ Erro: " . $stmt->error;
    }

    $stmt->close();
}
?>

<?php require 'includes/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro de Usuário</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Nome" required><br><br>
    
    <input type="email" name="email" placeholder="Email" required><br><br>
    
    <input type="password" name="password" placeholder="Senha" required><br><br>
    
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>

<?php require 'includes/footer.php'; ?>
