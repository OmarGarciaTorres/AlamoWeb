<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Directorio de Lugares</title>

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
                  <a href="descuentos.php" class="menu-item">Ofertas y Descuentos</a>
                  <a href="quests.php" class="menu-item">Recomendaciones</a>
            </div>
         </div>
         <div id="menu-btn" class="fas fa-bars"></div>

      </section>

      <!-- termina la sección del encabezado -->
      
      <!-- comienza la sección de directorio  -->

      <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
         <h1>Directorio de Lugares Turisticos</h1>
      </div>

      <div class="filter">
         <input type="text" id="busqueda" placeholder="Buscar lugar..." onkeyup="buscarLugar(event)">
         <select class="categoria-select" onchange="filtrarLugares(this.value)">>
                <option value="Todos">Todos</option>
                <option value="Cines">Cines</option>
                <option value="Hoteles">Hoteles</option>
                <option value="Parques">Parques</option>
                <option value="Plazas">Plazas</option>
                <option value="Restaurantes">Restaurantes</option>
                <option value="Mercados">Super Mercados</option>
                <!-- Agrega más opciones de filtrado aquí -->
            </select>
      </div>

      <!-- inicio sobre la sección de lugares  --> 
      <!-- parques  -->     
      <main>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque1.png" alt="parque1">
            <h2>Parque Morelos</h2>
            <p>Dedica una tarde para descubrir los aspectos más característicos de este enorme parque, 
               donde encontrarás desde espectáculos de marionetas y un zoológico hasta embarcaciones y una alberca.</p>
            <a href="/submodules/directory/parque1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque2.png" alt="parque2">
            <h2>Parque Teniente Guerrero</h2>
            <p>Un parque histórico con áreas verdes, esculturas y fuentes, ideal para dar un paseo relajante y disfrutar del ambiente tranquilo en el corazón de la ciudad.</p>
            <a href="/submodules/directory/parque2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque3.jpg" alt="parque3">
            <h2>Parque de la Amistad</h2>
            <p>Este parque representa la amistad entre México y Japón, con jardines japoneses, esculturas y espacios para relajarse y disfrutar del entorno.</p>
            <a href="/submodules/directory/parque3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque4.webp" alt="parque4">
            <h2>Parque Nacional Constitución de 1857</h2>
            <p>Este parque nacional ofrece una variedad de senderos que serpentean a través de bosques de pinos y áreas escénicas. 
               El sendero más popular es el que conduce al Pico El Águila, ofreciendo vistas panorámicas impresionantes. </p>
               <a href="/submodules/directory/parque4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque5.webp" alt="parque5">
            <h2>Parque Teresita Paramo</h2>
            <p>Adéntrate en la serenidad del Parque Teresita Paramo, donde la naturaleza y la tranquilidad se fusionan para ofrecerte un escape rejuvenecedor. ¡Explora este oasis verde y renueva tu espíritu!</p>
            <a href="/submodules/directory/parque5.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque6.jpg" alt="parque6">
            <h2>Parque Buena Vista</h2>
            <p>Descubre la serenidad y la belleza del Parque Buena Vista, donde la naturaleza y la tranquilidad te esperan para ofrecerte un escape rejuvenecedor. ¡Explora este oasis verde y renueva tu espíritu!</p>
            <a href="/submodules/directory/parque6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque7.jpg" alt="parque7">
            <h2>Parque el Valle</h2>
            <p>Embárcate en una aventura emocionante en el Parque el Valle, donde la naturaleza y la diversión se combinan para ofrecerte experiencias inolvidables.</p>
            <a href="/submodules/directory/parque7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque8.jpg" alt="parque8">
            <h2>Parque de las Americas</h2>
            <p>Sumérgete en la cultura y la diversión en el Parque de las Américas, donde la historia y el entretenimiento se combinan para ofrecerte una experiencia única.</p>
            <a href="/submodules/directory/parque8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque9.jpg" alt="parque9">
            <h2>Parque de la Espiritualidad</h2>
            <p>Encuentra paz y serenidad en el Parque de la Espiritualidad, donde la naturaleza y la espiritualidad se unen para ofrecerte una experiencia única. ¡Explora este refugio tranquilo y encuentra inspiración en su belleza natural!</p>
            <a href="/submodules/directory/parque9.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Parques">
            <img src="images/directory/parque10.jpg" alt="parque10">
            <h2>Mundo Divertido</h2>
            <p>Embárcate en una aventura emocionante en Mundo Divertido, donde la diversión y la emoción te esperan en cada esquina. ¡Descubre la alegría de un día lleno de risas y entretenimiento para toda la familia!</p>
            <a href="/submodules/directory/parque10.php" class="btn">Mas detalles</a>
        </div>
      <!-- parques  -->  
      
      <!-- cines  -->
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine1.jpg" alt="cine1">
            <h2>Cinemex Mundo Divertido</h2>
            <p>Con una amplia selección de películas, 
             comodidades modernas y actividades emocionantes, ofrece una experiencia 
             cinematográfica inolvidable para toda la familia.</p>
            <a href="/submodules/directory/cine1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine2.webp" alt="cine2">
            <h2>Cinemex Peninsula</h2>
            <p>Con una amplia selección de películas, servicios premium y comodidades de primera clase, 
            es el destino perfecto para disfrutar del cine en la península.</p>
            <a href="/submodules/directory/cine2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine3.png" alt="cine3">
            <h2>Cinemex Pavilion</h2>
            <p>Destino cinematográfico de referencia en Tijuana, conocido por su ambiente acogedor y su 
            compromiso con ofrecer lo mejor en entretenimiento audiovisual.</p>
            <a href="/submodules/directory/cine3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine4.jpg" alt="cine4">
            <h2>Cinemex Macroplaza</h2>
            <p>Entretenimiento de primer nivel en Tijuana, ofreciendo una experiencia cinematográfica excepcional para toda la familia.</p>
            <a href="/submodules/directory/cine4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine5.jpg" alt="cine5">
            <h2>Cinemex Loma Bonita</h2>
            <p>Loma Bonita ofrece una experiencia cinematográfica de primer nivel en Tijuana, con instalaciones modernas
                 y una amplia gama de servicios para garantizar la comodidad y el entretenimiento de sus visitantes.</p>
            <a href="/submodules/directory/cine5.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine6.jpg" alt="cine6">
            <h2>Cinemex Plaza Alameda</h2>
            <p>Alameda es un destino cinematográfico de referencia en Tijuana, conocido por su 
                ambiente acogedor y su compromiso con ofrecer lo mejor en sus instalaciones y ambiente familiar.</p>
            <a href="/submodules/directory/cine6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine7.jpg" alt="cine7">
            <h2>Cinepolis Plaza Rio</h2>
            <p>Cinepolis Plaza Rio ofrece una experiencia cinematográfica 
                inigualable en Tijuana, con una amplia selección de películas, servicios premium y comodidades modernas.</p>
            <a href="/submodules/directory/cine7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine8.jpg" alt="cine8">
            <h2>Cinemex Plaza Minarete</h2>
            <p> Minarete ofrece una experiencia cinematográfica de primer nivel en Tijuana, con instalaciones modernas y 
                una amplia gama de servicios para garantizar la comodidad y el entretenimiento de sus visitantes</p>
            <a href="/submodules/directory/cine8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine9.jpg" alt="cine9">
            <h2>Cinemex Pacifico</h2>
            <p>Ubicado en el corazón de la ciudad, Cinemex 
                Pacifico es un lugar popular para disfrutar de las últimas películas en pantalla grande.</p>
            <a href="/submodules/directory/cine9.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Cines">
            <img src="images/directory/cine10.jpg" alt="cine10">
            <h2>Cinepolis Plaza Monarca</h2>
            <p> Situado en el conocido centro comercial Plaza Monarca, Cinepolis Plaza
                Monarca es un destino popular para los amantes del cine en Tijuana. </p>
            <a href="/submodules/directory/cine10.php" class="btn">Mas detalles</a>
        </div>
      <!-- cines  -->

      <!-- hoteles  -->
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel1.jpg" alt="hotel1">
            <h2>Hotel Extended Suites Tijuana Macroplaza</h2>
            <p>Ofrece comodidades contemporáneas y una ubicación conveniente cerca de atracciones locales y centros comerciales.</p>
            <a href="/submodules/directory/hotel1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel2.jpg" alt="hotel2">
            <h2>Hotel Jardin</h2>
            <p>Un encantador oasis en el centro de la ciudad, Hotel Jardín ofrece una atmósfera tranquila y servicios de calidad.</p>
            <a href="/submodules/directory/hotel2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel3.jpg" alt="hotel3">
            <h2>Hotel Astor</h2>
            <p>El Hotel Astor ofrece una estancia elegante y confortable en el corazón de Tijuana, con habitaciones bien equipadas y servicios de calidad. </p>
            <a href="/submodules/directory/hotel3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel4.jpg" alt="hotel4">
            <h2>Baja Inn La Mesa</h2>
            <p>Ofrece una estancia acogedora y económica en Tijuana, con habitaciones sencillas y servicios básicos. Ideal para viajeros con presupuesto limitado.</p>
            <a href="/submodules/directory/hotel4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel5.jpg" alt="hotel5">
            <h2>City Express Junior by Marriott Tijuana Otay</h2>
            <p>Con habitaciones modernas y servicios prácticos, es una excelente opción para aquellos que buscan comodidad a un precio razonable.</p>
            <a href="/submodules/directory/hotel5.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel6.jpg" alt="hotel6">
            <h2>Sleep Inn Tijuana</h2>
            <p>Con una ubicación estratégica cerca de la frontera con Estados Unidos, Sleep Inn Tijuana ofrece una estancia confortable y conveniente para viajeros de negocios. </p>
            <a href="/submodules/directory/hotel6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel7.jpg" alt="hotel7">
            <h2>Gamma Tijuana</h2>
            <p>Con habitaciones elegantes, servicios de calidad y atención personalizada, este hotel es ideal tanto para viajeros de negocios como para turistas.</p>
            <a href="/submodules/directory/hotel7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel8.jpg" alt="hotel8">
            <h2>One Tijuana Otay</h2>
            <p>Con habitaciones modernas, desayuno de cortesía y una ubicación estratégica cerca del aeropuerto y de importantes centros de negocios, este hotel es una excelente opción para estancias de negocios</p>
            <a href="/submodules/directory/hotel8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel9.jpg" alt="hotel9">
            <h2>City Express</h2>
            <p>Ofrece una experiencia de alojamiento contemporánea y elegante en una ubicación privilegiada en Tijuana. Con habitaciones modernas, instalaciones bien equipadas y servicios de alta calidad</p>
            <a href="/submodules/directory/hotel9.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Hoteles">
            <img src="images/directory/hotel10.jpg" alt="hotel10">
            <h2>Hotel Frontiere</h2>
            <p>Con un encanto tradicional mexicano, habitaciones cómodas y servicios de calidad, este hotel es ideal para aquellos que buscan una estancia auténtica y memorable.</p>
            <a href="/submodules/directory/hotel10.php" class="btn">Mas detalles</a>
        </div>
      <!-- hoteles  -->

      <!-- plazas  -->
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza1.jpg" alt="plaza1">
            <h2>Plaza Galerías Hipódromo</h2>
            <p>Plaza Galerías Hipódromo es un destino de compras y entretenimiento con una 
            amplia selección de tiendas de moda, restaurantes y actividades recreativas.</p>
            <a href="/submodules/directory/plaza1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza2.jpg" alt="plaza2">
            <h2>Plaza Paseo Chapultepec</h2>
            <p>Plaza Paseo Chapultepec es una plaza elegante que ofrece una mezcla de tiendas de moda, restaurantes y cafeterías en un ambiente agradable y moderno.</p>
            <a href="/submodules/directory/plaza2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza3.jpg" alt="plaza3">
            <h2>Plaza Mundo Divertido</h2>
            <p>Plaza Mundo Divertido combina un centro comercial con un parque de diversiones, ofreciendo tiendas, restaurantes y juegos mecánicos para toda la familia.</p>
            <a href="/submodules/directory/plaza3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza4.jpg" alt="plaza4">
            <h2>Plaza Las Brisas</h2>
            <p>Plaza Las Brisas es un destino de compras y entretenimiento con una variedad de tiendas, restaurantes y actividades para todas las edades.</p>
            <a href="/submodules/directory/plaza4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza5.jpg" alt="plaza5">
            <h2>Plaza Carrousel</h2>
            <p>Plaza Carrousel ofrece una amplia selección de tiendas, restaurantes y servicios en un ambiente cómodo y conveniente.</p>
            <a href="/submodules/directory/plaza5.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza6.png" alt="plaza6">
            <h2>Plaza Sendero Tijuana</h2>
            <p>Plaza Sendero Tijuana es un centro comercial con una variedad de tiendas, restaurantes y entretenimiento para toda la familia.</p>
            <a href="/submodules/directory/plaza6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza7.jpg" alt="plaza7">
            <h2>Plaza Otay</h2>
            <p>Plaza Otay ofrece una amplia gama de tiendas, restaurantes y servicios en un ambiente moderno y cómodo.</p>
            <a href="/submodules/directory/plaza7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza8.jpg" alt="plaza8">
            <h2>Plaza Monarca</h2>
            <p>Plaza Monarca es un centro comercial que ofrece una mezcla de tiendas, restaurantes y servicios en un ambiente contemporáneo.</p>
            <a href="/submodules/directory/plaza8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza9.jpg" alt="plaza9">
            <h2>Plaza 2000</h2>
            <p>Plaza 2000 es un centro comercial ubicado en una de las áreas más transitadas de Tijuana, ofreciendo una amplia variedad de tiendas, restaurantes y servicios.</p>
            <a href="/submodules/directory/plaza9.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Plazas">
            <img src="images/directory/plaza10.jpg" alt="plaza10">
            <h2>Plaza Río Tijuana</h2>
            <p>Plaza Río Tijuana es uno de los centros comerciales más grandes y populares de Tijuana. Ofrece una amplia variedad de tiendas, restaurantes, cines y entretenimiento para toda la familia.</p>
            <a href="/submodules/directory/plaza10.php" class="btn">Mas detalles</a>
        </div>
      <!-- plazas  -->

      <!-- restaurantes  -->
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res1.jpg" alt="rest1">
            <h2>Caesar's Restaurant</h2>
            <p>Caesar's Restaurant es un lugar histórico conocido por ser el lugar de nacimiento de la ensalada César, ofreciendo una experiencia culinaria única y un ambiente clásico.</p>
            <a href="/submodules/directory/restaurante1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res2.jpeg" alt="rest2">
            <h2>Telefónica Gastro Park</h2>
            <p>Telefónica Gastro Park es un espacio gastronómico que alberga una variedad de puestos de comida y camiones de comida gourmet, ofreciendo una experiencia culinaria diversa y emocionante.</p>
            <a href="/submodules/directory/restaurante2.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res3.jpg" alt="rest3">
            <h2>Mision 19</h2>
            <p>Mision 19 es un restaurante elegante que ofrece una experiencia culinaria sofisticada, con un enfoque en ingredientes locales y técnicas modernas.</p>
            <a href="/submodules/directory/restaurante3.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res4.jpg" alt="rest4">
            <h2>Café La Especial</h2>
            <p>Café La Especial es un restaurante clásico conocido por sus deliciosos desayunos y su ambiente acogedor, ofreciendo una selección de platillos mexicanos tradicionales y café de calidad.</p>
            <a href="/submodules/directory/restaurante4.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res5.webp" alt="rest5">
            <h2>Tacos El Franc</h2>
            <p>Tacos El Franc es un puesto de tacos popular que ofrece una variedad de tacos mexicanos auténticos, conocido por su carne asada y adobada.</p>
            <a href="/submodules/directory/restaurante5.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res6.webp" alt="rest6">
            <h2>La Querencia</h2>
            <p>La Querencia es un restaurante que ofrece cocina mexicana contemporánea con un toque creativo, en un ambiente íntimo y acogedor.</p>
            <a href="/submodules/directory/restaurante6.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res7.jpg" alt="rest7">
            <h2>La Justina</h2>
            <p>La Justina es un restaurante moderno que ofrece una variedad de platillos inspirados en la cocina mexicana y internacional, con un ambiente vibrante y elegante.</p>
            <a href="/submodules/directory/restaurante7.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res8.jpg" alt="rest8">
            <h2>Tacos El Gordo</h2>
            <p>Tacos El Gordo es un lugar famoso por sus tacos de carne asada, adobada y otros sabores tradicionales, ofreciendo auténtica comida callejera mexicana en un ambiente informal.</p>
            <a href="/submodules/directory/restaurante8.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res9.jpg" alt="rest9">
            <h2>El Mazateño</h2>
            <p>El Mazateño es un restaurante que ofrece auténtica cocina mexicana, especializándose en mariscos frescos y platillos típicos de la región, en un ambiente acogedor y familiar.</p>
            <a href="/submodules/directory/restaurante9.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Restaurantes">
            <img src="images/directory/res10.jpg" alt="rest10">
            <h2>El Taller</h2>
            <p>El Taller es un restaurante que combina cocina mexicana e internacional, ofreciendo una variedad de platillos creativos y deliciosos, en un ambiente moderno y acogedor.</p>
            <a href="/submodules/directory/restaurante10.php" class="btn">Mas detalles</a>
        </div>
      <!-- restaurantes -->

      <!-- mercados -->
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca1.jpg" alt="merca1">
            <h2>Walmart</h2>
            <p>Walmart es una cadena de supermercados internacional que ofrece una amplia variedad de productos alimenticios, artículos para el hogar, productos electrónicos y más, a precios competitivos.</p>
            <a href="https://maps.app.goo.gl/2pVTMnSYibYkbndi8" class="btn">Ubicacion</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca2.jpg" alt="merca2">
            <h2>Soriana</h2>
            <p>Soriana es una cadena de supermercados que ofrece una amplia selección de productos alimenticios, artículos para el hogar y otros productos de consumo, con un enfoque en la calidad y el servicio al cliente.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca3.jpg" alt="merca3">
            <h2>Calimax</h2>
            <p>Calimax es una cadena de supermercados regional que ofrece una amplia variedad de productos alimenticios frescos y envasados, así como otros productos de consumo, con un enfoque en la calidad y la frescura.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca4.jpg" alt="merca4">
            <h2>Ley Supermercados</h2>
            <p>Ley Supermercados es una cadena de supermercados que ofrece una amplia selección de productos alimenticios, artículos para el hogar, productos electrónicos y más, con un enfoque en la calidad y el servicio al cliente.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca5.webp" alt="merca5">
            <h2>Comercial Mexicana</h2>
            <p>Es una cadena de supermercados que ofrece una amplia variedad de productos alimenticios, productos para el hogar, ropa y más, con un enfoque en la calidad y la variedad.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca6.webp" alt="merca6">
            <h2>Ley Express</h2>
            <p>Ley Express es una tienda de conveniencia que ofrece una selección de productos básicos, como bebidas, snacks, alimentos preparados y artículos de uso diario, con un enfoque en la comodidad y la rapidez.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca7.jpg" alt="merca7">
            <h2>OXXO</h2>
            <p>OXXO es una cadena de tiendas de conveniencia que ofrece una selección de productos básicos, como bebidas, snacks, alimentos preparados y artículos de cuidado personal, con un enfoque en la comodidad y la accesibilidad.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca8.jpg" alt="merca8">
            <h2>Bodega Aurrerá</h2>
            <p>Bodega Aurrerá es una cadena de supermercados que ofrece una amplia gama de productos a precios accesibles, con un enfoque en la calidad y la economía.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca9.jpg" alt="merca9">
            <h2>Supermercados El Florido</h2>
            <p>Supermercados El Florido es una cadena de supermercados regional que ofrece una variedad de productos alimenticios, productos para el hogar y más, con un enfoque en la calidad y la satisfacción del cliente.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="Mercados">
            <img src="images/directory/merca10.jpg" alt="merca10">
            <h2>Calimax plus</h2>
            <p>Calimax Frutería es una tienda de abarrotes especializada en frutas y verduras frescas, ofreciendo una amplia selección de productos de alta calidad y frescura.</p>
            <a href="/submodules/directory/super1.php" class="btn">Mas detalles</a>
        </div>
      <!-- mercados -->
      
        <div class="lugar" data-categoria="">
            <img src="images/trompo1.png" alt="trompo1">
            <h2>El Trompo</h2>
            <p>Comprueba que aprender puede ser divertido en este complejo para toda la familia con cientos de juegos que 
               muestran el impacto de la ciencia y la tecnología modernas.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/cecut1.png" alt="cecut1">
            <h2>Cecut</h2>
            <p>Lleva a tu familia a descubrir el rico pasado de las Californias y a visitar exposiciones de arte, 
               jardines botánicos y un cine IMAX con forma de cúpula.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/plazario.jpg" alt="plaza rio">
            <h2>Plaza Rio Tijuana</h2>
            <p>Este centro comercial tiene tiendas como Sephora, Apple Store, Starbucks y un cine enorme.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/avrevolucion.jpg" alt="avrevolucion">
            <h2>Avenida Revolución</h2>
            <p>Es un edificio muy bonito e histórico!!! antiguamente era un centro deportivo de Pelota vasca (Jai alai). </p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/mullme.jpg" alt="mullme">
            <h2>Mullme</h2>
            <p>En el Museo de la Lucha Libre Mexicana se exhibe una gran colección privada de objetos relacionados al mundo de la Lucha Libre, 
               con más de 9,000 artículos entre máscaras originales, tazas, cintos de campeonato, fotografías, llaveros, alcancías, historietas, 
               luchadores de plástico en diferentes poses y tamaños, los diferentes tipos de revistas especializadas al deporte del pancracio, y más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/mercado.jpg" alt="mercado">
            <h2>Mercado El Popo</h2>
            <p>Hay esponjas naturales, prensas de tortilla de madera, piedras para moler molcajete, piedra pómez y mucho más.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/catedral.jpg" alt="catedral">
            <h2>Catedral de Nuestra Señora de Guadalupe</h2>
            <p>Esta es una iglesia católica clásica en el medio de Tijuana que atiende las necesidades de los habitantes locales.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
            <img src="images/estadio.jpg" alt="estadio">
            <h2>Estadio Caliente</h2>
            <p>Dicen que la afición a un equipo lo es todo, y los Xolos tienen eso, una afición que muere por ellos no importa que ganen o pierdan.
               Los partidos siempre son en la noche, pero si quieres vivir la fiesta de verdad, llega desde temprano, abre la cajuela de tu coche, saca el asador y 
               las cervezas y prepara tu carne, eso si, no olvides invitar a un monton de amigos. El estacionamiento es una fiesta por si misma.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
        <div class="lugar" data-categoria="">
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