


<form action="recibir.php" method="GET">
    <label for="documento">Documento</label>
    <input type="number" class="form-control" id="documento" name="documento" required>

    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php if(isset($_GET['documento'])) { echo 'voy a actualizar'; } else { echo 'voy a insertar'; } ?>">

    <label for="password">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" required>

    <label for="fecha_nacimineto">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimineto" name="fecha_nacimineto" required>

    <label for="imagen_url">Imagen</label>
    <input type="file" class="form-control-file" id="imagen_url" name="imagen_url">

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
