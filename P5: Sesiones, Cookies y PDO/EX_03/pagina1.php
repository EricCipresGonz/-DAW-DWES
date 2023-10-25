<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;
    $_SESSION['puntos_acumulados'] = 0;
}

$_SESSION['puntos_acumulados'] += 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página 1</title>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['username']; ?></h1>
<p>Tienes <?php echo $_SESSION['puntos_acumulados']; ?> puntos acumulados.</p>
<a href="pagina2.php">Ir a la Página 2</a>
<br>
<a href="index.php">Volver a la Página de Login (Cerrar Sesión)</a>
</body>
</html>