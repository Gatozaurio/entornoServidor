<?php

function unidadesAstronomicas ($distancia){
    return $distancia/149600000;
}



function kmsToLightYear($distancia){
    return $distancia/9460730472580;
}

echo unidadesAstronomicas(4504300000);
echo "<br><br>";
echo kmsToLightYear(4504300000);

?>