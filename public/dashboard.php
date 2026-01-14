<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Dashboard | SocialLab</title>
<link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>

<h1>Bem-vindo, <?= $_SESSION['user_name']; ?> 🚀</h1>

<ul>
    <li><a href="pricing.php">Planos</a></li>
    <li><a href="checkout.php">Comprar Créditos</a></li>
    <li><a href="logout.php">Sair</a></li>
</ul>

</body>
</html>
