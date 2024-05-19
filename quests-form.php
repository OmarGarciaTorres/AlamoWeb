<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Recomendaciones | Alamo Web</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
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

         <!-- Enlace con la imagen PNG como logo -->
         <a href="index.php" class="logo">
            <!-- Imagen PNG -->
            <img src="images/alamoicon.png" alt="AlamoIcon">
         </a>

         <div class="menu">
            <img src="images/alamomenu.png" alt="AlamoMenu">
            <div class="menu-content">
                  <a href="index.php" class="menu-item">Inicio</a>
                  <a href="directory.php" class="menu-item">Directorio</a>
                  <a href="activities.php" class="menu-item">Actividades</a>
                  <a href="blog.php" class="menu-item">Blog de Viajes</a>
                  <a href="descuentos.php" class="menu-item">Ofertas y Descuentos</a>
                  <a href="quests.php" class="menu-item">Recomendaciones</a>
            </div>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->

      <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
         <h1>Alamo Web</h1>
      </div>

      <!-- comienza la sección de reserva  -->

      <section class="booking">

         <h1 class="heading-title">Recomendaciones de Lugares Turísticos</h1>

      </section>

      <!-- termina la sección de reserva  -->

      <?php
    // Obtener los intereses seleccionados del formulario
    $interests = isset($_POST['interests']) ? $_POST['interests'] : [];

    // Simular recomendaciones de lugares turísticos
    $recommendations = [];

    // Definir los lugares turísticos disponibles para cada categoría de interés
    $places = [
        "cines" => [
            ["nombre" => "Cinemex Mundo Divertido", "imagen" => "directory/cine1.jpg", "descripcion" => "Con una amplia selección de películas, 
            comodidades modernas y actividades emocionantes, ofrece una experiencia cinematográfica inolvidable para toda la familia."],
            ["nombre" => "Cinemex Plaza Alameda", "imagen" => "directory/cine6.jpg", "descripcion" => "Alameda es un destino cinematográfico de referencia en Tijuana, conocido por su 
            ambiente acogedor y su compromiso con ofrecer lo mejor en sus instalaciones y ambiente familiar."],
            ["nombre" => "Cinepolis Plaza Rio", "imagen" => "directory/cine7.jpg", "descripcion" => "Cinepolis Plaza Rio ofrece una experiencia cinematográfica 
            inigualable en Tijuana, con una amplia selección de películas, servicios premium y comodidades modernas."],
            ["nombre" => "Cinepolis Plaza Monarca", "imagen" => "directory/cine10.jpg", "descripcion" => "Situado en el conocido centro comercial Plaza Monarca, Cinepolis Plaza
            Monarca es un destino popular para los amantes del cine en Tijuana."],
            ["nombre" => "Cinemex Pacifico", "imagen" => "directory/cine9.jpg", "descripcion" => "Ubicado en el corazón de la ciudad, Cinemex 
            Pacifico es un lugar popular para disfrutar de las últimas películas en pantalla grande."],
        ],
        "hoteles" => [
            ["nombre" => "Hotel Extended Suites Tijuana Macroplaza", "imagen" => "directory/hotel1.jpg", "descripcion" => "Ofrece comodidades contemporáneas y una ubicación conveniente cerca de atracciones locales y centros comerciales."],
            ["nombre" => "Hotel Jardin", "imagen" => "directory/hotel2.jpg", "descripcion" => "Un encantador oasis en el centro de la ciudad, Hotel Jardín ofrece una atmósfera tranquila y servicios de calidad."],
            ["nombre" => "Hotel Astor", "imagen" => "directory/hotel3.jpg", "descripcion" => "El Hotel Astor ofrece una estancia elegante y confortable en el corazón de Tijuana, con habitaciones bien equipadas y servicios de calidad."],
            ["nombre" => "Baja Inn La Mesa", "imagen" => "directory/hotel4.jpg", "descripcion" => "Ofrece una estancia acogedora y económica en Tijuana, con habitaciones sencillas y servicios básicos. Ideal para viajeros con presupuesto limitado."],
            ["nombre" => "City Express Junior by Marriott Tijuana Otay", "imagen" => "directory/hotel5.jpg", "descripcion" => "Con habitaciones modernas y servicios prácticos, es una excelente opción para aquellos que buscan comodidad a un precio razonable."],
        ],
        "parques" => [
            ["nombre" => "Parque Morelos", "imagen" => "directory/parque1.png", "descripcion" => "Dedica una tarde para descubrir los aspectos más característicos de este enorme parque, 
            donde encontrarás desde espectáculos de marionetas y un zoológico hasta embarcaciones y una alberca."],
            ["nombre" => "Parque Teniente Guerrero", "imagen" => "directory/parque2.png", "descripcion" => "Un parque histórico con áreas verdes, esculturas y fuentes, ideal para dar un paseo relajante y disfrutar del ambiente tranquilo en el corazón de la ciudad."],
            ["nombre" => "Parque de la Amistad", "imagen" => "directory/parque3.jpg", "descripcion" => "Este parque representa la amistad entre México y Japón, con jardines japoneses, esculturas y espacios para relajarse y disfrutar del entorno."],
            ["nombre" => "Parque Nacional Constitución de 1857", "imagen" => "directory/parque4.webp", "descripcion" => "Este parque nacional ofrece una variedad de senderos que serpentean a través de bosques de pinos y áreas escénicas. 
            El sendero más popular es el que conduce al Pico El Águila, ofreciendo vistas panorámicas impresionantes."],
            ["nombre" => "Parque Teresita Paramo", "imagen" => "directory/parque5.webp", "descripcion" => "Adéntrate en la serenidad del Parque Teresita Paramo, donde la naturaleza y la tranquilidad se fusionan para ofrecerte un escape rejuvenecedor. ¡Explora este oasis verde y renueva tu espíritu!"],
        ],
        "plazas" => [
            ["nombre" => "Plaza Galerías Hipódromo", "imagen" => "directory/plaza1.jpg", "descripcion" => "Plaza Galerías Hipódromo es un destino de compras y entretenimiento con una amplia selección de tiendas de moda, restaurantes y actividades recreativas."],
            ["nombre" => "Plaza Paseo Chapultepec", "imagen" => "directory/plaza2.jpg", "descripcion" => "Plaza Paseo Chapultepec es una plaza elegante que ofrece una mezcla de tiendas de moda, restaurantes y cafeterías en un ambiente agradable y moderno."],
            ["nombre" => "Plaza Mundo Divertido", "imagen" => "directory/plaza3.jpg", "descripcion" => "Plaza Mundo Divertido combina un centro comercial con un parque de diversiones, ofreciendo tiendas, restaurantes y juegos mecánicos para toda la familia."],
            ["nombre" => "Plaza Las Brisas", "imagen" => "directory/plaza4.jpg", "descripcion" => "Plaza Las Brisas es un destino de compras y entretenimiento con una variedad de tiendas, restaurantes y actividades para todas las edades."],
            ["nombre" => "Plaza Carrousel", "imagen" => "directory/plaza5.jpg", "descripcion" => "Plaza Carrousel ofrece una amplia selección de tiendas, restaurantes y servicios en un ambiente cómodo y conveniente."],
        ],
        "restaurantes" => [
            ["nombre" => "Caesar's Restaurant", "imagen" => "directory/res1.jpg", "descripcion" => "Caesar's Restaurant es un lugar histórico conocido por ser el lugar de nacimiento de la ensalada César, ofreciendo una experiencia culinaria única y un ambiente clásico."],
            ["nombre" => "Telefónica Gastro Park", "imagen" => "directory/res2.jpeg", "descripcion" => "Telefónica Gastro Park es un espacio gastronómico que alberga una variedad de puestos de comida y camiones de comida gourmet, ofreciendo una experiencia culinaria diversa y emocionante."],
            ["nombre" => "Mision 19", "imagen" => "directory/res3.jpg", "descripcion" => "Mision 19 es un restaurante elegante que ofrece una experiencia culinaria sofisticada, con un enfoque en ingredientes locales y técnicas modernas."],
            ["nombre" => "Café La Especial", "imagen" => "directory/res4.jpg", "descripcion" => "Café La Especial es un restaurante clásico conocido por sus deliciosos desayunos y su ambiente acogedor, ofreciendo una selección de platillos mexicanos tradicionales y café de calidad."],
            ["nombre" => "Tacos El Franc", "imagen" => "directory/res5.webp", "descripcion" => "Tacos El Franc es un puesto de tacos popular que ofrece una variedad de tacos mexicanos auténticos, conocido por su carne asada y adobada."],
        ],
        "super" => [
            ["nombre" => "Walmart", "imagen" => "directory/merca1.jpg", "descripcion" => "Walmart es una cadena de supermercados internacional que ofrece una amplia variedad de productos alimenticios, artículos para el hogar, productos electrónicos y más, a precios competitivos."],
            ["nombre" => "Soriana", "imagen" => "directory/merca2.jpg", "descripcion" => "Soriana es una cadena de supermercados que ofrece una amplia selección de productos alimenticios, artículos para el hogar y otros productos de consumo, con un enfoque en la calidad y el servicio al cliente."],
            ["nombre" => "Calimax", "imagen" => "directory/merca3.jpg", "descripcion" => "Calimax es una cadena de supermercados regional que ofrece una amplia variedad de productos alimenticios frescos y envasados, así como otros productos de consumo, con un enfoque en la calidad y la frescura."],
            ["nombre" => "Ley Supermercados", "imagen" => "directory/merca4.jpg", "descripcion" => "Ley Supermercados es una cadena de supermercados que ofrece una amplia selección de productos alimenticios, artículos para el hogar, productos electrónicos y más, con un enfoque en la calidad y el servicio al cliente."],
            ["nombre" => "Comercial Mexicana", "imagen" => "directory/merca5.webp", "descripcion" => "Es una cadena de supermercados que ofrece una amplia variedad de productos alimenticios, productos para el hogar, ropa y más, con un enfoque en la calidad y la variedad."],
        ],
        "otros" => [
          ["nombre" => "El Trompo", "imagen" => "trompo1.png", "descripcion" => "Comprueba que aprender puede ser divertido en este complejo para toda la familia con cientos de juegos que 
          muestran el impacto de la ciencia y la tecnología modernas."],
          ["nombre" => "Cecut", "imagen" => "cecut1.png", "descripcion" => "Lleva a tu familia a descubrir el rico pasado de las Californias y a visitar exposiciones de arte, 
          jardines botánicos y un cine IMAX con forma de cúpula."],
          ["nombre" => "Avenida Revolución", "imagen" => "avrevolucion.jpg", "descripcion" => "Es un edificio muy bonito e histórico!!! antiguamente era un centro deportivo de Pelota vasca (Jai alai)."],
          ["nombre" => "Mullme", "imagen" => "mullme.jpg", "descripcion" => "En el Museo de la Lucha Libre Mexicana se exhibe una gran colección privada de objetos relacionados al mundo de la Lucha Libre, 
          con más de 9,000 artículos entre máscaras originales, tazas, cintos de campeonato, fotografías, llaveros, alcancías, historietas, 
          luchadores de plástico en diferentes poses y tamaños, los diferentes tipos de revistas especializadas al deporte del pancracio, y más."],
          ["nombre" => "Mercado El Popo", "imagen" => "mercado.jpg", "descripcion" => "Hay esponjas naturales, prensas de tortilla de madera, piedras para moler molcajete, piedra pómez y mucho más."],
          ["nombre" => "Catedral de Nuestra Señora de Guadalupe", "imagen" => "catedral.jpg", "descripcion" => "Esta es una iglesia católica clásica en el medio de Tijuana que atiende las necesidades de los habitantes locales."],
          ["nombre" => "Estadio Caliente", "imagen" => "estadio.jpg", "descripcion" => "Dicen que la afición a un equipo lo es todo, y los Xolos tienen eso, una afición que muere por ellos no importa que ganen o pierdan.
          Los partidos siempre son en la noche, pero si quieres vivir la fiesta de verdad, llega desde temprano, abre la cajuela de tu coche, saca el asador y 
          las cervezas y prepara tu carne, eso si, no olvides invitar a un monton de amigos. El estacionamiento es una fiesta por si misma."],
          ["nombre" => "Casino Caliente", "imagen" => "casino.jpg", "descripcion" => "Un casino de una franquicia muy publicitada que al encontrarse en la Avenida Revolución es una opción para divertirse .
          Ambiente propio de un casino y para jugar al entrar pides tu tarjeta."],
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
                  <a href="index.php"> <i class="fas fa-angle-right"></i> Inicio</a>
                  <a href="directory.php"> <i class="fas fa-angle-right"></i> Directorio </a>
                  <a href="activities.php"> <i class="fas fa-angle-right"></i> Actividades </a>
                  <a href="blog.php"> <i class="fas fa-angle-right"></i> Blog de Viajes</a>
                  <a href="descuentos.php"> <i class="fas fa-angle-right"></i> Ofertas y Descuentos</a>
                  <a href="quests.php"> <i class="fas fa-angle-right"></i> Recomendaciones</a>
               </div>

               <div class="box">
                  <h3>Sobre Nosotros</h3>
                  <!--<a href="#"> <i class="fas fa-angle-right"></i> Preguntas</a>
                  <a href="#"> <i class="fas fa-angle-right"></i> Acerca de</a-->
                  <a href="#"> <i class="fas fa-angle-right"></i> Politica de privacidad</a>
                  <a href="#"> <i class="fas fa-angle-right"></i> Terminos de uso</a>
               </div>

               <div class="box">
                  <h3>Contactos</h3>
                  <a href="#"> <i class="fas fa-phone"></i> +52 (664) 214 99 81 </a>
                  <a href="#"> <i class="fas fa-phone"></i> +52 (664) 873 84 93 </a>
                  <a href="#"> <i class="fas fa-envelope"></i> omar.garcia201@tectijuana.edu.mx </a>
                  <a href="#"> <i class="fas fa-envelope"></i> jesus.saguilan201@tectijuana.edu.mx </a>
                  <a href="#"> <i class="fas fa-envelope"></i> maria.ramos201@tectijuana.edu.mx </a>
                  <a href="#"> <i class="fas fa-map"></i> Tijuana, Baja californa, Mexico</a>
               </div>

               <div class="box">
                  <h3>Redes Sociales</h3>
                  <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                  <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                  <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                  <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
               </div>

         </div>

         <div class="credit"> Creado por <span>Private Studio</span> | ¡Todos los derechos reservados! </div>

      </section>

      <!-- termina la sección de pie de página  -->

      <!-- sweetalert cdn link  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   </body>
</html>
