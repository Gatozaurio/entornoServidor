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
    </style>
</head>
<body>
<h1>Conversor de monedas</h1>
<hr>
<div class="form_element">
    <input type="text" name="cantidad" placeholder="Cantidad (double)">
    <select name="moneda1">
        <option value="eur">Euro €</option> 
        <option value="usd">USD $</option>
        <option value="cad">CAD $</option>
        <option value="usd">Libra £</option>
        <option value="usd">Yen ¥</option>
    </select>
    <select name="moneda2">
        <option value="eur">Euro €</option> 
        <option value="usd">USD $</option>
        <option value="cad">CAD $</option>
        <option value="usd">Libra £</option>
        <option value="usd">Yen ¥</option>
    </select>
    <input type="text" name="resultado" placeholder="Resultado" readonly="readonly">
    <p>
    <input type="submit" name="send" value="Calcular cambio">
    <p>
</div>
    
</body>
</html>