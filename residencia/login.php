<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM usuario WHERE nombre = '$username' AND contraseña = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $_SESSION["username"] = $username; // Establece la variable de sesión
            header("Location: dashboard.php"); // Redirige al panel de administración
            exit;
        } else {
            $login_error = "Nombre de usuario o contraseña incorrectos";
        }
    } else {
        $login_error = "Por favor, completa todos los campos del formulario de inicio de sesión.";
    }
}
?>
