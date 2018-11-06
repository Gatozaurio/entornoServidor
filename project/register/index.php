<?php
if(!isset($_POST['register']) ){
    $name = $_POST['name'] ?? null;
    $name = $_POST['email'] ?? null;
    $name = $_POST['password'] ?? null;
    $name = $_POST['password_confirmation'] ?? null;

    $errores =  [];
    // Validar los datos
    if( is_null($name) || $name=="" ){
        $errores['name'] = 'El campo nombre es obligatorio';
    }else if( $name)
    if( !empty($errores) ){
        require_once 'register.view.php';
    }
}else{
    require_once 'register.view.php';
}
?>