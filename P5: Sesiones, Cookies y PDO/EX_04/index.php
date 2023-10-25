

<?php
    $conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


   $sqlCreate = "
    CREATE TABLE ecipresg9_usuarios( 
        id INT AUTO_INCREMENT PRIMARY KEY, 
        nombre VARCHAR(125) NOT NULL, 
        correo VARCHAR(125) NOT NULL, 
        contrasena VARCHAR(255) NOT NULL, 
        fecha_nacimiento DATE, 
        admin BOOLEAN, 
        imagen BLOB 
        )";



                $conexion->exec($sqlCreate);
                $resultado =$conexion->query("SHOW TABLES");
         while ($fila = $resultado->fetch(PDO::FETCH_NUM)) {
             echo $fila[0] . "<br>";
         }

?>




