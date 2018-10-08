<?php
// Crear un script que cree un array cuadrado de dos dimensiones con
// números enteros aleatorios entre 1 y 100 (se puede repetir).
// La dimensión del array se recibe por GET.

// Hacer una variante de este script:
// Si la dimension es 3 los valores deben ser entre 1 y 3 al cuadrado (de 3 a 9)
// Dar con una solución computacionalmente eficiente
// los números no deben repetirse

$dim = $_GET['dim'];

for($i=0; $i<$dim; $i++){
    for($j=0; $j<$dim;$j++){
        $numerosArray[$i][$j] = generaRandom($dim);
        printf("%03d ", $numerosArray[$i][$j]);
    }
    echo "<br>";
}

function generaRandom($dim){
    return rand(1,$dim**2);
}

// Secure
/* for($i=0; $i<$dim; $i++){
    for($j=0; $j<$dim;$j++){
        $numeroRandom = rand(1,$dim**2);
        $numerosArray[$i][$j] = $numeroRandom;
        printf("%03d ", $numerosArray[$i][$j]);
    }
    echo "<br>";
} */

/* for($i=0; $i<$dim; $i++){
    for($j=0; $j<$dim;$j++){
        printf("%03d ", $numerosArray[$i][$j]);
    }
    echo "<br>";
} */

?>