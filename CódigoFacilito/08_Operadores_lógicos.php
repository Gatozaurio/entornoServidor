<?php

// Operador &&
$bool=(15==5)&&(15==15);
var_dump($bool);
echo "<br><br>";

// Operador ||
$bool=(15==5)||(15==15);
var_dump($bool);
echo "<br><br>";

// Operador !
$bool=!(15==5);
var_dump($bool);
echo "<br><br>";

// Estos operadores tienen menor prioridad que la asignación = por ello hay que usarlos entre paréntesis
// Operador xor
$bool=((15==2)xor(15==15)); // True si uno de los valores es verdadero, False si ambo o ninguno lo son.
var_dump($bool);
echo "<br><br>";

// Operador and
$bool=((15==5)and(15==15));
var_dump($bool);
echo "<br><br>";

// Operador or
$bool=((15==5)or(15==15));
var_dump($bool);
echo "<br><br>";
?>