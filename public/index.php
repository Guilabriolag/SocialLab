<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login | SocialLab</title>
<link rel="stylesheet" href="../assets/css/auth.css">
</head>

<body class="auth-page">

<form action="../auth/login_action.php" method="POST" class="auth-box">
    <img src="../assets/img/logo-sociallab.png" width="120">

    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="Senha" required>

    <button type="submit">Entrar</button>

    <div class="divider">ou</div>

    <a href="../auth/google_oauth.php" class="google-btn">
        Entrar com Google
    </a>

    <p>Não tem conta? <a href="register.php">Criar agora</a></p>
</form>

</body>
</html>
