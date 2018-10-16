<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Datos enviados</title>
</head>
<body>
    <h1>Datos enviados:</h1>
    <strong>Nombre: </strong> <?=$_POST['name']?> <br />
    <strong>Apellidos: </strong> <?=$_POST['surnames']?> <br />
    <strong>Edad: </strong> <?=$_POST['age']?> <br />
    <strong>Email: </strong> <?=$_POST['email']?> <br />
    <strong>Contraseña: </strong>  <?=$_POST['pass']?>
</body>
</html>