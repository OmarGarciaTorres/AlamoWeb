<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Recomendaciones</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/quests.css">

      <!-- visualizar favicon para la pagina web desde distintos dispositivos -->
      <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
         <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
         <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
         <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
         <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
         <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
         <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
         <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
         <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
         <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
         <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
         <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
         <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
         <link rel="manifest" href="/manifest.json">
         <meta name="msapplication-TileColor" content="#ffffff">
         <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
         <meta name="theme-color" content="#ffffff">
   </head>
   <body>
      
      <!-- comienza la sección del encabezado  -->

      <section class="header">

         <a href="home.php" class="logo">Tijuana, B.C.</a>

            <nav class="navbar">
               <a href="home.php">Inicio</a>
               <a href="package.php">Paquetes</a>
               <a href="book.php">Reserva</a>
               <a href="about.php">Acerca de</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->

      <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
         <h1>reserva ahora</h1>
      </div>

      <!-- comienza la sección de reserva  -->

      <section class="booking">

         <h1 class="heading-title">No te quedes sin un lugar!</h1>

      </section>

      <!-- termina la sección de reserva  -->

      <?php
    // Obtener los intereses seleccionados del formulario
    $interests = isset($_POST['interests']) ? $_POST['interests'] : [];

    // Simular recomendaciones de lugares turísticos
    $recommendations = [];

    // Definir los lugares turísticos disponibles para cada categoría de interés
    $places = [
        "playas" => [
            ["nombre" => "Playa de Tijuana", "imagen" => "directory/cine1.jpg", "descripcion" => "Disfruta de un día soleado en la hermosa Playa de Tijuana."],
            ["nombre" => "Rosarito Beach", "imagen" => "directory/cine2.webp", "descripcion" => "Visita la famosa Rosarito Beach y disfruta de sus vistas panorámicas."],
        ],
        "museos" => [
            ["nombre" => "Museo de Cera", "imagen" => "directory/cine10.jpg", "descripcion" => "Explora el fascinante Museo de Cera y descubre figuras de cera realistas."],
            ["nombre" => "Museo de las Californias", "imagen" => "directory/hotel10.jpg", "descripcion" => "Sumérgete en la historia en el Museo de las Californias y aprende sobre la región."],
        ],
        "parques" => [
            ["nombre" => "Parque Morelos", "imagen" => "directory/res9.jpg", "descripcion" => "Pasa un día relajante en el hermoso Parque Morelos y disfruta de su entorno natural."],
            ["nombre" => "Parque de la Amistad", "imagen" => "directory/parque1.png", "descripcion" => "Disfruta de actividades al aire libre en el Parque de la Amistad y haz nuevos amigos."],
        ]
    ];

    // Generar recomendaciones aleatorias basadas en los intereses seleccionados
    foreach ($interests as $interest) {
        if (array_key_exists($interest, $places)) {
            // Obtener los lugares turísticos disponibles para la categoría de interés
            $lugares_categoria = $places[$interest];
            // Seleccionar un lugar turístico aleatorio de la categoría
            $indice_aleatorio = array_rand($lugares_categoria);
            $lugar_recomendado = $lugares_categoria[$indice_aleatorio];
            // Agregar el lugar recomendado a la lista de recomendaciones
            $recommendations[] = $lugar_recomendado;
        }
    }

    // Mostrar las recomendaciones
    echo "<h2>Recomendaciones de Lugares Turísticos:</h2>";
    if (empty($recommendations)) {
        echo "<p>No se encontraron recomendaciones para los intereses seleccionados.</p>";
    } else {
        echo "<div class='recommendations'>";
        foreach ($recommendations as $place) {
            echo "<div class='card'>";
            echo "<img src='images/{$place['imagen']}' alt='{$place['nombre']}'>";
            echo "<div class='card-content'>";
            echo "<h3>{$place['nombre']}</h3>";
            echo "<p>{$place['descripcion']}</p>";
            echo "</div>"; // cierre de card-content
            echo "</div>"; // cierre de card
        }
        echo "</div>"; // cierre de recommendations
    }
  ?>
      <!-- comienza la sección de pie de página  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>Enlaces</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> Acerca De </a>
               <a href="package.php"> <i class="fas fa-angle-right"></i> Paquetes </a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> Reserva</a>
            </div>

            <div class="box">
               <h3>Sobre Nosotros</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> preguntas</a>
               <a href="#"> <i class="fas fa-angle-right"></i> acerca de</a>
               <a href="#"> <i class="fas fa-angle-right"></i> politica de privacidad</a>
               <a href="#"> <i class="fas fa-angle-right"></i> terminos de uso</a>
            </div>

            <div class="box">
               <h3>contact info</h3>
               <a href="#"> <i class="fas fa-phone"></i> 6642149981 </a>
               <a href="#"> <i class="fas fa-phone"></i> 6648738493 </a>
               <a href="#"> <i class="fas fa-envelope"></i> omar.garcia201@tectijuana.edu.mx </a>
               <a href="#"> <i class="fas fa-map"></i> Tijuana, Baja californa, Mexico</a>
            </div>

            <div class="box">
               <h3>follow us</h3>
               <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

         </div>

         <div class="credit"> creado por <span>Private Studio</span> | ¡Todos los derechos reservados! </div>

      </section>

      <!-- termina la sección de pie de página  -->

      <!-- sweetalert cdn link  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   </body>
</html>
