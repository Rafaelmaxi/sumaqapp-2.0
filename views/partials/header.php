<header>
  <div class="logo">
    <a href="/sumaqvida_app/index.php">SumaqVida</a>
  </div>

  <nav class="desktop-menu">
    <a href="/sumaqvida_app/index.php#sobre">Nosotros</a>
    <div class="dropdown">
      <a href="#">Funciones</a>
      <div class="dropdown-content">
        <a href="/sumaqvida_app/views/pages/registro-diario.php">Registro diario</a>
        <a href="/sumaqvida_app/views/pages/evaluacion.php">Evaluación antes de comer</a>
        <a href="/sumaqvida_app/views/pages/recetas.php">Recetas</a>
      </div>
    </div>
    <a href="/sumaqvida_app/index.php#faq">Preguntas</a>
  </nav>

  <div class="login-btn desktop-menu">
    <a href="/sumaqvida_app/views/pages/login.php">Iniciar sesión</a>
  </div>

  <div class="hamburger" onclick="toggleMobileMenu()">☰</div>

  <div class="mobile-menu" id="mobileMenu">
    <div class="close-btn" onclick="toggleMobileMenu()">×</div>
    <div class="menu-centrado">
      <a href="/sumaqvida_app/index.php#sobre">Nosotros</a>
      <details>
        <summary>Funciones</summary>
        <a href="/sumaqvida_app/views/pages/registro-diario.php">Registro diario</a>
        <a href="/sumaqvida_app/views/pages/evaluacion.php">Evaluación antes de comer</a>
        <a href="/sumaqvida_app/views/pages/recetas.php">Recetas</a>
      </details>
      <a href="/sumaqvida_app/index.php#faq">Preguntas</a>
    </div>
    <a href="/sumaqvida_app/views/pages/login.php" class="btn-mobile-login">Iniciar sesión</a>
  </div>
</header>
