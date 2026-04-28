<h2>Cadastro</h2>

<?php if (!empty($erro)): ?>
<p style="color:red;"><?php echo $erro; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="name" placeholder="Nome" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="senha" placeholder="Senha" required><br><br>
    <button type="submit">Cadastrar</button>
</form>

<a href="index.php?action=login">Voltar para login</a>
