<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $password = md5($_POST["password"]);

    // Almacenar datos en la variable de sesión
    $_SESSION["usuario"] = [
        "dni" => $dni,
        "nombre" => $nombre,
        "password" => $password,
    ];

    echo "Datos almacenados. <a href='mostrar_datos.php'>Ver datos</a>";
} else {
    header("Location: login.php");
}
?>
