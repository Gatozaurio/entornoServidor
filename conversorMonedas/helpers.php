<?php

function calcularCambio ($dinero, $moneda1, $moneda2){
    $resultado = 0;
    // Euro
    if ($moneda1 === 'eur' && $moneda2 === 'eur'){
        $resultado = $dinero;
    }
    if ($moneda1 === 'eur' && $moneda2 === 'usd'){
        $resultado = $dinero * 1.13810;
    }
    if ($moneda1 === 'eur' && $moneda2 === 'cad'){
        $resultado = $dinero * 1.49092;
    }
    if ($moneda1 === 'eur' && $moneda2 === 'gbp'){
        $resultado = $dinero * 0.88807;
    }
    if ($moneda1 === 'eur' && $moneda2 === 'jpy'){
        $resultado = $dinero * 127.836;
    }
    // Dólar estadounidense
    if ($moneda1 === 'usd' && $moneda2 === 'usd'){
        $resultado = $dinero;
    }
    if ($moneda1 === 'usd' && $moneda2 === 'eur'){
        $resultado = $dinero * 0.87865;
    }
    if ($moneda1 === 'usd' && $moneda2 === 'cad'){
        $resultado = $dinero * 1.30869;
    }
    if ($moneda1 === 'usd' && $moneda2 === 'gbp'){
        $resultado = $dinero * 0.77935;
    }
    if ($moneda1 === 'usd' && $moneda2 === 'jpy'){
        $resultado = $dinero * 112.138;
    }
    // Dólar canadiense
    if ($moneda1 === 'cad' && $moneda2 === 'cad'){
        $resultado = $dinero;
    }
    if ($moneda1 === 'cad' && $moneda2 === 'eur'){
        $resultado = $dinero *  0.67072;
    }
    if ($moneda1 === 'cad' && $moneda2 === 'usd'){
        $resultado = $dinero *  0.76412;
    }
    if ($moneda1 === 'cad' && $moneda2 === 'gbp'){
        $resultado = $dinero *  0.59522;
    }
    if ($moneda1 === 'cad' && $moneda2 === 'jpy'){
        $resultado = $dinero *  85.6729;
    }
    // Libra esterlina
    if ($moneda1 === 'gbp' && $moneda2 === 'gbp'){
        $resultado = $dinero;
    }
    if ($moneda1 === 'gbp' && $moneda2 === 'eur'){
        $resultado = $dinero * 1.12603;
    }
    if ($moneda1 === 'gbp' && $moneda2 === 'usd'){
        $resultado = $dinero * 1.28312;
    }
    if ($moneda1 === 'gbp' && $moneda2 === 'cad'){
        $resultado = $dinero * 1.68001;
    }
    if ($moneda1 === 'gbp' && $moneda2 === 'jpy'){
        $resultado = $dinero * 143.955;
    }
    // Yen japonés
    if ($moneda1 === 'jpy' && $moneda2 === 'jpy'){
        $resultado = $dinero;
    }
    if ($moneda1 === 'jpy' && $moneda2 === 'eur'){
        $resultado = $dinero * 0.00782249;
    }
    if ($moneda1 === 'jpy' && $moneda2 === 'usd'){
        $resultado = $dinero * 0.00891756;
    }
    if ($moneda1 === 'jpy' && $moneda2 === 'cad'){
        $resultado = $dinero * 0.0116723;
    }
    if ($moneda1 === 'jpy' && $moneda2 === 'gbp'){
        $resultado = $dinero * 0.0069466;
    }

    return $resultado;
}