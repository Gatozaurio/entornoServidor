<?php
$array = array(1,2,3,4,5);

foreach($array as $valor){
    echo $valor;
}

echo "<br><br>";

// Modificar valores dentro del Array
foreach($array as &$valor){
    $valor=$valor*2;
}

// Imprimir posición y valor del Array
foreach($array as $clave => $valor2){
    echo "$clave .... $valor2 <br>";
}

?>