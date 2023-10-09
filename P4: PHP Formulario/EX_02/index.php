<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>
<body>
<h1>Calculo</h1>

<form action="" method="post">
    <label for="calculo">Operación:</label>
    <input type="text" id="calculo" name="calculo">
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $calculo = $_POST['calculo'];

    $resultado = eval("return $calculo;");

    if ($resultado !== null) {
        echo 'Resultado: ' . $resultado;
    } else {
        echo '<h2>Error en el cálculo:</h2>';
    }
}
?>
</body>
</html>