<?php

// Shift + Alt + A = Comentar

echo "<p>¡Hola mundo!</p>";

// Variables
$int=1;
$float=1.5;
$isTrue=true;
$arrayColors = array('Azul', 'Morado', 'Negro');
$string = "Hola caracola";

echo $int;
echo $float;
echo $isTrue;
echo $arrayColors[0];
echo $string."<br>";

// Variables locales y globales
function variablesGlobales(){
    $variable="Variable local";
    echo "Valor de la variable en el ámbito local: " ."$variable"."<br>";
    echo "Valor de la variable en el ámbito global: ".$GLOBALS["variable"]; // $GLOBALS Hace referencia a todas las variables disponibles en el ámbito global
    
}

$variable='Variable global';
variablesGlobales();

// Supervariables
// Son variables predefinidas disponibles en todos los ámbitos a lo largo del script. Algunas de ellas son:
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV
?>