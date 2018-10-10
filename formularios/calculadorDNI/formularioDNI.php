<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Trabajando con formularios</h1> 
        <form action="procesarDNI.php" method="post">
        <label for="name">Introduzca su número de DNI:</label>
        <input type="text" name="dni">
        <br /><br />

        <input type="submit" value="Enviar">
        </form>
    
</body>
</html>