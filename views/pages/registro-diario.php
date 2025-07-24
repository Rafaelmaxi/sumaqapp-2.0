<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Diario - SumaqVida</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/sumaqvida_app/css/style.css">
  <link rel="stylesheet" href="/sumaqvida_app/css/registro-diario.css">
  <script src="/sumaqvida_app/js/app.js"></script>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>


<div class="container mt-5 pt-5">
  <h2 class="section-title">Registro Diario</h2>

<div class="row mb-4 g-3">
  <div class="col-md-4">
    <div class="card shadow-sm p-3 text-center">
      <h6 class="text-muted mb-1">Último nivel de glucosa</h6>
      <h4 id="cardGlucosa" class="fw-bold text-primary">-- mg/dL</h4>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow-sm p-3 text-center">
      <h6 class="text-muted mb-1">Última actividad física</h6>
      <h5 id="cardActividad" class="fw-semibold text-success">--</h5>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card shadow-sm p-3 text-center">
      <h6 class="text-muted mb-1">Registros hoy</h6>
      <h4 id="cardRegistros" class="fw-bold text-dark">0</h4>
    </div>
  </div>
</div>


  <form id="form-registro" class="mb-5">
    <div class="row g-4">
      <div class="col-12">
        <label class="form-label">Nivel de Glucosa</label>
        <select class="form-select" name="glucosa" required>
          <option value="">Selecciona...</option>
          <option value="60">60 (Muy baja)</option>
          <option value="85">85 (Normal)</option>
          <option value="110">110 (Levemente alta)</option>
          <option value="140">140 (Alta)</option>
          <option value="180">180 (Muy alta)</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Dosis de Insulina</label>
        <select class="form-select" name="insulina" required>
          <option value="">Selecciona...</option>
          <option value="0">0 U</option>
          <option value="2">2 U</option>
          <option value="4">4 U</option>
          <option value="6">6 U</option>
          <option value="8">8 U</option>
          <option value="10">10 U</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Comida Ingerida</label>
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
        <label class="form-label">Actividad física realizada</label>
        <select class="form-select" name="actividad" required>
          <option value="">Selecciona...</option>
          <option value="Ninguna">Ninguna</option>
          <option value="Caminata ligera">Caminata ligera (15-30 min)</option>
          <option value="Ejercicio moderado">Ejercicio moderado (30-60 min)</option>
          <option value="Ejercicio intenso">Ejercicio intenso (más de 1h)</option>
        </select>
      </div>

    </div>

    <div class="mt-4 text-end">
      <button type="submit" class="btn btn-success px-4"> Guardar registro</button>
    </div>
  </form>

  <h3 class="section-title"> Historial de Registros</h3>
  <div class="table-responsive mb-4">
    <table class="table table-striped table-bordered" id="tabla-historial">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Glucosa</th>
          <th>Insulina</th>
          <th>Comida</th>
          <th>Actividad fisica</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <div class="card p-3 mb-4">
    <h5 class="mb-2">Meta Diaria</h5>
    <p id="metaDiaria">Registrar al menos 3 comidas y mantener glucosa en rango normal (70-130 mg/dL).</p>
  </div>
  <!--
  <div class="text-end mb-4">
    <button class="btn btn-outline-primary" onclick="mostrarResumenDia()">📅 Ver resumen del día</button>
  </div>
  -->
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/sumaqvida_app/js/registro.js"></script>

</body>
</html>
