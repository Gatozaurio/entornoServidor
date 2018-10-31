<?php


require_once 'funciones.php';

$importe = $_GET['importe'];
$pagado = $_GET['pagado'];

$vuelta = calcularVuelta($importe, $pagado);

require_once 'view/view.inc.php';

?>