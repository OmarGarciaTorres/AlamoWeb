<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega tu archivo CSS aquí -->
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro</h1>
        <form action="procesar_formulario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="motivo">¿Cuál es tu principal motivo para visitar Tijuana?</label>
                <textarea id="motivo" name="motivo" required></textarea>
            </div>
            <div class="form-group">
                <label>¿Has visitado Tijuana anteriormente?</label>
                <label><input type="radio" name="visita_anterior" value="si" required> Sí</label>
                <label><input type="radio" name="visita_anterior" value="no"> No</label>
            </div>
            <div class="form-group">
                <label>Selecciona tus intereses:</label>
                <input type="checkbox" id="playas" name="intereses[]" value="playas">
                <label for="playas">Playas</label>
                <input type="checkbox" id="museos" name="intereses[]" value="museos">
                <label for="museos">Museos</label>
                <input type="checkbox" id="parques" name="intereses[]" value="parques">
                <label for="parques">Parques</label>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
