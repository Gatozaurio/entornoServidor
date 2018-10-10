<?php
$dni = '';
$letra = '';



if(isset($_POST['dni'])){
    $dni = $_POST['dni'];

    if( $dni == ""){
        $error['dni'] = "Debe introducir algún dato en el campo DNI.";
    } else if (intval($dni) == 0) {
        $error['DNI'] = "El DNI debe ser un número";
    }

    function calcularLetraDNI($dni){
        global $letra;
        if(!is_int(intval($dni))){
            echo "Error";
        } else if($dni>=1000000 && $dni<=100000000){
            $arrayLetras = [
                'T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'
            ];

            $valor = $dni % 23;
            $letra = $arrayLetras[$valor];
             echo "DNI : " . $dni . "-" . $letra;
        }
        return $letra;
    }
    calcularLetraDNI($dni);
    require_once 'form_dni.html';
}
?>