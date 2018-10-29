<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conversor de monedas</title>
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
    .header {
        font-family: Arial;
    }
    </style>
</head>
<body>
    <h1 class="header">Conversor de divisas</h1>
    <hr>
    <form action="" method="post">
        <div class="form_element">
            <input type="text" name="cantidad" placeholder="Cantidad (double)">
            <select name="divisa1">
                <option value="eur">EUR €</option> 
                <option value="usd">USD $</option>
                <option value="cad">CAD $</option>
                <option value="gbp">GBP £</option>
                <option value="jpy">JPY ¥</option>
            </select>
            <select name="divisa2">
                <option value="eur">EUR €</option> 
                <option value="usd">USD $</option>
                <option value="cad">CAD $</option>
                <option value="gbp">GBP £</option>
                <option value="jpy">JPY ¥</option>
            </select>
            <input type="text" name="resultado" value="<?=$resultadoCantidad?>" readonly="readonly">
            <p>
            <input type="submit" name="calcular" value="Calcular cambio">
            <p>
        </div>
        <!-- Errores de validación de cantidad -->
        <?php if( isset($error['cantidad']) ):?>
            <div class = "error">
                <p>Errores de validación de cantidad:</p>
                <ul>
                    <?php foreach ($error['cantidad'] as $message): ?>
                        <li><?=$message?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </form>
</body>
</html>