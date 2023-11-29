<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Formulario de Login</h2>
    <form action="procesar_login.php" method="post">
        DNI: <input type="text" name="dni" required><br>
        Nombre: <input type="text" name="nombre" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
