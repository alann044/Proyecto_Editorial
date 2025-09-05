<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Empleado</title>
</head>
<body>
    <h2>Registro de Empleado</h2>
    
    <form action="empleado_registrar.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label for="correo">Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña" required><br><br>

        <label for="puesto">Puesto:</label><br>
        <select name="puesto" required>
            <option value="">-- Selecciona un puesto --</option>
            <option value="Gerente">Gerente</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Empleado">Empleado</option>
            <option value="Practicante">Practicante</option>
        </select><br><br>


        <button type="submit">Registrar</button>
    </form>
</body>
</html>
