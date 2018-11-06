<?php

/**
 * Función que calcula el importe de un consumo de agua
 * en metros cúbicos.
 * 
 * @param $consumo Consumo de agua en metros cúbicos
 * 
 * @return float Importe en euros del consumo de agua.
 */

function calcularImporteConsumo($consumo){
    $tarifas = [0.15, 0.20, 0.35, 0.80];
    $stages = [0, 100, 500, 1000];
    $leftovers = $consumo;
    $total = 0;
    for ($i = 1; $i < count($tarifas); $i++){
        if ($leftovers < 0) break;
        if ($consumo > $stages[$i]){
            $total += ($stages[$i] - $stages[$i-1])*$tarifas[$i-1];
        } else {
            $total += $consumo * $tarifas[$i-1];
        }
    }
    return $total;
}

function calcularImporteConsumoBucle($consumo){
    global $taxes;
    $total = 0;

    foreach($taxes as $limit => $percentage){
        if($consumo > $limit){
            $diff = $consumo - $limit;
            $consumo -= $diff;
            $total += $diff * $percentage;
        }
    }
    return $total;
}

?>