<?php

/**
 * Función que, en base a un pago, calcula la vuelta en euros y su equivalente
 * en efectivo utilizando el menor número de monedas y billetes posible.
 * 
 * @param $importe Precio a pagar en euros
 * @param $pagado Dinero pagado en euros
 * 
 * @return string Toda la información referente a la transacción: importe a pagar,
 * dinero pagado, vuelta y su equivalente en efectivo (billetes y monedas).
 */

function calcularVuelta($importe, $pagado){
    $billetes = array(500, 200, 100, 50, 20, 10, 5);
    $monedas = array(
        "2€"=> 2, 
        "1€"=>1, 
        "50 céntimos"=>0.50, 
        "20 céntimos"=>0.20, 
        "10 céntimos"=>0.10, 
        "5 céntimos"=>0.05, 
        "2 céntimos"=>0.02, 
        "1 céntimo"=>0.01
    );
    $diferencia = $pagado - $importe;

    $mensaje =
    "Importe a pagar: <br />"
    .number_format($importe, 2). "€ <br />
    Importe pagado por el cliente: <br />"
    .number_format($pagado, 2). "€ <br />
    Importe a devolver: <br />"
    .number_format($diferencia, 2, ",", "."). "€";
       
    for ($i = 0; $i < count($billetes); $i++) {
        $billete = $billetes[$i];
        $numBilletes = 0;

        while ($diferencia >= $billete) {
            $numBilletes++;
            $diferencia -= $billete;
        }
            
        if ($numBilletes > 1){
            $mensaje .= "<br /> {$numBilletes} Billetes de {$billete}€";
        } elseif ($numBilletes == 1){
            $mensaje .= "<br /> {$numBilletes} Billete de {$billete}€";
        }
    }

    foreach($monedas as $key => $value){
        $moneda = $value;
        $diferencia = round($diferencia, 2);
        $numMonedas = 0;

        while($diferencia >= $moneda) {
            $numMonedas++;
            $diferencia -= $moneda;
        }

        if($numMonedas > 1){
            $mensaje .= "<br /> {$numMonedas} Monedas de {$key}";
        }elseif($numMonedas == 1){
            $mensaje .= "<br /> {$numMonedas} Moneda de {$key}";
        }
    }

    return "{$mensaje}.";
}
?>