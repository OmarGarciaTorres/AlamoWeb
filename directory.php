<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Directorio</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/directory.css">

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
         <a href="home.php" class="logo">
            <!-- Imagen PNG -->
            <img src="images/alamoicon.png" alt="AlamoIcon">
         </a>

         <div class="menu">
            <img src="images/alamomenu.png" alt="AlamoMenu">
            <div class="menu-content">
                  <a href="home.php" class="menu-item">Inicio</a>
                  <a href="places.php" class="menu-item">Directorio</a>
                  <a href="activities.php" class="menu-item">Actividades</a>
                  <a href="blog.php" class="menu-item">Blog de Viajes</a>
            </div>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->
      
      <!-- comienza la sección de directorio  -->

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>Directorio de Lugares Turisticos</h1>
      </div>

      <!-- termina la sección de directorio -->
      <div class="filter">
         <input type="text" id="search" placeholder="Buscar lugar...">
         <select id="filter">
                <option value="todos">Todos</option>
                <option value="cines">Cines</option>
                <option value="hoteles">Hoteles</option>
                <option value="parques">Parques y Playas</option>
                <option value="plazas">Plazas</option>
                <option value="restaurantes">Restaurantes</option>
                <option value="mercados">Super Mercados</option>
                <!-- Agrega más opciones de filtrado aquí -->
            </select>
      </div>

      <!-- inicio sobre la sección de lugares  -->      
      <main>
        <div class="card">
            <img src="images/parque1.png" alt="parque1">
            <h2>Parque Morelos</h2>
            <p>Dedica una tarde para descubrir los aspectos más característicos de este enorme parque, 
               donde encontrarás desde espectáculos de marionetas y un zoológico hasta embarcaciones y una alberca.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/trompo1.png" alt="trompo1">
            <h2>El Trompo</h2>
            <p>Comprueba que aprender puede ser divertido en este complejo para toda la familia con cientos de juegos que 
               muestran el impacto de la ciencia y la tecnología modernas.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/cecut1.png" alt="cecut1">
            <h2>Cecut</h2>
            <p>Lleva a tu familia a descubrir el rico pasado de las Californias y a visitar exposiciones de arte, 
               jardines botánicos y un cine IMAX con forma de cúpula.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/plazario.jpg" alt="plaza rio">
            <h2>Plaza Rio Tijuana</h2>
            <p>Este centro comercial tiene tiendas como Sephora, Apple Store, Starbucks y un cine enorme.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/avrevolucion.jpg" alt="avrevolucion">
            <h2>Avenida Revolución</h2>
            <p>Es un edificio muy bonito e histórico!!! antiguamente era un centro deportivo de Pelota vasca (Jai alai). </p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/mullme.jpg" alt="mullme">
            <h2>Mullme</h2>
            <p>En el Museo de la Lucha Libre Mexicana se exhibe una gran colección privada de objetos relacionados al mundo de la Lucha Libre, 
               con más de 9,000 artículos entre máscaras originales, tazas, cintos de campeonato, fotografías, llaveros, alcancías, historietas, 
               luchadores de plástico en diferentes poses y tamaños, los diferentes tipos de revistas especializadas al deporte del pancracio, y más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/mercado.jpg" alt="mercado">
            <h2>Mercado El Popo</h2>
            <p>Hay esponjas naturales, prensas de tortilla de madera, piedras para moler molcajete, piedra pómez y mucho más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/catedral.jpg" alt="catedral">
            <h2>Catedral de Nuestra Señora de Guadalupe</h2>
            <p>Esta es una iglesia católica clásica en el medio de Tijuana que atiende las necesidades de los habitantes locales.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/estadio.jpg" alt="estadio">
            <h2>Estadio Caliente</h2>
            <p>Dicen que la afición a un equipo lo es todo, y los Xolos tienen eso, una afición que muere por ellos no importa que ganen o pierdan.
               Los partidos siempre son en la noche, pero si quieres vivir la fiesta de verdad, llega desde temprano, abre la cajuela de tu coche, saca el asador y 
               las cervezas y prepara tu carne, eso si, no olvides invitar a un monton de amigos. El estacionamiento es una fiesta por si misma.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="card">
            <img src="images/casino.jpg" alt="casino">
            <h2>Casino Caliente</h2>
            <p>Un casino de una franquicia muy publicitada que al encontrarse en la Avenida Revolución es una opción para divertirse .
               Ambiente propio de un casino y para jugar al entrar pides tu tarjeta.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
      </main>
      <!-- termino sobre la sección de lugares  -->

      <!-- comienza la sección de pie de página  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>Enlaces</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> Inicio</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> Acerca De </a>
               <a href="package.php"> <i class="fas fa-angle-right"></i> Paquetes </a>
               <a href="book.php"> <i class="fas fa-angle-right"></i> Reserva</a>
            </div>

            <div class="box">
               <h3>Sobre Nosotros</h3>
               <a href="#"> <i class="fas fa-angle-right"></i> Preguntas</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Acerca de</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Politica de privacidad</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Terminos de uso</a>
            </div>

            <div class="box">
               <h3>Contacto</h3>
               <a href="#"> <i class="fas fa-phone"></i> 6642149981 </a>
               <a href="#"> <i class="fas fa-phone"></i> 6648738493 </a>
               <a href="#"> <i class="fas fa-envelope"></i> omar.garcia201@tectijuana.edu.mx </a>
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

      <!-- termina la sección de pie de página -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

   </body>
</html>