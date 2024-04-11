<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
    <div class="form-box">
        <div class="form-value">
            <form action="login.php" method="POST">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="username" name="username" required>
                    <label for="username">Usuario</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Contraseña</label>
                </div>
                <button type="submit">iniciar</button>
                <div class="register">
                    <p>No tengo una cuenta <a href="registro.php">Registrarse</a></p>
                </div>
            </form>
        </div>
    </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
