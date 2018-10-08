<?php
    
    // Recibe el nombre y apellidos por GET en la URL y lo imprime en el navegador
    // http://localhost/Ejercicios/Array_superglobal.php?name=Fran&lastname=Delgado
    if( isset($_GET['name'])){
        // Si existen las variables en la URL:
        $name = $_GET['name'];
        $lastname = $_GET['lastname'];
    }else{
        // Si no existen:
        $name = 'No Name';
        $lastname = 'No Lastname';
    }

    echo "{$name} {$lastname}";

?>