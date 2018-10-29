<?php

function calcularCambio ($dinero, $moneda1, $moneda2){
    include ('divisas.php');
    return $dinero * $divisas[$moneda1][$moneda2];
}

?>