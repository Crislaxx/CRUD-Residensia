<?php
session_start(); // Inicia la sesión

if (isset($_SESSION["username"])) {
    // La variable de sesión "username" está definida, puedes acceder a ella.
} else {
    // La variable de sesión no está definida, maneja el caso apropiado (por ejemplo, redirige al usuario a la página de inicio de sesión).
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Agrega estilos específicos para tu panel de administración aquí */
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .welcome {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .payments {
            margin-top: 20px;
        }
        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }
        .payment-table th, .payment-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        .logout {
            text-align: center;
            margin-top: 20px;
        }
        .logout a {
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Panel de Administración</h1>
    </div>
    <div class="container">
        <div class="welcome">
            <p>Bienvenido, <?php echo $_SESSION["username"]; ?>. Esto es tu panel de administración.</p>
        </div>
        <div class="payments">
            <h2>Registro de Pagos</h2>
            <table class="payment-table">
                <tr>
                    <th>Nombre del Residente</th>
                    <th>Fecha del Pago</th>
                    <th>Cantidad Pagada</th>
                </tr>
                <tr>
                    <td>Residente 1</td>
                    <td>2023-01-15</td>
                    <td>$500.00</td>
                </tr>
                <tr>
                    <td>Residente 2</td>
                    <td>2023-01-20</td>
                    <td>$600.00</td>
                </tr>
                <!-- Agrega más filas según los pagos registrados -->
            </table>
        </div>
        <div class="logout">
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
