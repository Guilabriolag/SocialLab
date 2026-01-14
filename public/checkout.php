<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$plan = $_GET['plan'] ?? 'basic';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Pagamento | SocialLab</title>
</head>

<body>

<h1>Finalizar Assinatura</h1>
<p>Plano selecionado: <strong><?= strtoupper($plan); ?></strong></p>

<button>Pagar com Pix</button>
<button>Pagar com Mercado Pago</button>

<p>* Integração será feita via API</p>

</body>
</html>
