<?php
    require_once ("conexion.php");

    $rId= "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["fid"])){
            $rId = $_POST["fid"];            
        echo "id eliminado".$rId;
        } else {
        $rId="";
        }
    }
    $stmt=$conn->prepare("DELETE FROM dbCarrito.tArticulos WHERE id=(?)");
    $stmt->bind_param("i", $rId);
    $id=$rId;
    $stmt->execute();

    mysqli_query($conn, $query2);//ejecutar la sentencia

    //VOLVER A INDEX
    header("location: listado.php");
    //CIERRA LA CONEXIÓN
    mysqli_close($conn);

?>