<?php
header('Content-Type: application/json');

// Tu clave API desde Google AI Studio
$apiKey = 'AIzaSyC2PUzYbNU9KJxyO85486iHbiLCoffDlfk';

$input = json_decode(file_get_contents('php://input'), true);
//$userMessage = $input['message'] ?? '';
$userMessage = 'Responde de forma breve: ' . ($input['message'] ?? '');

// Si el mensaje está vacío, devuelve error
if (trim($userMessage) === 'Responde de forma breve:') {
  echo json_encode(['reply' => 'Tu mensaje está vacío.']);
  exit;
}
// Si el mensaje es muy largo, devuelve error
if (strlen($userMessage) > 1000) {
  echo json_encode(['reply' => 'El mensaje es muy largo. Intenta resumir.']);
  exit;
}

// Estructura de datos para la API Gemini
$data = [
  'contents' => [
    [
      'role' => 'user',
      'parts' => [
        ['text' => $userMessage]
      ]
    ]
  ]
];

// Llamada a la API de Gemini
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://generativelanguage.googleapis.com/v1/models/gemini-2.5-flash:generateContent?key=' . $apiKey);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json'
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
  echo json_encode(['reply' => 'Error de conexión con Gemini.']);
  curl_close($ch);
  exit;
}
curl_close($ch);

// Guardar respuesta cruda para debug
//file_put_contents('debug_response.json', $response);

// Decodificar respuesta y devolver el texto del chatbot
$responseData = json_decode($response, true);

if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
  echo json_encode([
    'reply' => $responseData['candidates'][0]['content']['parts'][0]['text']
  ]);
} else {
  // Mostrar mensaje de error detallado si está disponible
  if (isset($responseData['error']['message'])) {
    echo json_encode([
      'reply' => 'Error de Gemini: ' . $responseData['error']['message']
    ]);
  } else {
    echo json_encode([
      'reply' => 'Lo siento, no pude entenderte.'
    ]);
  }
}
