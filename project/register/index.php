<?php
if(isset($_POST['register']) ){

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $password_confirmation = $_POST['password_confirmation'] ?? null;

    $errores =  [];
    // Validar los datos
    if( is_null($name) || $name=="" ){
        $errores['name']['empty'] = 'El campo nombre es obligatorio.';
    }
    if( is_null($email) || $email=="" ){
        $errores['email']['empty'] = 'El campo email es obligatorio.';
    }
    if( is_null($password) || $password=="" ){
        $errores['password']['empty'] = 'El campo contraseña es obligatorio.';
    }
    if( is_null($password_confirmation) || $password_confirmation=="" ){
        $errores['password_confirmation']['empty'] = 'La confirmación de la contraseña es obligatoria.';
    }
    // Validación nombre
    if( strlen($name)<8){
        $errores['name']['too_short'] = 'El nombre de usuario debe tener al menos 8 caracteres.';
    }
    if( !preg_match("/^[a-z0-9]+$/",$name)){
        $errores['name']['no_valid'] = 'Los nombres sólo pueden contener eltras minúsculas y números.';
    }
    // Validación email
    if( !preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)){
        $errores['email']['no_valid'] = 'Debe introducir un email válido.';
    }
    if( strlen($password)<6){
        $errores['password']['too_short'] = 'La contraseña debe tener al menos 6 caracteres.';
    }
    if($password != $password_confirmation){
        $errores['password_confirmation']['not_equals'] = 'Las contraseñas no coinciden.';
    }
    if( !isset($errores) ){
        echo "nombre: {$name} <br />";
        echo "nombre: {$email} <br />";
        echo "nombre: {$password} <br />";
        echo "nombre: {$password_confirmation} <br />";
    } else {
        require_once 'register.view.php';
    }

}else{
    require_once 'register.view.php';
} 


?>