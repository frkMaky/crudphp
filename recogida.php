<?php
    require_once ("conexion.php");

    $rNombre = $rPrecio = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["fNombre"])){
        $rNombre = $_POST["fNombre"];            
       echo "nombre".$rNombre;
    } else {
        $rNombre="";
    }
    if (!empty($_POST["fPrecio"])){
        $rPrecio = $_POST["fPrecio"];            
    } else {
        $rPrecio="";
    }
}
   
    $stmt=$conn->prepare("INSERT INTO dbCarrito.tArticulos(nombreArticulo, precio) VALUES (?,?)");
    $stmt->bind_param("sd", $rNombre, $rPrecio);
    echo $rNombre;
    echo $rPrecio;
    $nombre=$rNombre;
    $prec=$rPrecio;
    $stmt->execute();
    
    //VOLVER A INDEX
    header("location: listado.php");
    //CIERRA LA CONEXIÓN
    mysqli_close($conn);

    ?>