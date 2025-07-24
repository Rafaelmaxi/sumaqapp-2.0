<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión - SumaqVida</title>
  
  <!-- Ruta absoluta al CSS -->
  <link rel="stylesheet" href="/sumaqvida_app/css/style.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/login.css">

  <!-- JS general -->
  <script src="/sumaqvida_app/js/app.js" defer></script>
</head>
<body>

  <!-- Incluir el header -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>

  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form id="loginForm">
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required />

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="••••••••" required />

      <button type="submit">Entrar</button>
    </form>
    <div class="extra">
      ¿No tienes cuenta? <a href="/sumaqvida_app/views/pages/registrate.php">Regístrate</a>
    </div>
  </div>

</body>
</html>
