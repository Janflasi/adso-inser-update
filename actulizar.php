
<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['documento'])) {
    $documento = $_GET['documento'];

    $sql = "SELECT * FROM tb_usuarios WHERE documento = '$documento'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Actualizar Usuario</title>
        </head>
        <body>
            <h2>Actualizar Usuario</h2>
            <form action="recibir.php" method="GET">
                <label for="documento">Documento</label>
                <input type="number" class="form-control" id="documento" name="documento" value="<?php echo htmlspecialchars($row['documento']); ?>" readonly>

                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>" required>

                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($row['password']); ?>" required>

                <label for="fecha_nacimeinto">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimeinto" name="fecha_nacimeinto" value="<?php echo htmlspecialchars($row['fecha_nacimeinto']); ?>" required>

                <button type="submit" class="btn btn-primary">Cometer Cambio</button>
            </form>
        </body>
        </html>

        <?php
    } else {
        echo "No se encontró el usuario.";
    }
} else {
    echo "Documento no proporcionado.";
}

mysqli_close($conexion);
?>

