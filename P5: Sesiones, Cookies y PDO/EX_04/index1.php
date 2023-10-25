<?php

$conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
$resultados = $conexion->query("SELECT * FROM usuarios");

foreach ($resultados as $fila) {
    echo $fila['id'] . " - " . $fila['nombre'] . '</br>';
}
?>