<?php

if( isset($_POST['form_alta']) ){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $extranjero = (isset($_POST['extranjero'])?"Sí":"No");

    // Verificar que se han introducido todos los campos

    if( empty($nombre) ) {
        $error['nombre'] = [ 'campo_vacío' => 'El campo nombre es obligatorio'];
    }

    if( empty($apellidos) ) {
        $error['apellidos'] = [ 'campo_vacío' => 'El campo apellidos es obligatorio'];
    }

    if( empty($edad) ) {
        $error['edad'] = [ 'campo_vacío' => 'El campo edad es obligatorio'];
    }

    if( empty($email) ) {
        $error['email'] = [ 'campo_vacío' => 'El campo email es obligatorio'];
    }

    if( empty($sexo) ) {
        $error['sexo'] = [ 'campo_vacío' => 'El campo sexo es obligatorio'];
    }

    // Validación
    if( !preg_match("/^[a-zA-Z ]+$/", $nombre) ){ // Encontrar la solución a esto
        echo "El campo nombre sólo acepta letras (mayúsculas, minúsculas, sin tilde) y espacios."; // !preg_match("/[a-zA-Z ]+/", $nombre || páginas chulas: https://regexr.com/ www.phpliveregex.com
    }

    require_once 'form_sended.inc.php';

}else{

    require_once 'form.inc.php';

}
?>