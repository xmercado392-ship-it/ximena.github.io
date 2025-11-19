<?php
$conexion = mysqli_connect("localhost", "root", "", "achichilco");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}
?>