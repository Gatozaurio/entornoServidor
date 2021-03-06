<?php
// Crear un script que cree un array cuadrado de dos dimensiones con
// números enteros aleatorios entre 1 y 100 (se puede repetir).
// La dimensión del array se recibe por GET.

// Hacer una variante de este script:
// Si la dimension es 3 los valores deben ser entre 1 y 3 al cuadrado (de 3 a 9)
// Dar con una solución computacionalmente eficiente
// los números no deben repetirse

// Establecemos el tiempo máximo de ejecución de un script
ini_set('max_execution_time', 300);

$dim = $_GET['dim'];

$array = [];

// Inicializar el array a 0
for($i=0; $i<$dim; $i++){
    for($j=0; $j<$dim;$j++){
        $numerosArray[$i][$j] = 0;
    }
}

// Empiezo a cargar el array
// Mido la hora cuando comienzo a cargar el array
$start = microtime(true);
for($i=0; $i<$dim; $i++){
    for($j=0; $j<$dim;$j++){
        do{
            $numero = rand(1, $dim**2);
        }while(arrayContiene($array, $numero, $dim)); 
        $numerosArray[$i][$j] = $numero;
        printf("%04d ", $numerosArray[$i][$j]);
    }
    echo"<br>";
}


// Mido la hora cuando he terminado de cargar el array
$end = microtime(true);

function arrayContiene($array, $numero, $dim){
    for($i=0; $i<$dim; $i++){
        for($j=0; $j<$dim;$j++){
            if($array[$i][$j] == $numero){
                return true;
            };
        }
    }
    return false;
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