<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ofertas y descuentos</title>

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
                  <a href="directory.php" class="menu-item">Directorio</a>
                  <a href="activities.php" class="menu-item">Actividades</a>
                  <a href="blog.php" class="menu-item">Blog de Viajes</a>
            </div>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->
      
      <!-- comienza la sección de directorio  -->

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>Ofertas y descuentos</h1>
      </div>
      
      <!-- inicio sobre la sección de lugares  --> 
      <!-- descuentos  -->     
      <main>
        <div class="lugar" data-categoria="Parques">
        <img src="images/directory/parque10.jpg" alt="parque10">
            <h2>Paquete Familiar Divertido en Parque Mundo Divertido</h2>
            <p>Disfruta de un día lleno de diversión en familia con nuestro paquete especial que incluye entradas al parque de diversiones, acceso a todas las atracciones y descuentos en alimentos y bebidas.</p>
            <a href="/submodules/directory/parque10.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza10.jpg" alt="plaza10">
            <h2>Noche de Cine en Plaza Río Tijuana</h2>
            <p>Ven a Plaza Río Tijuana y disfruta de una noche de cine en nuestro cine de última generación. Con esta promoción, obtén descuentos en las entradas y combos de palomitas y refrescos para una experiencia cinematográfica inolvidable.</p>
            <a href="/submodules/directory/plaza10.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res3.jpg" alt="rest3">
            <h2>Cena Romántica en Mision 19</h2>
            <p>Sorprende a tu pareja con una cena romántica en Mision 19, uno de los restaurantes más elegantes de Tijuana. Con nuestra promoción especial, disfruta de un exquisito menú de degustación a un precio reducido.</p>
            <a href="/submodules/directory/restaurante3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza4.jpg" alt="plaza4">
            <h2>Día de Compras en Plaza Las Brisas</h2>
            <p>Ven a Plaza Las Brisas y aprovecha nuestras ofertas exclusivas de compras. Con descuentos en una amplia selección de tiendas, esta promoción es perfecta para renovar tu guardarropa o encontrar ese artículo especial que tanto deseas. </p>
            <a href="/submodules/directory/plaza4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res4.jpg" alt="rest4">
            <h2>Desayuno Mexicano en Café La Especial</h2>
            <p>Disfruta de un auténtico desayuno mexicano en Café La Especial. Con nuestra promoción, disfruta de deliciosos chilaquiles, huevos rancheros y café recién hecho a un precio especial de desayuno.</p>
            <a href="/submodules/directory/restaurante4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res2.jpeg" alt="rest2">
            <h2>Tour Gastronómico en Telefónica Gastro Park:</h2>
            <p>Únete a nuestro tour gastronómico en Telefónica Gastro Park y descubre una variedad de sabores culinarios únicos. Con esta promoción, obtén descuentos en platos seleccionados de nuestros puestos de comida gourmet.</p>
            <a href="/submodules/directory/restaurante2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res7.jpg" alt="rest7">
            <h2>Tarde de Tapas en La Justina</h2>
            <p>Relájate y disfruta de una tarde de tapas en La Justina. Con nuestra promoción especial, prueba una variedad de tapas españolas auténticas y acompáñalas con una selección de vinos a precios reducidos.</p>
            <a href="/submodules/directory/restaurante7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res8.jpg" alt="rest8">
            <h2>Fiesta de Tacos en Tacos El Gordo</h2>
            <p>Ven a Tacos El Gordo y únete a nuestra fiesta de tacos. Con esta promoción, disfruta de una amplia variedad de tacos auténticos a precios especiales y descubre por qué somos el lugar favorito de los amantes de los tacos en Tijuana.</p>
            <a href="/submodules/directory/restaurante8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res6.webp" alt="rest6">
            <h2>Noche de Sushi en La Querencia</h2>
            <p>Deléitate con una noche de sushi en La Querencia. Con nuestra promoción especial, disfruta de una selección de rollos de sushi frescos y creativos a precios promocionales, acompañados de sake o cerveza japonesa.</p>
            <a href="/submodules/directory/restaurante6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque8.jpg" alt="parque8">
            <h2>Picnic en Parque de las Americas</h2>
            <p>Organiza un día especial al aire libre con un picnic en el pintoresco Parque de las Américas. Con nuestra promoción, recibe un kit de picnic especial que incluye una cesta de picnic, mantas y una selección de deliciosos bocadillos y bebidas. </p>
            <a href="/submodules/directory/parque8.php" class="btn">Mas detalles</a>
        </div> 
      </main>
      <!-- termino sobre la sección de lugares  -->

      <!-- comienza la sección de pie de página  -->

      <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>Enlaces</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> Inicio</a>
               <a href="directory.php"> <i class="fas fa-angle-right"></i> Directorio </a>
               <a href="activities.php"> <i class="fas fa-angle-right"></i> Actividades </a>
               <a href="blog.php"> <i class="fas fa-angle-right"></i> Blog de Viajes</a>
            </div>

            <div class="box">
               <h3>Sobre Nosotros</h3>
               <!--<a href="#"> <i class="fas fa-angle-right"></i> Preguntas</a>
               <a href="#"> <i class="fas fa-angle-right"></i> Acerca de</a>-->
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

      <!-- termina la sección de pie de página -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      
      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>
      <script src="js/filtrar.js"></script>
      <script src="js/busqueda.js"></script>
   </body>
</html>