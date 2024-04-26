<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar lugar</title>
    <style>
        .filter {
            margin-bottom: 20px;
        }
        .lugar {
            display: none;
        }
    </style>
</head>
<body>
    <div class="filter">
        <input type="text" id="busqueda" placeholder="Buscar lugar..." onkeyup="buscarLugar(event)">
        <select class="categoria-select" onchange="filtrarLugares(this.value)">
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
            <img src="images/parque1.png" alt="parque1">
            <h2>Parque Morelos</h2>
            <p>Dedica una tarde para descubrir los aspectos más característicos de este enorme parque, 
                donde encontrarás desde espectáculos de marionetas y un zoológico hasta embarcaciones y una alberca.</p>
            <a href="book.php" class="btn">Mas detalles</a>
        </div>
    </main>

    <script>
        function buscarLugar(event) {
            if (event.keyCode === 13) { // 13 es el código de tecla para "Enter"
                var input = document.getElementById("busqueda");
                var filter = input.value.toUpperCase();
                var lugares = document.getElementsByClassName("lugar");

                for (var i = 0; i < lugares.length; i++) {
                    var nombre = lugares[i].getElementsByTagName("h2")[0];
                    if (nombre.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        lugares[i].style.display = "";
                    } else {
                        lugares[i].style.display = "none";
                    }
                }
            }
        }

        function filtrarLugares(categoria) {
            var lugares = document.getElementsByClassName("lugar");

            if (categoria === "Todos") {
                for (var i = 0; i < lugares.length; i++) {
                    lugares[i].style.display = "";
                }
                return;
            }

            for (var i = 0; i < lugares.length; i++) {
                var cat = lugares[i].getAttribute("data-categoria");
                if (cat === categoria) {
                    lugares[i].style.display = "";
                } else {
                    lugares[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>


