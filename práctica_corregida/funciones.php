<?php

/**
 * Función que calcula el importe de un consumo de agua
 * en metros cúbicos.
 * 
 * @param $consumo Consumo de agua en metros cúbicos
 * 
 * @return float Importe en euros del consumo de agua.
 */

 // Hacer esto con un bucle
function calcularImporteConsumo($consumo){
    if($consumo <= FRANJA1){
        // Importe menor que FRANJA1 (100)
        $importe = $consumo * IMPORTE_MENOR_FRANJA1;
    }else if($consumo <= FRANJA2){
        // Importe menor que FRANJA2 (500)
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 +
            ($consumo - FRANJA1) * IMPORTE_MENOR_FRANJA2;
    }else if($consumo <= FRANJA3){
        // Importe menor que FRANJA3 (1000)
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 +
            (FRANJA2 -FRANJA1) * IMPORTE_MENOR_FRANJA2 +
            ($consumo - FRANJA2) * IMPORTE_MENOR_FRANJA3;
    }else{
        // Importe mayor que FRANJA3 (1000)
        $importe = FRANJA1 * IMPORTE_MENOR_FRANJA1 +
            (FRANJA2 -FRANJA1) * IMPORTE_MENOR_FRANJA2 +
            (FRANJA3 -FRANJA2) * IMPORTE_MENOR_FRANJA3 +
            ($consumo - FRANJA3) * IMPORTE_MENOR_FRANJA3;
    }

    return $importe;
}

function calcularImporteConsumoBucle($consumo){
    
}

?>