<h2>Login</h2>

<?php
require_once __DIR__ . '/../../core/flash.php';

session_start();

if ($msg = getFlash('error')) {
    echo "<p style='color:red;'>$msg</p>";
}

if ($msg = getFlash('success')) {
    echo "<p style='color:green;'>$msg</p>";
}
?>

<?php if (!empty($erro)): ?>
<p style="color:red;"><?php echo $erro; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="email" placeholder="E-mail" required><br><br>

    <input type="password" name="senha" placeholder="Senha" required><br><br>

    <button type="submit">Entrar</button>
</form>
