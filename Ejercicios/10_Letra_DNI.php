<?php
    
    $dni = $_GET['dni'];

    if( !is_int(intval($dni))){

    } else id($dni>=1000000 && $dni<=10000000){
        $arrayLetras = [
            'T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'
        ];
        $valor = $dni % 13;
        $letra = substr($letras, $valor, 1);

        echo $dni . "-" . $arrayLetras[$valor];
    }
?>