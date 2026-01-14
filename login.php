<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SocialLab • Login</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

  <style>
    :root {
      --azul-eletrico: #0077B6;
      --amarelo: #FFCC00;
      --preto: #000000;
      --branco: #FFFFFF;
      --cinza-escuro: #1a1a1a;
      --font-principal: 'Poppins', sans-serif;
      --font-secundaria: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: var(--font-secundaria);
      background: linear-gradient(180deg, var(--preto), var(--cinza-escuro));
      color: var(--branco);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background: var(--cinza-escuro);
      padding: 40px;
      border-radius: 14px;
      width: 100%;
      max-width: 380px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.5);
    }

    .login-box h1 {
      font-family: var(--font-principal);
      text-align: center;
      margin-bottom: 25px;
      font-size: 1.8rem;
    }

    .login-box h1 span { color: var(--azul-eletrico); }

    .google-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fff;
      color: #000;
      padding: 12px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      margin-bottom: 20px;
    }

    .divider {
      text-align: center;
      margin: 20px 0;
      font-size: 0.85rem;
      color: #aaa;
    }

    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 14px;
      border-radius: 8px;
      border: none;
      font-size: 0.95rem;
    }

    button {
      width: 100%;
      padding: 14px;
      background: var(--amarelo);
      color: var(--preto);
      border: none;
      border-radius: 30px;
      font-family: var(--font-principal);
      font-weight: 600;
      cursor: pointer;
    }

    button:hover { background: #ffd633; }

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 0.85rem;
    }

    .footer a { color: var(--azul-eletrico); text-decoration: none; }
  </style>
</head>
<body>

  <div class="login-box">
    <h1><span>Social</span>Lab</h1>

    <!-- Google OAuth -->
    <a href="google_login.php" class="google-btn">Entrar com Google</a>

    <div class="divider">ou entre com e-mail</div>

    <!-- Login tradicional -->
    <form method="POST" action="login_action.php">
      <input type="email" name="email" placeholder="E-mail" required />
      <input type="password" name="senha" placeholder="Senha" required />
      <button type="submit">Entrar</button>
    </form>

    <div class="footer">
      Não tem conta? <a href="register.php">Criar agora</a>
    </div>
  </div>

</body>
</html>
