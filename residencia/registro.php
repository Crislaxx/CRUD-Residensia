<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if (!empty($username) && !empty($password)) {
        // Aquí deberías realizar la inserción en la base de datos
        // Recuerda aplicar medidas de seguridad como hash de contraseñas
        // Consulta la documentación de tu base de datos para realizar la inserción
        $sql = "INSERT INTO usuario (nombre, contraseña) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            // Registro exitoso, puedes redirigir a la página de inicio de sesión
            header("Location: index.php");
            exit;
        } else {
            $login_error = "Error en el registro: " . $conn->error;
        }
    } else {
        $login_error = "Por favor, completa todos los campos del formulario de registro.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="registro.php" method="POST">
                    <h2>Registro</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" id="full_name" name="full_name" required>
                        <label for="full_name">Nombre Completo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <input type="text" id="phone" name="phone" required>
                        <label for="phone">Teléfono</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="username" name="username" required>
                        <label for="username">Correo Electrónico</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="password">Contraseña</label>
                    </div>
                    <button type="submit">Registrarse</button>
                    <div class="register">
                        <p>¿Ya tienes una cuenta? <a href="index.php">Iniciar Sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

