<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Actividades</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/style.css">

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

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>Actividades</h1>
      </div>

      <!-- comienza la sección de paquetes  -->

      <section class="packages">

         <h1 class="heading-title">las mejores actividades para hacer</h1>

         <div class="box-container">

         <div class="box">
               <div class="image">
                  <img src="images/image8.png" alt="">
               </div>
               <div class="content">
                  <h3>Escalada en el Cerro Colorado</h3>
                  <p>Ven y desafía tus habilidades escalando las rocas</p>
                  <a href="" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
               <img src="images/image9.png" alt="">
               </div>
               <div class="content">
                  <h3>Campamento en la Sierra de Juárez</h3>
                  <p>Disfruta de la naturaleza y acampa bajo las estrellas</p>
                  <a href="" class="btn">ver mas</a>
               </div>
            </div>
            
            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Tour gastronómico por la ciudad</h3>
                  <p> Embárcate en un recorrido culinario por Tijuana</p>
                  <a href="" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
               <img src="images/image10.png" alt="">
               </div>
               <div class="content">
                  <h3>Visita al Parque Morelos</h3>
                  <p>Diviértete en este parque urbano!</p>
                  <a href="" class="btn">ver mas</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
               <img src="images/image11.png" alt="">
               </div>
               <div class="content">
                  <h3>Recorrido por la Zona Centro</h3>
                  <p>Sumérgete en la historia y la cultura de Tijuana!</p>
                  <a href="" class="btn">ver mas</a>
               </div>
            </div>

           

            <div class="box">
               <div class="image">
               <img src="images/image12.png" alt="">
               </div>
               <div class="content">
                  <h3>Surf en Playas de Tijuana</h3>
                  <p>Si te apasiona el surf, visita las Playas de Tijuana .</p>
                  <a target="_blank" href="" class="btn">ir</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
               <img src="images/image13.png" alt="">
               </div>
               <div class="content">
                  <h3>Tour por la frontera con San Diego</h3>
                  <p>Aprovecha la ubicación fronteriza de Tijuana.</p>
                  <a target="_blank" href="" class="btn">ir</a>
               </div>
            </div>

         </div>

         <div class="load-more"><span class="btn">ver mas actividades</span></div>

      </section>

      <!-- termina la sección de paquetes  -->
            <!-- empieza la reseña de usuarios  -->

            <section class="reviews">

<h1 class="heading-title"> Proximos eventos </h1>

<div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
      <h3>Tijuana Innovadora</h3>
         <p> Tijuana Innovadora es un encuentro que reúne a líderes, emprendedores, artistas y visionarios para explorar ideas innovadoras que impulsen el desarrollo económico, social y cultural de la región.</p>
         
         <span>Tienes que ir!</span>
        
      </div>

      <div class="swiper-slide slide">
      <h3>Torneo Internacional de Surf en Playas de Tijuana</h3>
         <p>Del 8 al 10 de agosto, se realizará el Torneo Internacional de Surf en Playas de Tijuana, donde surfistas de todo el mundo competirán en diferentes categorías. El evento promete emocionantes competencias y actividades para espectadores.</p>
         
         <span>Tienes que verlo!</span>
        
      </div>

      <div class="swiper-slide slide">
      <h3>Concierto de Café Tacvba en el Estadio Caliente</h3>
         <p>Lo mejor de lo mejor!</p>
         
         <span>Los boletos se acaban!</span>
         
      </div>

      <div class="swiper-slide slide">
      <h3>Exposiciones en el Centro Cultural Tijuana (CECUT)</h3>
         <p>El CECUT es un centro cultural que alberga exposiciones de arte, conciertos, obras de teatro, conferencias y eventos especiales durante todo el año.</p>
         
         <span>CECUT</span>
        
      </div>

      <div class="swiper-slide slide">
      <h3>Festival Internacional de Cine de Tijuana (FIC Tijuana)</h3>
         <p> Este festival de cine ofrece proyecciones de películas nacionales e internacionales, así como mesas redondas, talleres y eventos especiales relacionados con la industria cinematográfica.</p>
         
         <span>El cine es lo mejor!</span>
        
      </div>

   </div>

</div>

</section>

<!-- termina la reseña de usuarios -->

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

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

   </body>
</html>