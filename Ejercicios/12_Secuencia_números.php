<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

if( !isset($num1)){
    die('No hay numero.');
} else if(!is_int(intval($num1))){
    die('Debe introducir un número.');
} else if($num1<0){
    die('Debe introducir un valor mayor que 0.');
} else if( !isset($num2)){
    die('No hay numero.');
} else if(!is_int(intval($num2))){
    die('Debe introducir un número.');
} else if($num2<0){
    die('Debe introducir un valor mayor que 0.');
} else if($_GET['num1']<$_GET['num2']){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    for ($i = $num1; $i <= $num2; $i++){
            echo "{$i}<br>";
        
    }
}else{
    $num2 = $_GET['num1'];
    $num1 = $_GET['num2'];
    
    for ($i = $num2; $i >= $num1; $i--){
            echo "{$i}<br>";
        
    }
} 




?>