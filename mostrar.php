
<?php 
    session_start();
    if ( !$_SESSION["permisos"]["permisos"]) {
        header(("Location: index.php"));
    }

    function debuguear($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        exit;
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
        <div class="sesion">
            <a href="./cerrarSesion.php" style="color:black;">cerrar sesion</a>
        </div>

        <div class="gris"><a class="gris" href="./nuevoUsuario.php" >MOSTRAR USUARIOS</a></div>
        <div id="añadir"><a  href="./insertar.php" id="mas">+AÑADIR ARTÍCULO</a></div>
        
    <?php
    require_once ("conexion.php");
    $sql = "SELECT id, nombreArticulo, precio FROM dbCarrito.tArticulos";
    $result = mysqli_query($conn, $sql);
    //Tabla artículos
    echo "<table>";
    echo "<tr>";
    echo "<th>"."Id"."</th>";
    echo "<th>"."Artículo"."</th>";
    echo "<th>"."Precio"."</th>";
    echo"<th>"."Opciones"."</th>";
    echo "</tr>";
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td> <?php echo $row["id"];?></td>
                <td> <?php echo $row["nombreArticulo"];?> </td>
                <td> <?php echo $row["precio"]." €";?> </td>
                <td> 
                    <a href="verArticulo.php?id=<?php echo $row['id']; ?>" title="Ver producto">
                    <img src='images/mostar.png' alt='boton mostrar producto' height='30px'></a>  
                    <a href="actualizar.php?id=<?php echo $row['id']; ?>" title="Actualizar producto">
                    <img src='images/editar.png' alt='boton actualizar producto'  height='30px'> </a>  
                    <a href="eliminar.php?id=<?php echo $row['id']; ?>" title="Eliminar producto">
                    <img src='images/papelera.png' alt='boton eliminar producto'  height='30px'> </a>   
                </td> 
            </tr>
    <?php        
        }
    }

    //CIERRA LA CONEXIÓN
    mysqli_close($conn);
    ?>
    </body>
</html>