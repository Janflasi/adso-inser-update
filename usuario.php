<?php
class Nombre_usuario {
    public static function usuario($documento, $nombre, $password, $fecha_nacimeinto) {
        $conexion = mysqli_connect("localhost", "root", "", "prueba");

        $sql_check = "SELECT * FROM tb_usuarios WHERE documento = '$documento'";
        $result_check = mysqli_query($conexion, $sql_check);

        if (mysqli_num_rows($result_check) > 0) {
            $sql = "UPDATE tb_usuarios SET nombre = '$nombre', password = '$password', fecha_nacimeinto = '$fecha_nacimeinto' WHERE documento = '$documento'";
            $message = "Datos actualizados correctamente";



            header("Location: consultar.php");

            
        } else {
            $sql = "INSERT INTO tb_usuarios (documento, nombre, password, fecha_nacimeinto) VALUES ('$documento', '$nombre', '$password', '$fecha_nacimeinto')";
            $message = "Registro exitoso";
        }

        if (mysqli_query($conexion, $sql)) {
            if (mysqli_num_rows($result_check) == 0) {
                // Redirigir a verdatos.php si se inserta un nuevo registro
                header("Location: consultar.php");
                exit();
            } else {
                // Mostrar mensaje de actualización si se actualiza un registro existente
                echo $message;
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

        // Cerrar la conexión
        mysqli_close($conexion);
    }
}
?>

