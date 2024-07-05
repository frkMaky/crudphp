<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <!--formulario para registro de nuevos artículos-->
    <form action="./recogida.php" method="post">
        <label for="fNombre">Nombre del artículo:</label>
        <input class="caja" type="text" name="fNombre"><br>
        <label for="fPrecio">Precio del artículo</label>
        <input class="caja"type="text" name="fPrecio"><br>
        <input class="boton" type="submit" value="INSERTAR">
    </form>
</body>
</html>