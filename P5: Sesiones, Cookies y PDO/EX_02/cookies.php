<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario</title>
</head>
<body>
<h1>Formulario de Usuario</h1>
<form action="cookies.php" method="post">
    <label for="username">Nombre de Usuario:</label>
    <input type="text" id="username" name="username"  required><br>

    <label for="language">Lenguaje de programacion preferido:</label>
    <input type="text" id="language" name="language" required><br>

    <input type="submit" value="Guardar">
</form>

<h2>Información :</h2>
<?php

if(isset($_COOKIE['username']) && isset($_COOKIE['language'])) {
    echo "Nombre de Usuario: {$_COOKIE['username']}<br>";
    echo "Lengua preferida: {$_COOKIE['language']}";
}
?>
</body>
</html>