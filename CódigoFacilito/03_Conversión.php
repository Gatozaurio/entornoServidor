<?php
// Conversión a números enteros:

// Por contexto: No funciona
/* $variable="20 hola";
$suma=20+$variable;
echo $suma;
echo gettype($suma); */

// Forzado de tipo:
$variable="20 hola";
$int=(int)$variable;
echo $int;
echo "<br>";
echo gettype($int)."<br><br>";

$booleano=false;
$intbool=(int)$booleano; // true=1 false=0
echo $intbool;
echo "<br>";
echo gettype($intbool)."<br><br>";

$numero=1;
$numeroABool=(boolean)$numero; // Si el valor de la variable es: 0, 0.0, "", "0" o cualquier variable vacía, no devuelve nada(false), y al contrario devuelve 1(true);
echo $numeroABool;
echo "<br>";
echo gettype($numeroABool)."<br><br>";


// Función
$float=3.2;
$funcion=intval($float); // intval() obtiene el valor entero de una variable.
echo $funcion;
echo "<br>";
echo gettype($funcion)."<br><br>";

$funcionReal=floatval($float); // floatval() convierte la cariable a float.
echo $funcionReal;
echo "<br>";
echo gettype($funcionReal)."<br><br>";

// Conversión a array con explode()
$numeros="1,2,3,4";
$arrayNumeros=explode(",",$numeros,5); // "," -> Indica cuál es el separador, $numeros -> Indica la variable, 5 -> Define el límite.
echo $arrayNumeros[0]."<br>";
echo $arrayNumeros[1]."<br><br>";

// Conversión de array con implode()
$arrayColores=array("Azul","Rojo","Amarillo");
$arrayAString=implode(" ",$arrayColores); // " " -> Indica qué usará como separador.
echo $arrayAString;




?>