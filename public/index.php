<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SocialLab — Impulsione suas redes</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

  <style>
    /* =========================
       IDENTIDADE VISUAL
    ========================= */
    :root {
      --azul-eletrico: #0077B6;
      --amarelo: #FFCC00;
      --preto: #000000;
      --branco: #FFFFFF;
      --cinza-escuro: #1a1a1a;
      --font-principal: 'Poppins', sans-serif;
      --font-secundaria: 'Montserrat', sans-serif;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-secundaria);
      background-color: var(--preto);
      color: var(--branco);
    }

    /* =========================
       SPLASH SCREEN
    ========================= */
    .splash-screen {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: var(--preto);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1000;
      opacity: 1;
      visibility: visible;
      transition: opacity 1s ease-in-out, visibility 1s ease-in-out;
    }

    .splash-screen.fade-out {
      opacity: 0;
      visibility: hidden;
    }

    .splash-logo {
      width: 180px;
      animation: bounceIn 1s ease-in-out;
    }

    @keyframes bounceIn {
      0% { transform: scale(0.3); opacity: 0; }
      50% { transform: scale(1.1); opacity: 1; }
      100% { transform: scale(1); }
    }

    /* =========================
       HEADER / HERO
    ========================= */
    header {
      padding: 80px 20px;
      text-align: center;
      background: linear-gradient(180deg, var(--preto), var(--cinza-escuro));
    }

    header h1 {
      font-family: var(--font-principal);
      font-size: 2.6rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    header h1 span {
      color: var(--azul-eletrico);
    }

    header p {
      max-width: 620px;
      margin: 0 auto 40px;
      font-size: 1.1rem;
      color: #cccccc;
    }

    .cta {
      display: inline-block;
      background-color: var(--amarelo);
      color: var(--preto);
      padding: 14px 36px;
      border-radius: 30px;
      font-family: var(--font-principal);
      font-weight: 600;
      text-decoration: none;
      transition: transform 0.2s ease, background 0.2s ease;
    }

    .cta:hover {
      transform: scale(1.05);
      background-color: #ffd633;
    }

    /* =========================
       BENEFÍCIOS
    ========================= */
    .benefits {
      padding: 80px 20px;
      background-color: var(--preto);
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1100px;
      margin: auto;
    }

    .card {
      background-color: var(--cinza-escuro);
      padding: 30px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }

    .card h3 {
      font-family: var(--font-principal);
      margin-bottom: 15px;
      color: var(--azul-eletrico);
    }

    .card p {
      font-size: 0.95rem;
      color: #d0d0d0;
    }

    /* =========================
       FOOTER
    ========================= */
    footer {
      text-align: center;
      padding: 30px;
      font-size: 0.85rem;
      background-color: var(--cinza-escuro);
      color: #aaaaaa;
    }
  </style>
</head>
<body>

  <!-- SPLASH SCREEN -->
  <div class="splash-screen" id="splash">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgRya_7-cu9aJ8403uSfVNr9B5V_STEGXY7Yp2hAZ92sEHc4q1j8jt6QvCExX-qXC0y-CQG79sx6bo3GYQnSpMOeAjlLYFxfpyPBWCZDu4FAagfr-4sk7iRa7rQjOxjJ5Y94wAZLHhLPXMwGJnn-mRhoI4Vwj9dxpaC7wlHbKeVHIkbTz0Upm7_MdEHCVJd/s724/20260114_002127.png" alt="SocialLab" class="splash-logo" />
  </div>

  <!-- HERO -->
  <header>
    <h1>Impulsione suas <span>redes sociais</span></h1>
    <p>O SocialLab é a plataforma inteligente para crescer no Instagram, TikTok e muito mais, com automação, velocidade e controle total.</p>
    <a href="#" class="cta">Criar conta grátis</a>
  </header>

  <!-- BENEFÍCIOS -->
  <section class="benefits">
    <div class="card">
      <h3>Automação Total</h3>
      <p>Pedidos processados automaticamente via sistema integrado.</p>
    </div>
    <div class="card">
      <h3>Pagamentos Rápidos</h3>
      <p>Pix e Mercado Pago para crédito instantâneo.</p>
    </div>
    <div class="card">
      <h3>Revenda Profissional</h3>
      <p>Estrutura pronta para escalar e revender serviços.</p>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    © 2026 SocialLab • labriolag.shop
  </footer>

  <!-- JS SPLASH -->
  <script>
    window.addEventListener('load', () => {
      setTimeout(() => {
        document.getElementById('splash').classList.add('fade-out');
      }, 1200);
    });
  </script>

</body>
       </html>
