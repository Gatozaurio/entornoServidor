<?php

$primos=15;
$contadorPrimos=0;

echo "Los $primos primeros números primos:<br><br>";

for($i=2; $contadorPrimos<$primos; $i++){
    $esPrimo = true; 

    for($j=2; $j<$i; $j++){ 
        if ($i%$j==0) { 
            $esPrimo = false;
            break;
        }
    }

    if ($esPrimo) {
        echo $i."<br>";
        $contadorPrimos ++;
    }
}
?>