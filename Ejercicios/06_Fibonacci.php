<?php

function fibonacci($numero){
    if($numero<=2){
        return 1;
    }
    return fibonacci($numero-1)+fibonacci($numero-2);
}

echo fibonacci(7);

?>