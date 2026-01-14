<?php
session_start();
require_once "../config/database.php";

$name  = trim($_POST['name']);
$email = trim($_POST['email']);
$pass  = $_POST['password'];

if (!$name || !$email || !$pass) {
    header("Location: ../public/register.php");
    exit;
}

$stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    die("E-mail já cadastrado");
}

$passwordHash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("
    INSERT INTO users (name, email, password)
    VALUES (?, ?, ?)
");

$stmt->execute([$name, $email, $passwordHash]);

$_SESSION['user_id'] = $pdo->lastInsertId();
$_SESSION['user_name'] = $name;

header("Location: ../public/dashboard.php");
exit;
