<?php

if( isset($_POST['send']) ){

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Validar si están introducidos los campos
    if( empty($username)){
        $error['username']['empty'] = "Debe introducir su nombre de usuario.";
    }

    if( empty($pass)){
        $error['pass']['empty'] = "Debe introducir su contraseña.";
    }

    // Validar que el usuario es correcto
    if( !preg_match("/^[a-zA-Z\d_]*$/", $username)){
        $error['username']['no_valid'] = "Los nombres de usuario sólo pueden contener letras (mayúsculas y minúsculas), números y guiones bajos.";
    }

    // Validar que la contraseña sea segura
    if( !preg_match("/^(?=.*[a-z].*[a-z].*[a-z])(?=.*[A-Z].*[A-Z].*[A-Z])(?=.*[0-9].*[0-9].*[0-9]).*$/", $pass) ){
        $error['pass']['no_valid'] = "La contraseña debe tener al menos 3 minúsculas, 3 mayúsculas y 3 números.";
    }
    // ^.*[a-z]{3,}$

    // Validar longitudes de los campos
    if( strlen($username) < 3 ){
        $error['username']['too_short'] = "El nombre de usuario debe tener al menos 3 caracteres.";
    }

    if( strlen($username) > 18 ){
        $error['username']['too_long'] = "El nombre de usuario no debe exceder los 18 caracteres.";
    }

    if( strlen($pass) < 5 ){
        $error['pass']['too_short'] = "La contraseña debe tener al menos 5 caracteres.";
    }

}else{
    require_once 'views/form.inc.php';
    die();
}

if( !isset($error) ){
    
    require_once 'views/data.inc.php';
} else {
    require_once 'views/form.inc.php';
}

?>