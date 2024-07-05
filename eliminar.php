<?php
    require_once ("conexion.php");
    $rId= $_GET['id'];
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

    //VOLVER A INDEX
    header("location: LISTADO.php");
    //CIERRA LA CONEXIÓN
    mysqli_close($conn);

