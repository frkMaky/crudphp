<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
        <link rel="stylesheet" href="./css/estilos.css">
    </head>
    <body>
    <div class="volver"><a class="volver" href="./mostrar.php">VOLVER</a></div>
    <div class="gris"><a class="gris" href="./registroUsuario.php" >+AÑADIR USUARIO</a></div>
    <?php
    require_once ("conexion.php");
    $sql = "SELECT id, usuario, contrase, permisos FROM dbCarrito.tUsuarios";
    $result = mysqli_query($conn, $sql);

    //Tabla usuarios
    echo "<table>";
    echo "<tr>";
    echo "<th>"."ID"."</th>";
    echo "<th>"."Usuario"."</th>";
    echo "<th>"."Contraseña"."</th>";
    echo "<th>"."Permisos"."</th>";
    echo "<th>"."Opciones"."</th>";
    echo "</tr>";
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td> <?php echo $row["id"];?></td>
                <td> <?php echo $row["usuario"];?> </td>
                <td> <?php echo $row["contrase"];?> </td>
                <td> <?php echo $row["permisos"];?> </td>
            </tr>
    <?php        
        }
    }
    //CIERRA LA CONEXIÓN
    mysqli_close($conn);
    ?>
    </body>
</html>