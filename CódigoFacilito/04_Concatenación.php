<?php

// Comillas dobles
// Dentro de las comillas dobles se pueden utilizar las secuencias de escape.
// Concatenación
// Forma 1
$palabra="Hola ";
$union=$palabra."mundo.";
echo $union."<br><br>";
// Forma 2
$palabra.="mundo 2.";
echo $palabra."<br><br>";

// Interpolación
// A partir de php5 la interpolación es más rápida que la concatenación.
// Forma 1
echo "Esto es un $palabra Hasta luego.";
echo "<br><br>";
// Forma 2
echo "Esto es un {$palabra}222 Hasta luego.";
echo "<br><br>";

/* Secuencias de escape:
    \a - alarma, es decir, el carácter BEL (07 hex) 
    \cx - "control-x", donde x es cualquier carácter 
    \e - escape (1B hex) 
    \f - salto de página (0C hex) 
    \n - nueva línea (0A hex)
    \r - retorno de carro (0D hex) 
    \R - salto de línea: coincide con \n, \r y \r\n 
    \t - tabulador (09 hex) 
    \xhh - carácter con el código hexadecimal hh 
    \ddd - carácter con el código octal ddd, o retroreferencia
    */
    

// Comillas simples
// No se puede utilizar la interpolación con comillas simples ni secuencias de escape.
echo '$palabra hola.\n';
echo "<br><br>";

// Imprimir ' dentro de comillas simples:
echo 'I\'m';
echo "<br><br>";

// Imprimir \ dentro de comillas simples:
echo 'Mi directorio es E:\\Escritorio';
echo "<br><br>";

// En las comillas simples podemos usar el $ sin problema:
echo '50$';
?>