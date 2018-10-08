<?php

$square =[
    [2,7,6],
    [9,5,1],
    [4,3,8]
];

function isMagic($square){
    $sumLeftToRightDiag = 0;
    $sumRightToLeftDiag = 0;
    $dim = count($square);
    $isMagic = true;

    // Checks left to right diagonal
    for ($i=0; $i < $dim; $i++){
        $sumLeftToRightDiag += $square[$i][$i];
    }
    if ($sumLeftToRightDiag != 15){
        $isMagic=false;
    }

    // Checks right to left diagonal
    for ($i=0; $i < $dim; $i++){
        for ($j=2; $j > 0; $j--){
            $sumRightToLeftDiag += $square[$i][$j];
        }
    }

    // Checks columns and rows
     for ($i=0; $i < $dim; $i++){
        $sumRow = 0;
        $sumCol = 0;
        for ($j=0; $j < $dim; $j++){
            $sumRow += $square[$i][$j];
            $sumCol += $square[$j][$i];
        }
        if($sumRow !=15 || $sumRow !=15){
            $isMagic=false;
        }
    }
    
    return $isMagic?'Es mágico.':'No es mágico.';
}

echo isMagic($square);

?>