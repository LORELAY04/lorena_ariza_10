<?php


include "./cuarto_punto.html";

$comprovar = var_dump($_POST);

$edad = 0;
const constante_18 = 18;
define("constante0","0");


if (isset($_POST['verificar'])) {
    $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);
   
    $date2 = new DateTime(date("y-m-d"));


    $fecha_actual = $fecha_nacimiento->diff($date2);


    $edad_actual = $fecha_actual->y;
    $edad_meses = $fecha_actual->m;
    $edad_dias = $fecha_actual->d;


if ($edad_actual >= constante_18) {
        echo "<h1>Es mayor de edad, dado que tiene" .$edad_actual."años </h1>";
}
#else if (18> $edad && 0 < $edad)
elseif ($edad_actual < constante_18  && $edad_actual > constante0) {
        echo "<h2>Es menor de edad, dado que tiene" .$edad_actual."años </h2>";
}else {
        echo "<h2>No valido</h2>";
}
        echo "<br> Usted Tiene años: ".$edad_actual."<br> Usted Tiene meses: ".$edad_meses."<br> Usted Tiene dias: ".$edad_dias;
        echo $comprovar;
}
   
?>
