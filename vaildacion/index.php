<?php

// if ( isset($_POST) ){
//   echo 'Formulario enviado';    // Mala comprobación
// }

require_once('helpers.php');


if( isset($_POST['send']) ){ 

    $name = $_POST['name'];
    $surnames = $_POST['surnames'];
    // $age = (int) $_POST['age']; // Este casting hace que si no es un número $age sea un 0
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validar si tenemos todos los campos
    if( empty($name) ){
        $error['name']['empty'] = "El nombre es requerido.";
    } 

    if( empty($surnames) ){
        $error['surnames']['empty'] = "Los apellidos son requeridos.";
    }

    if( empty($_POST['age']) ){
        $error['age']['empty'] = "La edad es requerida.";
    } 

    if( empty($email) ){
        $error['email']['empty'] = "El email es requerido.";
    } 
    
    if( empty($pass) ){
        $error['pass']['empty'] = "La contraseña es requerida.";
    }

    // Validar que el nombre es correcto
    if( !is_string($name) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s]*$/", $name)){
        $error['name']['no_valid'] = "El nombre puede tener letras y espacios.";
    }
    // Validar los apellidos
    if( !is_string($surnames) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s-]*$/", $surnames)){
        $error['surnames']['no_valid'] = "Los apellidos pueden tener letras, espacios y guiones.";
    }
    // Validar la edad
    if( !filter_var($_POST['age'], FILTER_VALIDATE_INT) ){
        $error['age']['no_valid'] = "La edad debe ser un número entero.";
    }
    // Validar el email
    if( !is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL) ){
        $error['email']['no_valid'] = "Debes introducir un email válido";
    }

    // Validar longitudes de los campos
    if( strlen($name) < 3 ){
        $error['name']['length'] = "El nombre debe tener al menos tres letras.";
    }

    if( strlen($surnames) < 3 ){
        $error['surnames']['length'] = "Los apellidos deben tener al menos tres letras.";
    }

    if( strlen($pass) < 5 ){
        $error['pass']['length'] = "La contraseña debe tener al menos cinco letras.";
    }
}else{
    require_once 'views/form.inc.php';
    die();
}

if( !isset($error) ){
    require_once 'views/data.inc.php'; // Si no hay errores se muestra la página con los datos
}else{
    // printDataFormatted($error);
    require_once 'views/form.inc.php'; // Si hay errores se muestra el formulario de nuevo
}



?>