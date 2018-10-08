<?php

// Array indexado
$color="Morado";
$arrayIndexado=array(1,2,"Hola",$color);
// Obtener valor del Array
echo $arrayIndexado[2];
echo "<br><br>";
// Recorrer Array
for($i=0; $i<count($arrayIndexado); $i++){
    echo $arrayIndexado[$i]."<br>";
}
echo "<br>";
// Array asociativo
$arrayAsociativo=array('Nombre'=>'Alberto','Color'=>'Naranja','Saludo'=>'Hola caracola');
// Obtener valor del Array asociativo
echo $arrayAsociativo['Saludo'];
echo "<br><br>";
// Recorrer Array asociativo
foreach($arrayAsociativo as $clave=>$valor){
    echo "Clave: $clave ---- Valor: $valor<br>";
}
?>