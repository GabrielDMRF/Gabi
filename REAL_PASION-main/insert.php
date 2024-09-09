<?php
$conexion = mysqli_connect("localhost", "root", "", "real_pasion") or die("Error de conexión");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$confirmacion = $_POST["confirmacion"];

// Verifica si las variables contienen datos
if (empty($nombre) || empty($correo) || empty($contraseña) || empty($confirmacion)) {
    die("Error: No se han enviado todos los campos correctamente.");
}

$sql = "INSERT INTO `registro`(`Nombre`, `Correo`, `Contraseña`, `ConfirmacionContraseña`) VALUES ('$nombre','$correo','$contraseña','$confirmacion')";
$resultado = mysqli_query($conexion, $sql) or die("Error al insertar los registros.");

mysqli_close($conexion);
echo "Datos insertados correctamente";
