<?php
session_start();

// 🔒 1. PROTEÇÃO DE ACESSO (SEMPRE NO TOPO)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// 🔧 2. INCLUDES (logo após validação)
require 'includes/header.php';
?>

<!-- 🎯 3. CONTEÚDO DA PÁGINA -->
<h2>Dashboard</h2>

<p>Bem-vindo, <strong><?php echo $_SESSION['user_name']; ?></strong> 👋</p>

<br>

<a href="logout.php">
    <button>Sair</button>
</a>

<!-- 🔚 4. FINALIZAÇÃO -->
<?php require 'includes/footer.php'; ?>
