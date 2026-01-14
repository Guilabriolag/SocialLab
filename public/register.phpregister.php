<?php
session_start();
require_once "../config/database.php";

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome  = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];

    if (empty($nome) || empty($email) || empty($senha)) {
        $erro = "Preencha todos os campos.";
    } else {

        // Verifica se email já existe
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $erro = "Este e-mail já está cadastrado.";
        } else {

            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("
                INSERT INTO users (nome, email, senha, created_at)
                VALUES (?, ?, ?, NOW())
            ");

            if ($stmt->execute([$nome, $email, $senhaHash])) {
                $sucesso = "Cadastro realizado com sucesso!";
            } else {
                $erro = "Erro ao cadastrar.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | SocialLab</title>
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>

<div class="auth-container">
    <h2>Criar Conta</h2>

    <?php if ($erro): ?>
        <p class="error"><?= $erro ?></p>
    <?php endif; ?>

    <?php if ($sucesso): ?>
        <p class="success"><?= $sucesso ?></p>
        <a href="login.php">Ir para login</a>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <p>Já tem conta? <a href="login.php">Entrar</a></p>
</div>

</body>
</html>
