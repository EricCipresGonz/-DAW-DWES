<?php
try {
    $conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

    if (isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $fecha_nacim = $_POST['fecha_nacim'];
        $admin = 0;

        $sql = "INSERT INTO ecipresg9_usuarios(nombre, correo, contrasena, fecha_nacimiento, admin, imagen)
               VALUES (:nombre, :correo, :contrasena, :fecha_nacim, :admin, NULL )";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->bindParam(':fecha_nacim', $fecha_nacim);
        $stmt->bindParam(':admin', $admin);
        $stmt->execute();
    }

} catch (PDOException $e){
    echo "Hay un error: " . $e->getMessage();
}
?>

<h2>Registro</h2>
<form method="post">
    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" required><br>
    <label for="correo">Correo: </label>
    <input type=email" name="correo" required><br>
    <label for="contrasena">Contraseña: </label>
    <input type="password" name="contrasena" required><br>
    <label for="fecha_nacim">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacim" required><br>
    <input type="submit" name="registrar" value="Registrar"><br>
</form>