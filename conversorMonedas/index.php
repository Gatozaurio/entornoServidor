<?php

require_once('helpers.php');

$resultadoCantidad = 0;

if( isset($_POST['calcular'])){

    $cantidad = $_POST['cantidad'];
    $divisa1 = $_POST['divisa1'];
    $divisa2 = $_POST['divisa2'];

    // Validar si se ha introducido una cantidad
    if( empty($cantidad)){
        $error['cantidad']['empty'] = "Debe introducir una cantidad.";
    }
    // Validar que la cantidad es un número
    if( !is_numeric($cantidad) ){
        $error['cantidad']['not_number'] = "La cantidad debe ser un número.";
    }
    // Validar que la cantidad es superior a cero
    if( $cantidad <= 0 ){
        $error['cantidad']['less_than_zero'] = "La cantidad debe ser superior a cero.";
    }
    if( !isset($error) ){
        $resultadoCantidad = calcularCambio($_POST['cantidad'], $_POST['divisa1'], $_POST['divisa2']);
    }
}


require_once 'view/form.inc.php';



?>