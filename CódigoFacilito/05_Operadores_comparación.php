<?php
// operadores de comparación
// Igual ==
$numero1=14;
$numero2="14";
var_dump($numero1==$numero2); // Muestra el tipo y el valor de una cariable.
echo "<br><br>";

// Idéntico ===
var_dump($numero1===$numero2);
echo "<br><br>";

// Diferente != <>
var_dump($numero1!=$numero2);
echo "<br>";
var_dump($numero1<>$numero2);
echo "<br><br>";

// No idéntico !==
var_dump($numero1!==$numero2);
echo "<br><br>";

// Mayor/menor que >     <
var_dump($numero1>$numero2);
echo "<br>";
var_dump($numero1<$numero2);
echo "<br><br>";

// Mayor/Menor o igual que >=     <=
var_dump($numero1>=$numero2);
echo "<br>";
var_dump($numero1<=$numero2);
echo "<br><br>";

// Nave espacial <=> (PHP7)
/*  1= El número de la izquierda es mayor.
    -1= El número de la izquierda es mayor.
    0= los números son iguales.
*/
var_dump($numero1<=>$numero2);
echo "<br><br>";

// Operador Elvis ?:
/*  Si el valor es true devuelve el valor de la variable,
    si es falso, devuelve el segundo valor.
*/
$resultado=true;
var_dump($resultado?:'No hay datos.');
echo "<br><br>";

// Operador ternario ?:
/*  Si el valor es true devuelve el primer valor,
    si es falso, devuelve el segundo valor.
*/
var_dump($resultado?'Es verdadero.':'Es falso.');

// Operador de fusión null ?? (PHP7)
/*  Si tiene valor lo devuelve,
    si está vacío devuelve el segundo valor.
*/
var_dump($resultado??'No hay datos.');


?>