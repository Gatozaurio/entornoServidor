<?php

// Número factorial
// Factorial 5 = 5*4*3*2*1

// Solución iterativa:
function factorial($numero){
    $resultado=1;
    for($i=$numero; $i>1; $i--){
        echo $i."<br>";
        $resultado*=$i;
    }
    return $resultado;
}

// Solución recursiva:
function factorial_rec($numero){
    if($numero==1){
        return 1;
    }
       return $numero * factorial_rec($numero-1);
}

// Fibonacci
function fibonacci($numero){
    if($numero<=2){
        return 1;
    }
    return fibonacci($numero-1)+fibonacci($numero-2);
}



echo factorial(5);
echo "<br><br>";
echo factorial_rec(5);


?>