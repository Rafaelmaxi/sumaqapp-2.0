<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Recetas Saludables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ruta absoluta al CSS -->
  <link rel="stylesheet" href="/sumaqvida_app/css/style.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/recetas.css">

  <!-- JS general -->
  <script src="/sumaqvida_app/js/app.js" defer></script>
</head>
<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>

  <main class="container py-5 mt-5">
    <h2 class="text-center mb-3 text-primary fw-bold">
      <i class="bi bi-egg-fried me-2"></i>Recetas Saludables Recomendadas
    </h2>
    <p class="text-center text-muted mb-4">Sugerencias nutritivas según tus niveles de glucosa.</p>

    <!-- Filtros -->
    <div class="filter-container">
      <button class="btn btn-outline-custom btn-sm filter-btn">Glucosa alta</button>
      <button class="btn btn-outline-custom btn-sm filter-btn">Glucosa normal</button>
      <button class="btn btn-outline-custom btn-sm filter-btn">Desayuno</button>
      <button class="btn btn-outline-custom btn-sm filter-btn">Almuerzo</button>
      <button class="btn btn-outline-custom btn-sm filter-btn">Cena ligera</button>
      <button class="btn btn-outline-custom btn-sm filter-btn">Bajo en carbohidratos</button>
    </div>

    <!-- Cards de recetas -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Receta 1 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/ensalada-atun-palta.jpg" class="card-img-top" alt="Ensalada">
          <div class="card-body">
            <h5 class="card-title color-rosa">Ensalada de atún y palta</h5>
            <p class="card-text">Alta en fibra y omega 3. Ideal para glucosa elevada.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>

      <!-- Receta 2 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/salteado-de-pollo-con-verduras.jpg" class="card-img-top" alt="Verduras y pollo">
          <div class="card-body">
            <h5 class="card-title color-rosa">Salteado de verduras con pollo</h5>
            <p class="card-text">Alto en proteína magra. Regula la glucosa post comida.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>

      <!-- Receta 3 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/smoothie-verde.jpg" class="card-img-top" alt="Smoothie verde">
          <div class="card-body">
            <h5 class="card-title color-rosa">Smoothie verde sin azúcar</h5>
            <p class="card-text">Espinaca, pepino y limón. Refrescante y bajo en calorías.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>

      <!-- Receta 4 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/omelette-espinaca.jpeg" class="card-img-top" alt="Omelette saludable">
          <div class="card-body">
            <h5 class="card-title color-rosa">Omelette de espinaca y champiñones</h5>
            <p class="card-text">Rico en proteína y bajo en carbohidratos. Perfecto para el desayuno.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>

      <!-- Receta 5 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/spaghettu-zapallo-italiano.jpg" class="card-img-top" alt="Pasta de zapallito">
          <div class="card-body">
            <h5 class="card-title color-rosa">Espagueti de zapallito italiano</h5>
            <p class="card-text">Alternativa sin harina, ideal para controlar glucosa.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>

      <!-- Receta 6 -->
      <div class="col">
        <div class="card shadow-sm h-100 border-0">
          <img src="/sumaqvida_app/assets/img/pescado-brocoli.jpg" class="card-img-top" alt="Pescado a la plancha">
          <div class="card-body">
            <h5 class="card-title color-rosa">Pescado al horno con brócoli</h5>
            <p class="card-text">Omega 3 y fibra. Ideal para cenas ligeras.</p>
            <a href="#" class="btn btn-custom btn-sm">Ver receta</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p>© 2025 SumaqVida - Todos los derechos reservados</p>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
