<!DOCTYPE html>
<html lang="es">
<head>
  <meta charseat="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SumaqVida</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/app.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
   
</head>
<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/sumaqvida_app/views/partials/header.php"); ?>


  <div class="banner">
    <div class="banner-left">
      <h1>Controla tu diabetes</h1>
      <p>Registra, evalúa y mejora tus decisiones diarias con una herramienta inteligente y preventiva.</p>
      <a href="#funcionalidades">Comenzar ahora</a>
    </div>
    <div class="banner-right">
      <img src="assets/img/banner-diabetes-3.png" alt="Control de diabetes">
    </div>
  </div>

  <section id="funcionalidades" class="funcionalidades">
    <h2>- Funciones Principales -</h2>
    <ul>
      <li>✔ Registro de glucosa, insulina y alimentos.</li>
      <li>✔ Evaluación preventiva antes de comer o aplicar insulina.</li>
      <li>✔ Alertas automáticas sobre riesgos de hipoglucemia o hiperglucemia.</li>
      <li>✔ Sugerencias personalizadas de acciones y alimentación.</li>
      <li>✔ Historial y evolución de tu tratamiento.</li>
    </ul>
  </section>

  <section id="sobre">
    <h2>- ¿Qué es SumaqVida? -</h2>
    <p>
      SumaqVida es una plataforma web diseñada para personas con diabetes que desean prevenir crisis y tomar decisiones informadas. Desde el registro de tus niveles de glucosa hasta la evaluación automática antes de comer o usar insulina, te brinda una guía clara, sencilla y visual para mantenerte en control.
    </p>
  </section>

  <section id="faq" class="faq">
    <h2>- Preguntas Frecuentes -</h2>
    <ul>
      <li><strong>¿Es gratuito el uso?</strong><br/>Sí, esta herramienta es gratuita y de libre acceso.</li>
      <li><strong>¿Necesito conexión a Internet?</strong><br/>Sí, ya que trabaja desde el navegador.</li>
      <li><strong>¿Es una herramienta médica?</strong><br/>No reemplaza atención médica. Es una ayuda preventiva y educativa.</li>
      <li><strong>¿Puedo guardar mis registros?</strong><br/>Sí, en la siguiente versión se incluirá historial y exportación.</li>
    </ul>
  </section>

  <footer>
    <p>© 2025 SumaqVida - Todos los derechos reservados</p>
  </footer>

  <div id="chatToggle">💬</div>

  <div id="chatWidget" style="display: none;">
    <div id="chatHeader">Asistente de Salud 🤖</div>
    <div id="chatLog"></div>
    <div id="chatInputArea">
      <input id="chatInput" type="text" placeholder="Escribe tu mensaje..." />
      <button id="sendMessageBtn">➤</button>
    </div>
  </div>

<script src="js/chatbot.js"></script>

</body>
</html>
