<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro | SocialLab</title>
<link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body class="auth-page">

<form action="../auth/register_action.php" method="POST" class="auth-box">
    <h2>Criar Conta</h2>

    <input type="text" name="name" placeholder="Nome completo" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="Senha" required>

    <button type="submit">Cadastrar</button>

    <p>Já tem conta? <a href="login.php">Entrar</a></p>
</form>

</body>
</html>
