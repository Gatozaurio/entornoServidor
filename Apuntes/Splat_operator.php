<?php

// Splat operator
// Para que funcione tiene que ir al final de las variables.
function suma(...$nums){
    $suma = 0;

    foreach($nums as $num){
        $suma += $num;
    }

    echo $suma . "<br>";
}

function mult($first, $second, $third){
    echo "<br><br>";
    return $first * $second * $third; 
}

$datos = [10, 5, 3];

suma(1,2,3);
suma(1,2,3,4);
suma(1,2,3,4,5);

echo mult(...$datos);

// Un conjunto de datos enteros, calcular el máximo, la media y el mínimo
// Media = xx.xx
// Max = xx
// Min = xx

?>