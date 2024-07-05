<?php
//CREAR BASE DE DATOS
$sql="CREATE DATABASE IF NOT EXISTS dbCarrito";

if(mysqli_query($conn,$sql)){
}else{
    echo "Error creando base de datos:".mysqli_error($conn);
}

//Crear una tabla articulos
$sql = "CREATE TABLE  IF NOT EXISTS  dbCarrito.tArticulos(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    nombreArticulo VARCHAR (30) NOT NULL,
    precio DECIMAL (6,2) NOT NULL
)";
//Crear una tabla usuarios
$sql = "CREATE TABLE  IF NOT EXISTS  dbCarrito.tUsuarios(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR (30) NOT NULL,
    contrase VARCHAR (30) NOT NULL
)";


if(mysqli_query($conn,$sql)){
    
}else{
    echo"Error creando tabla";
}
