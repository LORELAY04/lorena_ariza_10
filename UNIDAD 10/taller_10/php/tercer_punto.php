<?php

include "./tercer_punto.html";

$edad = 0;

if (isset($_GET['verificar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo "El Nombre Registrado Es: ".$nombre."<br>";
    echo "El Apellido Registrado Es: ".$apellido."<br>";
    echo "El Número de Documento Registrada Es : ".$cedula."<br>";

}

?>