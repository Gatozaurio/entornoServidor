<?php

$consumo = $_GET['consumo'];
$coste = 0;

// Comprobaciones
if( empty($consumo)){
    die('No ha introducido el consumo.');
} else if(!is_numeric($consumo)){
    die('Debe introducir un número.');
} else if($consumo<0){
    die('Debe introducir un valor mayor que 0.');
}

if ($consumo <= 100) {
    // Se calcula el coste del consumo por m³ al precio correspondiente (0.15€).
    $coste = $consumo*0.15;
} elseif ($consumo <= 500){
    // Se calcula el coste del consumo por m³ al precio correspondiente (0.20€) quitándole los primeros 100m³
    // y añadimos al coste el precio de los 100m³ quitados (15€).
    $coste=($consumo-100)*0.20+15;
} elseif ($consumo <= 1000){
    // Se calcula el coste del consumo por m³ al precio correspondiente (0.35€) quitándole los primeros 500m³
    // y añadimos al coste el precio de los 500m³ quitados (95€).
    $coste=($consumo-500)*0.35+95;
} else {
    // Se calcula el coste del consumo por m³ al precio correspondiente (0.80€) quitándole los primeros 1000m³
    // y añadimos al coste el precio de los 1000m³ quitados (275€).
    $coste=($consumo-1000)*0.80+275;
}

echo 'Ha consumido ' . $consumo . 'm³ de agua con un coste de ' . $coste . '€.';

?>