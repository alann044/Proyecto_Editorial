<?php
// Conexión a la BD
$conexion = new mysqli("localhost:3307", "root", "", "gandhi_asistencia");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$puesto = $_POST['puesto'];

// Encriptar contraseña
$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar en la tabla empleados
$sql = "INSERT INTO empleados (nombre, correo, contraseña, puesto) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssss", $nombre, $correo, $contraseña_hash, $puesto);

if ($stmt->execute()) {
    echo " Empleado registrado correctamente.<br>";
    echo " ID asignado: " . $stmt->insert_id . "<br>";
    echo " Fecha y hora: " . date("Y-m-d H:i:s") . "<br>";
    echo "<a href='empleado_form.php'>Registrar otro empleado</a>";
} else {
    echo " Error: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>
