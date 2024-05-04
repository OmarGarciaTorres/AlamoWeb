<?php

$db_name = 'mysql:host=localhost;dbname=book_db';
$db_user_name = 'root';
$db_user_pass = '';

$conn = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $characters_lenght = strlen($characters);
   $random_string = '';
   for($i = 0; $i < 20; $i++){
      $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
   }
   return $random_string;
}

if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $insert_book = $conn->prepare("INSERT INTO `book_form`(id, name, email, phone, address, location, guests, arrivals, leaving) VALUES(?,?,?,?,?,?,?,?,?)");
   $insert_book->execute([$id, $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

   $success_msg[] = 'Datos Registrados, en un momento seras redireccionado!'; 

}

?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Reserva</title>

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

      <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
         <h1>Recomendaciones</h1>
      </div>

      <!-- comienza la sección de reserva  -->

      <section class="booking">

         <h1 class="heading-title">Datos Personales</h1>

         <form action="" method="post" class="book-form">
            
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
                  <input type="text" placeholder="como te identificas" maxlength="20" name="gender">
               </div>
                
                <!-- intereses y preferencias -->
                <div class="question">
                    <label for="interests">¿Qué tipo de actividades prefieres durante tus viajes? (Selecciona todas las que apliquen) :</label><br>
                    <input type="checkbox" id="monuments" name="interests[]" value="beach">
                    <label for="monuments">Visitar monumentos históricos</label><br>
                    <input type="checkbox" id="gastronomy" name="interests[]" value="culture">
                    <label for="gastronomy">Disfrutar de la gastronomía local</label><br>
                    <input type="checkbox" id="sports" name="interests[]" value="food">
                    <label for="sports">Practicar deportes acuáticos</label><br>
                    <input type="checkbox" id="nature" name="interests[]" value="beach">
                    <label for="nature">Explorar la naturaleza y hacer senderismo</label><br>
                    <input type="checkbox" id="culture" name="interests[]" value="culture">
                    <label for="culture">Asistir a eventos culturales y festivales</label><br>
                    <input type="checkbox" id="markets" name="interests[]" value="food">
                    <label for="markets">Realizar compras y recorrer mercados locales</label><br>
                </div>
            </div>
            <input type="submit" value="enviar" class="btn" name="send">

         </form>
      </section>

      <!-- termina la sección de reserva  -->

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

      <!-- enlace de archivo js personalizado  -->
      <script src="js/script.js"></script>

      <?php
      if(isset($success_msg)){
         foreach($success_msg as $success_msg){
            echo '<script>swal("'.$success_msg.'", "", "success");</script>';
         }
      }
      ?>
   </body>
</html>
