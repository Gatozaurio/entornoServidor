<?php

// Sentencia If
$a=25;
$b=25;

if($a>$b):
    echo "A es mayor.";
    elseif($a==$b):
    echo "A y B son iguales.";
    else:
    echo "B es mayor.";
endif;

?>