
<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_usuarios";
$result = mysqli_query($conexion, $sql);

$salida = '';

if (mysqli_num_rows($result) > 0) {
    $salida .= "<table border='1'>";
    $salida .= "<tr><th>Documento</th><th>Nombre</th><th>Contraseña</th><th>Fecha de Nacimiento</th><th>Acciones</th></tr>";

    while ($fila = mysqli_fetch_assoc($result)) {
        $salida .= "<tr>";
        $salida .= "<td>" . htmlspecialchars($fila['documento']) . "</td>";
        $salida .= "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
        $salida .= "<td>" . htmlspecialchars($fila['password']) . "</td>";
        $salida .= "<td>" . htmlspecialchars($fila['fecha_nacimeinto']) . "</td>";
        $salida .= "<td><a href='actulizar.php?documento=" . htmlspecialchars($fila['documento']) . "'>actulizar</a></td>";
        $salida .= "</tr>";
    }

    $salida .= "</table>";
    echo $salida;
} else {
    $salida = "No se encontraron usuarios.";
}

mysqli_close($conexion);
?>









