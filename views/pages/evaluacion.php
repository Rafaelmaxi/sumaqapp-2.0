<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Evaluación - SumaqVida</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/evaluacion.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/style.css">
  <script src="/sumaqvida_app/js/app.js"></script>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>

<div class="container mt-5 pt-5">
  <h2 class="section-title">Evaluar decisión antes de comer</h2>

  <form id="form-evaluador" class="mb-5">
    <div class="row g-4">
      <div class="col-12">
        <label class="form-label">Nivel actual de glucosa</label>
        <select class="form-select" name="glucosa" required>
          <option value="">Selecciona...</option>
          <option value="60">60</option>
          <option value="85">85</option>
          <option value="110">110</option>
          <option value="140">140</option>
          <option value="180">180</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Comida que vas a ingerir</label>
        <select class="form-select" name="comida" required>
          <option value="">Selecciona...</option>
          <option value="Ensalada con pollo">Ensalada con pollo</option>
          <option value="Pan con mermelada">Pan con mermelada</option>
          <option value="Arroz con huevo">Arroz con huevo</option>
          <option value="Fruta natural">Fruta natural</option>
          <option value="Galletas">Galletas</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Uso de insulina</label>
        <select class="form-select" name="insulina" required>
          <option value="">Selecciona...</option>
          <option value="0">No aplicaré</option>
          <option value="2">2 U</option>
          <option value="4">4 U</option>
          <option value="6">6 U</option>
          <option value="8">8 U</option>
        </select>
      </div>
    </div>

    <div class="mt-4 text-end">
      <button type="submit" class="btn btn-primary px-4">Evaluar decisión</button>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/sumaqvida_app/js/evaluacion.js"></script>

</body>
</html>
