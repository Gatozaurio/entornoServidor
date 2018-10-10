<?php

$dni = $_POST['dni'];

if(!is_int(intval($dni))){
    echo "Error";
} else if($dni>=1000000 && $dni<=100000000){
    $arrayLetras = [
        'T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'
    ];

    $valor = $dni % 23;
    echo "DNI : " . $dni . "-" . $arrayLetras[$valor];
}

?>