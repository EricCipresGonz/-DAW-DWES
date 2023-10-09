<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Imprimir Líneas</title>
</head>
<body>
<h1>Formulario Ej3 para printear lineas</h1>

<form action="" method="post">
    <label for="numero">Introduce un número:</label>
    <input type="number" id="numero" name="numero" min="1" required>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];

    echo "<h2>Escribiendo $numero líneas:</h2>";

    for ($i = 1; $i <= $numero; $i++) {
        echo "Línea $i: Pessi mejor que CR7 $numero líneas<br>";
    }
}
?>
</body>
</html>