<?php


require_once 'funciones.php';

$mensaje = "";

if( isset($_GET['importe']) && isset($_GET['pagado'])){
    $importe = $_GET['importe'];
    $pagado = $_GET['pagado'];

    // VALIDACIONES
    if($importe == ""){  
        // Comprueba que se introduce importe
        $mensaje = "Error: Debe introducir un importe. <br />";
    }elseif($pagado == ""){
        // Comprueba que se introduce pagado
        $mensaje = "Error: Debe introducir un pago. <br />";
    }elseif(!is_numeric($importe)){
        // Comprueba que importe sea un número
        $mensaje = "Error: El importe debe ser una cantidad numérica (float). <br />";
    }elseif(!is_numeric($pagado)){
        // Comprueba que pagado sea un número
        $mensaje = "Error: El pago debe ser una cantidad numérica (float). <br />";
    }elseif($importe < 0){
        // Comprueba que la cantidad no sea negativa
        $mensaje = "Error: El importe no puede ser menor que 0. <br />";
    }elseif($pagado < 0){
        // Comprueba que la cantidad no sea negativa
        $mensaje = "Error: El pago no puede ser menor que 0. <br />";
    }elseif($pagado < $importe){
        // Comprueba que pagado no sea menor que importe
        $mensaje = "Error: El pago no puede ser menor que el importe. <br />";
    }else{
        // Calcula la vuelta
        $mensaje = calcularVuelta($importe, $pagado);
    }

}

require_once 'view/view.inc.php';

?>