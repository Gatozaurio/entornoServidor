<?php
    // Recibe un número natural (entero positivo) por GET e imprime
    // los números pares entre 1 y ese número recibido.
    // localhost/Ejercicios/ejercicio.php?numero=10


    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    // Comprobaciones primer número:
    if( !isset($num1)){
        die('No hay numero.');
    } else if(!is_int(intval($num1))){
        die('Debe introducir un número.');
    } else if($num1<0){
        die('Debe introducir un valor mayor que 0.');
    }
    // Comprobaciones segundo número:
    else if( !isset($num2)){
        die('No hay numero.');
    } else if(!is_int(intval($num2))){
        die('Debe introducir un número.');
    } else if($num2<0){
        die('Debe introducir un valor mayor que 0.');
    }else {
        $factor = -($num1 <=> $num2);

        for($i=$num1; $i<=>($num2+factor) ; $i += $factor){
            echo $i."<br>";
        }
    }

    /* if( !isset($_GET['numero1'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero1']))){
        die('Debe introducir un número.');
    } else if($_GET['numero1']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if( !isset($_GET['numero2'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero2']))){
        die('Debe introducir un número.');
    } else if($_GET['numero2']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if($_GET['numero1']<$_GET['numero2']){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        for ($i = $numero1; $i <= $numero2; $i++){
                echo "{$i}<br>";
            
        }
    }else{
        $numero2 = $_GET['numero1'];
        $numero1 = $_GET['numero2'];
        
        for ($i = $numero2; $i >= $numero1; $i--){
                echo "{$i}<br>";
            
        }
    } 
 */

     /* if( !isset($_GET['numero1'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero1']))){
        die('Debe introducir un número.');
    } else if($_GET['numero1']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if( !isset($_GET['numero2'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero2']))){
        die('Debe introducir un número.');
    } else if($_GET['numero2']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if($_GET['numero1']<$_GET['numero2']){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        for ($i = $numero1; $i <= $numero2; $i++){
                echo "{$i}<br>";
            
        }
    }else{
        $numero2 = $_GET['numero1'];
        $numero1 = $_GET['numero2'];
        
        for ($i = $numero2; $i >= $numero1; $i--){
                echo "{$i}<br>";
            
        }
    }  */

    /* if( !isset($_GET['numero1'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero1']))){
        die('Debe introducir un número.');
    } else if($_GET['numero1']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if( !isset($_GET['numero2'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero2']))){
        die('Debe introducir un número.');
    } else if($_GET['numero2']<0){
        die('Debe introducir un valor mayor que 0.');
    } else if($_GET['numero1']<$_GET['numero2']){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        for ($i = $numero1; $i <= $numero2; $i++){
                echo "{$i}<br>";
            
        }
    }else{
        $numero2 = $_GET['numero1'];
        $numero1 = $_GET['numero2'];
        
        for ($i = $numero1; $i <= $numero2; $i++){
                echo "{$i}<br>";
            
        }
    } */

    /* if( !isset($_GET['numero'])){
        die('No hay numero.');
    } else if(!is_int(intval($_GET['numero']))){
        die('Debe introducir un número.');
    } else if($_GET['numero']<0){
        die('Debe introducir un valor mayor que 0.');
    } else{
        $numero = $_GET['numero'];

        for ($i = 1; $i <= $numero; $i++){
            if($i%2==0){
                echo "{$i}<br>";
            }
        }
    } */

    /* if( isset($_GET['numero'])){
        $numero = $_GET['numero'];
        if(is_numeric($numero)){
            for ($i = 1; $i <= $numero; $i++){
                if($i%2==0){
                    echo "{$i}<br>";
                }
            }
        }else{
            die('Debe introducir un número.');
        }
    }else{
        die('No hay numero.');
    } */

?>