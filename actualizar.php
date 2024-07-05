
    <?php
    require_once ("conexion.php");

    $rId= $_GET['id']; //recuperamos id del enlace

    //obtener articulo con ese id 
    $query= "SELECT nombreArticulo, precio FROM dbCarrito.tArticulos WHERE id= ?";
    $stmt= $conn->prepare($query);
    $stmt->bind_param("i", $rId);
    $stmt->bind_result($nombreArticulo,$precio);
    $stmt->execute();
    $stmt->fetch(); //ASOCIAR A RESULTADO

  //mostrar en el form
  if ($_SERVER["REQUEST_METHOD"] == "POST") { // UPDATE
    
    $Nombre = $_POST["fNombre"];
    $Precio = $_POST["fPrecio"];
    $stmt->close();

    // ahora que tenemos id, nombre y precio ya podemos hacer el update
    $query2 = "UPDATE dbCarrito.tArticulos SET nombreArticulo='{$Nombre}', precio={$Precio} WHERE id={$rId}";
    var_dump($query2);
    mysqli_query($conn, $query2);
    header('Location:listado.php');
}
    //CERRAR CONEXION
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
        <!--Formulario para editar artículos-->
        <form method="POST">
            <label for="fId">ID:</label>
            <input class="caja" type="text" name="fId" value ="<?php echo $rId;?>"><br>
            <label for="fNombre">Nombre :</label>
            <input class="caja" type="text" name="fNombre" value ="<?php echo $nombreArticulo;?>"><br>
            <label for="fPrecio">Precio:</label>
            <input class="caja" type="text" name="fPrecio" value ="<?php echo $precio;?>"><br>
            <input class="boton" type="submit" value="ACTUALIZAR">
        </form>
</body>
</html>

    