<?php
require_once("conexion.php");
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $usuario = $_POST['fUsuario'];
    $contraseña = $_POST['fContraseña'];

    $query= "INSERT INTO tUsuarios (usuario, contrase) VALUES ('{$usuario}','{$contraseña}')";
    $resultado=$conn->query($query);

    header("location: listado.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <!--formulario para registro de nuevos usuarios-->
    <form method="post">
        <label for="fUsuario">Nombre de usuario:</label>
        <input class="caja" type="text" name="fUsuario"><br>
        <label for="fContraseña">Contraseña:</label>
        <input class="caja"type="text" name="fContraseña"><br> 
        <input class="boton" type="submit" value="REGISTRAR">
    </form>
</body>
</html>