<?php
/* Constantes:
- Una constante no lleva el símbolo del dolar.
- Antes de la 5.3 solo podíamos usar define() para definir constantes.
- Después de la 5.3 se puede usar const para definirlas.
- A partir de la 5.6 se pueden usar arrays.
- No pueden ser redefinidas o eliminadas.
*/

// const
const CONSTANTE="Soy una constante";
const NUMERO=1;
const COLORES=array('Amarillo', 'Azul', 'Rojo');
echo CONSTANTE."<br>";
echo NUMERO."<br>";
echo COLORES[0]."<br>";

// define()
define('CONSTANTE2', "Soy la constante 2");
define('COLORES2', array('Naranja', 'Verde', 'Morado'));
echo CONSTANTE2."<br>";
echo COLORES2[0];

/* Constantes predefinidas:
PHP_INT_MIN - Devuelve el número entero más pequeño admitido en PHP.  || 7.0.0
PHP_FLOAT_DIG - Devuelve el número de dígitos decimales que puede redondear un float.  || 7.2.0
PHP_FLOAT_EPSILON - Devuelve el menor número positivo.  || 7.2.0
PHP_FLOAT_MIN - Devuelve el menor número de punto flotante representable.  || 7.2.0
PHP_FLOAT_MAX - Devuelve el mayor número de punto flotante representable.  || 7.2.0
PHP_FD_SETSIZE - Número máximo de descripciones de ficheros para seleccionar llamadas al sistema.  || 7.1.0
*/

/* Excepciones de constantes:
   Cambian su valor dependiendo de donde se encuentren
   __LINE__ - El número de línea actual en el fichero.
   __FILE__ - Ruta completa y nombre del fichero con enlaces simbólicos resueltos.
   __DIR__ - Directorio del fichero. 
   __FUNCTION__ - Nombre de la función.
   __CLASS__ - Nombre de la clase.
   __TRAIT__ - El nombre del trait.
   __METHOD__ - Nombre del método de la clase.
   __NAMESPACE__ - Nombre del espacio de nombres actual.  
    */
?>