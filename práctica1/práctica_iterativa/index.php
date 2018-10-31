<?php



require_once 'constantes.php';
require_once 'funciones.php';


$message = "";

if( isset($_GET['consumo']) ){
    $consumo = $_GET['consumo'];

    if( $consumo == ""){
        // Compruebo si no recibo nada en consumo
        $message = 'Error1: Debes introducir una cantidad numérica (float) de consumo';
    }else if( !is_numeric($consumo) ){
        // Compruebo si lo que recibo en consumo no es un número
        $message = 'Error2: Debes introducir una cantidad numérica (float) de consumo';
    }else if( $consumo < 0){
        // Compruebo si la cantidad es negativa
        $message = 'Error3: No se puede introducir una cantidad negativa de consumo';
    }else {
        // Realizar el cálculo
        $importe = calcularImporteConsumo($consumo);

        $message = "Ha consumido {$consumo} m<sup>3</sup> con un coste de de {$importe} €.";
    }

}

require_once 'view.inc.php';

?>