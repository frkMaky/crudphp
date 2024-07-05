<?php
$servername= "localhost";
$username="root";
$password="";
$BAS3 ="dbCarrito";
//Crear conexión

$conn = mysqli_connect($servername, $username, $password ,$BAS3);

// Comprobar conexión
if (!$conn) {
die("CONEXION FALLIDA " . mysqli_connect_error());
}
