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
        
        <?php
        require_once ("conexion.php");

        $rId=$_GET["id"];
        $stmt=$conn->prepare("SELECT id, nombreArticulo, precio FROM dbCarrito.tArticulos WHERE id=(?)");
        $stmt->bind_param("i", $rId);
        $stmt->bind_result($id,$Nombre,$Precio);
        $stmt->execute();
        $stmt->fetch();
        //CIERRA LA CONEXIÓN
        mysqli_close($conn);
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
            
            <div id="verProducto">
                <table >
                    <tr><td class="verde">Id: <?php echo  $id; ?></td></tr>
                    <tr><td>Artículo: <?php echo  $Nombre; ?></td></tr>
                    <tr> <td>Precio: <?php echo  $Precio; ?>€</tr>
                </table>  
            </div> 
        </body>
    </body>
</html>

