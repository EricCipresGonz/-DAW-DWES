<?php
$contador = isset($_COOKIE['contador']) ? (int)$_COOKIE['contador'] : 0;
$contador++;

setcookie('contador', $contador, time() + 3600);

echo "Contador de numero de visitas del navegador: $contador";
?>