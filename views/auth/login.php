<h2>Login</h2>

<?php if (!empty($erro)): ?>
<p style="color:red;"><?php echo $erro; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="email" placeholder="E-mail" required><br><br>

    <input type="password" name="senha" placeholder="Senha" required><br><br>

    <button type="submit">Entrar</button>
</form>
