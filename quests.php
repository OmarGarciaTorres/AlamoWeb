<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Intereses | Alamo Web</title>

      <!-- enlace css deslizador  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- fuente impresionante enlace cdn  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- enlace de archivo css personalizado  -->
      <!-- <link rel="stylesheet" href="css/style.css"> -->
      <link rel="stylesheet" href="css/quests.css">


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
         <h1>Encuesta</h1>
      </div>

      <!-- comienza la sección de encuesta  -->
      <section class="booking">
         <h1 class="heading-title">Dejanos recomendarte lugares!</h1>
               <!-- Encuesta -->
               <form id="recommendationForm" action="quests-form.php" method="POST" class="book-form">
                  <div class="flex">
                     <!-- datos personales -->
                     <div class="inputBox">
                        <span>Nombre :</span>
                        <input type="text" placeholder="ingresa tu nombre" maxlength="30" name="name">
                     </div>
                     <div class="inputBox">
                        <span>Edad :</span>
                        <input type="number" min="1" max="99" maxlength="2" placeholder="ingresa tu edad" name="years">
                     </div>
                     <div class="inputBox">
                        <span>Genero :</span>
                        <select id="genero" name="genero" required>
                           <option value="masculino">Masculino</option>
                           <option value="femenino">Femenino</option>
                           <option value="otro">Otro</option>
                        </select>
                     </div>
                     <div class="inputBox">
                        <span>Correo Electronico :</span>
                        <input type="email" placeholder="ingresa tu correo" name="email">
                     </div>
                     <div class="inputBox">
                        <span>Numero de Telefono :</span>
                        <input type="tel" placeholder="ingresa tu numero de telefono" pattern="[0-9]{10}" name="phone">
                     </div>
                     <div class="inputBox">
                        <span>¿Eres de méxico o vienes fuera del país? :</span>
                        <select id="from" name="from" required>
                           <option value="mx">Soy de México</option>
                           <option value="other">Vengo de otro país</option>
                           <option value="nocontest">Prefiero no contestar</option>
                        </select>
                     </div>
                     <div class="inputBox">
                        <span>¿Cuál es tu principal motivo para visitar Tijuana? :</span>
                        <select id="visittj" name="visittj" required>
                           <option value="turism">Turismo</option>
                           <option value="busines">Negocios</option>
                           <option value="events">Eventos especiales</option>
                           <option value="other">Otros</option>
                        </select>
                     </div>
                     <div class="inputBox">
                        <span>¿Has visitado Tijuana anteriormente? :</span>
                        <select id="visit" name="visit" required>
                           <option value="si">Si</option>
                           <option value="no">No</option>
                           <option value="no me acuerdo">No me acuerdo</option>
                        </select>
                     </div>
                     <div class="inputBox">
                        <span>¿Cuáles son tus pasatiempos? :</span>
                        <select id="activities" name="activities" required>
                           <option value="deporte">Practicar deporte</option>
                           <option value="paseo">Ir de paseo</option>
                           <option value="excursion">Ir de excursiones</option>
                           <option value="leer">Leer</option>
                           <option value="amigos">Salir con amigos</option>
                           <option value="tv">Ver la TV</option>
                           <option value="others">Otros</option>
                        </select>
                     </div>
                     <div class="interests-container">
                        <label for="interests">Selecciona tus intereses:</label>
                        <input type="checkbox" id="beach" name="interests[]" value="cines">
                        <label for="cines">Cines</label>
                        <input type="checkbox" id="museum" name="interests[]" value="hoteles">
                        <label for="hoteles">Hoteles</label>
                        <input type="checkbox" id="park" name="interests[]" value="parques">
                        <label for="parques">Parques</label>
                        <input type="checkbox" id="park" name="interests[]" value="plazas">
                        <label for="plazas">Plazas</label>
                        <input type="checkbox" id="park" name="interests[]" value="restaurantes">
                        <label for="restaurantes">Restaurantes</label>
                        <input type="checkbox" id="park" name="interests[]" value="super">
                        <label for="super">Super Mercados</label>
                        <input type="checkbox" id="park" name="interests[]" value="otros">
                        <label for="otros">Otros</label>
                     </div>
                  </div>
                  <input type="submit" value="Obtener Recomendaciones" class="btn" name="send">
               </form>
      </section>
      <!-- termina la sección de encuesta  -->

      <script src="js/quests.js"></script>
      
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

      <!-- sweetalert cdn link  -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

      <!-- enlace js deslizador  -->
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   </body>
</html>

