<?php

function obtenerMedia(...$nums){
    $media = 0;
    $max = PHP_INT_MIN;
    $min = PHP_INT_MAX;

    foreach($nums as $num){
        $media+=$num;
        if($num>$max){
            $max=$num;
        }
        if($num<$min){
            $min=$num;
        }
    }
    echo "La media es: " . $media/count($nums) . ".<br>";
    echo "La mayor nota es: " . $max . ".<br>";
    echo "La menor nota es: " . $min . ".";

}

obtenerMedia(2, 3, 5, 8, 2);
?>