<?php
require_once("conexion.php");


if ($_SERVER['REQUEST_METHOD']=='POST'){

    $usuario = $_POST['fUsuario'];
    $contrase = $_POST['fContraseña'];
    
    $query= "SELECT permisos FROM  tUsuarios WHERE usuario= '{$usuario}' AND contrase='{$contrase}' ";
    $result=mysqli_query($conn,$query);
    $permisos =null;
    $permisos=$result->fetch_assoc();

    if ($permisos) {
        session_start();
        $_SESSION["permisos"]= $permisos;
        header("Location: mostrar.php");
    } 
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
    <form method="post">
        <label for="fUsuario">Nombre de usuario:</label>
        <input class="caja" type="text" name="fUsuario"><br>
        <label for="fContraseña">Contraseña:</label>
        <input class="caja"type="text" name="fContraseña"><br> 
    <?php
        echo"<input class='boton' type='submit' value='CONTINUAR'>";
    ?>
    </form>
</body>
</html>