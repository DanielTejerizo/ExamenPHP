<?php
session_start();

if (isset($_SESSION["usuario"])) {
    $storedUser = $_SESSION["usuario"];
    $inputPassword = md5("1234"); // Contraseña correcta

    echo "DNI: " . $storedUser["dni"] . "<br>";
    echo "Nombre: " . $storedUser["nombre"] . "<br>";

    // Validar la contraseña
    if ($storedUser["password"] == $inputPassword) {
        echo "Contraseña " . $storedUser["password"] . " CORRECTA";
    } else {
        echo "Contraseña " . $storedUser["password"] . " INCORRECTA <a href='login.php'>Volver al login</a>";
    }
} else {
    header("Location: login.php");
}
?>
