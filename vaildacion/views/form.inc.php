<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario de ejemplo</title>
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
    <h1>Formulario</h1>
    <form action="" method="post" novalidate> <!-- novalidate para que no funcione -->
    <div class="form_element">
        <label for="name">Nombre</label>
        <input type="text" name="name">
        <!-- Errores de validación del nombre -->
        <?php if( isset($error['name']) ):?>
            <div class = "error">
                <p>Errores de validación en el nombre:</p>
                <ul>
                    <?php foreach ($error['name'] as $message): ?>
                    <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <label for="surnames">Apellidos</label>
        <input type="text" name="surnames">
        <!-- Errores de validación de los apellidos -->
        <?php if( isset($error['surnames']) ):?>
            <div class = "error">
                <p>Errores de validación en los apellidos:</p>
                <ul>
                    <?php foreach ($error['surnames'] as $message): ?>
                    <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <label for="age">Edad</label>
        <input type="number" name="age">
        <!-- Errores de validación de la edad -->
        <?php if( isset($error['age']) ):?>
            <div class = "error">
                <p>Errores de validación en la edad:</p>
                <ul>
                    <?php foreach ($error['age'] as $message): ?>
                    <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <label for="email">Email</label>
        <input type="email" name="email">
        <!-- Errores de validación de la edad -->
        <?php if( isset($error['email']) ):?>
            <div class = "error">
                <p>Errores de validación en el email:</p>
                <ul>
                    <?php foreach ($error['email'] as $message): ?>
                    <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <div class="form_element">
        <label for="pass">Contraseña</label>
        <input type="password" name="pass">
        <!-- Errores de validación de la edad -->
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
        <input type="submit" name="send" value="Dar de alta">
    </div>
    </form>
    
</body>
</html>