<?php

function calcularVuelta($importe, $pagado){

    // Separa la parta entera y decimal de $importe y $pagado
    $importeInt = (int)$importe;
    $importeDec = $importe - $importeInt;
    $pagadoInt = (int)$pagado;
    $pagadoDec = $pagado - $pagadoInt;

    // Restas
    $vueltaInt = $pagadoInt - $importeInt;
    $vueltaDec = $pagadoDec - $importeDec;

    return $vueltaInt + $vueltaDec;
}

?>