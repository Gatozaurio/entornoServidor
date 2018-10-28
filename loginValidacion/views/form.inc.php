<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <style>
    .form_element {
            margin: 10px;
    }
    .error {
        color: red;
        border: 1px solid red;
        margin: 10px;
        padding: 5px;
    }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
    <div class="form_element">
        <label for="username">Usuario: </label>
        <input type="text" name="username">
        <!-- Errores de validación del usuario -->
        <?php if( isset($error['username']) ):?>
            <div class = "error">
                <p>Errores de validación en el usuario:</p>
                <ul>
                    <?php foreach ($error['username'] as $message): ?>
                        <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass">
        <!-- Errores de validación de la contraseña -->
        <?php if( isset($error['pass']) ):?>
            <div class = "error">
                <p>Errores de validación en la contraseña:</p>
                <ul>
                    <?php foreach ($error['pass'] as $message): ?>
                        <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <input type="submit" name="send" value="Entrar">
    </div>
    </form>
</body>
</html>