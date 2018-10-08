<?php

// Array bidimensional
$personas=array(
    array("Alberto","Távora",23),
    array("Manolo","Meloinvento",36),
    array("Pepe","Palotes",73)
);

// Obtener un valor
$fila=2;
$columna=1;

echo $personas[$fila][$columna];
echo "<br><br>";

// Recorrer el Array
for($fila=0; $fila<count($personas); $fila++){
    for ($columna=0; $columna<count($personas[$fila]); $columna++){
        echo "Valor: ".$personas[$fila][$columna]."<br>";
    }
}
echo "<br><br>";

// Multidimensional mixto
$barcos=array(
    'A'=>array("nada","nada","barco"),
    'B'=>array("nada","nada","nada"),
    'C'=>array("barco","nada","nada"),
    'D'=>array("nada","nada","barco")
);

// Obtener un valor
echo $barcos['A'][2];
echo "<br><br>";

// Recorrer Array
foreach($barcos as $clave=>$valor){
    echo"<br>";
    for($i=0; $i<count($valor); $i++){
        echo "Coordenadas -> ".$clave. "-" .$i." Valor ->".$valor[$i]."<br>";
    }
}
?>