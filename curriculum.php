<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Currículum - Luis David Valdez</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <style>
    .marco, .marco1, .marco2 {
      background-color: rgba(255, 255, 255, 0.9);
    }
    .clase_color {
      color: #007bff;
    }
    body {
      background-image: url('./images/2.jpg');
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
</head>
<body class="relative min-h-screen font-sans">

  <!-- Logo e imagen -->
  <img src="images/curriculum.svg" alt="Logo" class="absolute top-4 left-4 w-1/12 object-cover" />
  <img src="images/unipoli_logo.png" alt="Logo de la Unipoli" class="absolute top-4 right-4 w-1/6 object-contain" />

  <!-- Imagen principal en el centro -->
  <div class="absolute top-1/2 left-1/4 transform -translate-x-1/2 -translate-y-1/2 p-4 border-4 border-gray-500 rounded-lg w-1/4">
    <img src="images/gato.jpg" alt="Foto de presentación" class="w-full object-cover" />
  </div>

  <!-- Cuadro con información personal -->
  <div class="absolute top-32 right-20 p-4 border-4 border-gray-500 rounded-lg w-1/2 marco2">
    
    <h1 class="text-2xl font-bold mb-4">Luis David Valdez Corral</h1>
    <p class="mb-2"><strong>Título:</strong> Ingeniero en Redes y Telecomunicaciones</p>
    <p class="mb-2"><strong>Especialidad:</strong> Electrónica</p>
    <p class="mb-2"><strong>Ubicación:</strong> México</p>
    <p class="mb-2"><strong>Teléfono:</strong> 618-230-03-22</p>
    <p class="mb-2"><strong>Idiomas:</strong> Español e Inglés A1</p>
    <p class="mb-4"><strong>Antecedentes:</strong> Mis prácticas las realicé en Eclipse Comunicaciones. Esto fue de gran ayuda para desarrollar las capacidades aprendidas en la universidad.</p>
    <p><strong>Estudios:</strong><br>
      Escuela Secundaria Técnica #53<br>
      Cbtis 89<br>
      Unipoli
    </p>
  </div>

  <!-- Menú de navegación -->
  <div class="absolute top-10 right-1/4 p-4 border-4 border-gray-500 rounded-lg w-1/2 marco marco1 text-center space-y-4">
    <a href="curriculum.php" class="clase_color font-semibold ">Currículum&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a href="bibliografia.php" class="clase_color font-semibold ">Biografía&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a href="proyectos.php" class="clase_color font-semibold ">Proyectos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a href="https://www.paypal.com/donate/?hosted_button_id=Q4EDLLTE3F5A2" target="_blank" class="clase_color font-semibold">PayPal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </div>

</body>
</html>
