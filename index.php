<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inicio | Alamo Web</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <link rel="stylesheet" href="css/index.css">

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
                  <a href="home.php" class="menu-item">Inicio</a>
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

      <!-- comienza la sección de inicio  -->

      <section class="home">

         <div class="swiper home-slider">

            <div class="swiper-wrapper">

               <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                  <div class="content">
                     <span>Explora, Descubre, Viaja, Disfruta</span>
                     <h3>Descubre lugares en tijuana</h3>
                     <a href="directory.php" class="btn">Descubrir ahora</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                  <div class="content">
                     <span>Explora, Descubre, Viaja, Disfruta</span>
                     <h3>Comida</h3>
                     <a href="directory.php" class="btn">Descubrir ahora</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                  <div class="content">
                     <span>Explora, Descubre, Viaja, Disfruta</span>
                     <h3>Parques</h3>
                     <a href="directory.php" class="btn">Descubrir ahora</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
                  <div class="content">
                     <span>Explora, Descubre, Viaja, Disfruta</span>
                     <h3>Playas</h3>
                     <a href="directory.php" class="btn">Descubrir ahora</a>
                  </div>
               </div>
               
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

         </div>

      </section>

      <!-- termina la sección de inicio -->

      <!-- comienza la sección de servicios y visualización del contenido  -->

      <section class="services">

         <h1 class="heading-title"> Nuestros servicios</h1>

         <div class="box-container">

            <div class="box">
               <a href="directory.php"><img src="images/directorio-img.png" alt=""></a>
               <h3>Directorio</h3>
            </div>

            <div class="box">
               <a href="activities.php"><img src="images/actividad-img.png" alt=""></a>
               <h3>Actividades</h3>
            </div>

            <div class="box">
               <a href="blog.php"><img src="images/blog-img.png" alt=""></a>
               <h3>Blog</h3>
            </div>

            <div class="box">
               <a href="descuentos.php"><img src="images/descuento-img.png" alt=""></a>
               <h3>Ofertas y Descuentos</h3>
            </div>

            <div class="box">
               <a href="quests.php"><img src="images/recomendacion-img.png" alt=""></a>
               <h3>Recomendaciones</h3>
            </div>

            <!-- <div class="box">
               <a href="package.php"><img src="images/chatbot-img.png" alt=""></a>
               <h3>ChatBot</h3>
            </div>

            <div class="box">
               <a href="package.php"><img src="images/descuento-img.png" alt=""></a>
               <h3>Descuentos</h3>
            </div>

            <div class="box">
               <a href="package.php"><img src="images/resena-img.png" alt=""></a>
               <h3>Reseñas</h3>
            </div> -->

         </div>

      </section>

      <!-- termina la sección de servicios y visualización del contenido -->

      <!-- inicio sobre la sección de about  -->

      <h1 class="heading-title"> Información </h1>

      <section class="home-about">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>Acerca de Tijuana</h3>
            <p>Tijuana B.C. es una ciudad fronteriza de México, al sur de California. Su desbordante calle principal, la Avenida Revolución, 
               está repleta de tiendas de recuerdos y animados bares. Entre los sitios icónicos se incluyen el palacio Jai Alai Frontón y el 
               Centro Cultural Tijuana, un moderno complejo cultural en el distrito Zona Río. La ciudad tiene estadios donde se presentan eventos de lucha libre, 
               mientras que la ciudad de Rosarito tiene playas de arena.</p>
            <!--<a href="about.php" class="btn">Leer más</a>-->
         </div>

      </section>

      <!-- termino sobre la sección de about -->

      <!-- seccion sobre informacion sobre la pagina -->

      <section class="home-about">

         <div class="image">
            <img src="images/sobre-img.jpg" alt="">
         </div>

         <div class="content">
            <h3>¿Qué encontraras aqui?</h3>
            <p>Se trata de un sitio web dedicado para los turistas o personas en general que deseen conocer mas y visitar diversos lugares de la ciudad de Tijuana, B.C. 
            Este sitio web proporcionará a los clientes de Alamo información detallada sobre los mejores lugares turísticos de la ciudad, actividades para hacer, 
            restaurantes recomendados y eventos locales.  Podrán navegar fácilmente por el sitio para encontrar recomendaciones personalizadas según sus intereses y 
            preferencias. Además, podrán dejar reseñas y calificaciones, lo que ayudará a otros viajeros a tomar decisiones informadas.</p>
         </div>

      </section>

      <!-- seccion sobre alamo rent a car -->

      <h1 class="heading-title"> Acerca de Alamo Rent a Car</h1>

      <section class="home-about">

         <div class="image">
            <img src="images/about-alamo-img1.jpg" alt="">
         </div>

         <div class="content">
            <h3>🌐 Acerca de Nosotros</h3>
            <p>Alamo Rent a Car es la compañía de automóviles más importante de América del Norte, prestando los mejores servicios a los viajeros que visitan este continente. 
               La empresa es la pionera en el concepto de kilometraje ilimitado gratuito, el que le dio un espacio representativo en este tipo de industria. 
               Además la empresa se distingue por introducir constantemente novedades y mejoras a la industria. Los seguros completos, por ejemplo fueron una iniciativa pionera de Alamo. 
               La empresa está presente en algunos de los destinos más turísticos del mundo, en ciudades de América Latina, Asia, Estados Unidos, México, Canadá y Caribe. 
               El principal objetivo de Alamo Rent a Car es ofrecer a sus clientes una experiencia positiva para la compra, además de favorecerlos con tarifas bastantes accesibles.</p>
         </div>

      </section>

      <!--Bot-->
      <div class="chat-popup" id="chatPopup">
        <div class="chat-header">
            <div class="header-content">
                <img src="/images/favicon-32x32.png" alt="Company Logo" class="logo">
                <h2>Asistente Alamo Web</h2>
                <span class="close" onclick="closeChat()">&#x2212;</span>
            </div>
            <p>Espero que encuentres la respuesta a tus dudas.</p>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="message bot-message">¡Hola! 👋 Si necesitas ayuda, siempre estamos aquí.</div>
            <div class="frequent-questions">
                <p>Preguntas Frecuentes:</p>
                <button onclick="askQuestion('¿Cuáles son los principales lugares turísticos para visitar en Tijuana?')">¿Cuáles son los principales lugares turísticos para visitar en Tijuana?</button>
                <button onclick="askQuestion('¿Qué actividades recreativas puedo hacer en Tijuana durante el fin de semana?')">¿Qué actividades recreativas puedo hacer en Tijuana durante el fin de semana?</button>
                <button onclick="askQuestion('¿Cuál es la mejor manera de llegar a la frontera entre Tijuana y San Diego?')">¿Cuál es la mejor manera de llegar a la frontera entre Tijuana y San Diego?</button>
                <button onclick="askQuestion('¿Cuáles son los restaurantes más populares de Tijuana y qué tipo de comida ofrecen?')">¿Cuáles son los restaurantes más populares de Tijuana y qué tipo de comida ofrecen?</button>
                <button onclick="askQuestion('¿Cuál es la mejor época del año para visitar Tijuana en términos de clima y eventos?')">¿Cuál es la mejor época del año para visitar Tijuana en términos de clima y eventos?</button>
                <button onclick="askQuestion('¿Cuáles son las opciones de transporte público disponibles en Tijuana?')">¿Cuáles son las opciones de transporte público disponibles en Tijuana?</button>
                <button onclick="askQuestion('¿Dónde puedo obtener información sobre la historia y cultura de Tijuana?')">¿Dónde puedo obtener información sobre la historia y cultura de Tijuana?</button>
                <button onclick="askQuestion('¿Qué medidas de seguridad debo tomar al visitar Tijuana como turista?')">¿Qué medidas de seguridad debo tomar al visitar Tijuana como turista?</button><br>
            </div>
         </div>
        <div class="chat-footer">
            <input type="text" id="userInput" placeholder="Escribe tu mensaje..." onkeypress="return checkEnter(event)">
            <button onclick="sendMessage()">&#9658;</button>
        </div>
      </div>
      <div class="chat-bubble" onclick="openChat()">
         <img src="/images/chat.png" alt="Chat Icon">
      </div>

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

      <!-- termina la sección de pie de página -->

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

      <!--Script de bot-->
      <script src="js/bot.js"></script>

   </body>
</html>