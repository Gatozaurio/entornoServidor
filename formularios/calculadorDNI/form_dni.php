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
    <h1>Calcula la letra del DNI</h1>
        <form action="" method="post"> <!-- Al no poner action coge el script del index-->
            <label for="name">Introduzca su número de DNI: </label>
            <input type="text" name="dni">

            <?php ?>

            <br /><br />

            <label for="name">Letra: </label>
            <input type="text" name="letra" value="" >
            <br /><br />

            <input type="submit" value="Enviar">
        </form>
    
</body>
</html>