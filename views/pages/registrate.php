<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crear Cuenta - SugarTrack</title>
  <!-- Ruta absoluta al CSS -->
  <link rel="stylesheet" href="/sumaqvida_app/css/style.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/registrate.css">

  <!-- JS general -->
  <script src="/sumaqvida_app/js/app.js" defer></script>
</head>
<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>

  <div class="register-container">
    <h2>Crear Cuenta</h2>
    <form id="registroForm">
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required />

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="••••••••" required />

      <label for="confirmar">Confirmar contraseña</label>
      <input type="password" id="confirmar" name="confirmar" placeholder="Repite tu contraseña" required />

      <button type="submit">Registrarme</button>
    </form>
    <div class="extra">
      ¿Ya tienes cuenta? <a href="/sumaqvida_app/views/pages/login.php">Inicia sesión</a>
    </div>
  </div>

</body>
</html>
