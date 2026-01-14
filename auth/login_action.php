<?php
session_start();
require_once "../config/database.php";

$email = trim($_POST['email']);
$pass  = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user || !password_verify($pass, $user['password'])) {
    die("Login inválido");
}

$_SESSION['user_id']   = $user['id'];
$_SESSION['user_name'] = $user['name'];

header("Location: ../public/dashboard.php");
exit;
