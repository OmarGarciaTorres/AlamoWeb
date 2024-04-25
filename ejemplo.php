<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro de Lugares</title>
    <style>
        /* Estilos para las opciones de categoría */
        .categoria-select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 200px;
        }
        /* Estilos para los contenedores de lugares */
        .lugar {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Lugares</h1>
    <select class="categoria-select" onchange="filtrarLugares(this.value)">
        <option value="Todos">Todos</option>
        <option value="Parques">Parques</option>
        <option value="Cines">Cines</option>
        <!-- Agrega más opciones según tus necesidades -->
    </select>

    <div class="lugar" data-categoria="Parques">Parque Morelos</div>
    <div class="lugar" data-categoria="Naturaleza">Cerro Colorado</div>
    <div class="lugar" data-categoria="Compras">Plaza Río Tijuana</div>
    <!-- Agrega más lugares con sus categorías -->

    <script>
        function filtrarLugares(categoria) {
            const lugares = document.querySelectorAll('.lugar');
            lugares.forEach(lugar => {
                if (lugar.dataset.categoria === categoria || categoria === 'Todos') {
                    lugar.style.display = 'block';
                } else {
                    lugar.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>

