<?php

function sumar($valor1, $valor2){
    if($valor1 > $valor2){
        return $valor1+$valor2;
    }
    elseif($valor1 < $valor2){
        return $valor1-$valor2;
    }
    return $valor1 * $valor2;
}

// Número factorial
// Factorial 5 = 5*4*3*2*1

echo sumar(2, 3);

?>