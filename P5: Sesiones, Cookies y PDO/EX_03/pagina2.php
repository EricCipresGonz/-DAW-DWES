<?php
session_start();

// Incrementar los puntos acumulados
$_SESSION['puntos_acumulados'] += 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
<p>Tienes <?php echo $_SESSION['puntos_acumulados']; ?> puntos acumulados.</p>
<a href="pagina1.php">Volver a la Página 1</a>
<br>
<a href="index.php">Volver a la Página de Login (Cerrar Sesión)</a>
</body>
</html>