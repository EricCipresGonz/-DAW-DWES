<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena de texto</title>
</head>
<body>
<h1>Cadena de texto</h1>

<form action="" method="post">
    <label for="cadena">Introduce una cadena de texto:</label>
    <input type="text" id="cadena" name="cadena" ">
    <button type="submit">Enviar</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadena = $_POST['cadena'];

    echo 'Texto: ' . $cadena . '<br>';
    echo 'Longitud: ' . strlen($cadena) . ' caracteres';


}
?>
</body>
</html>