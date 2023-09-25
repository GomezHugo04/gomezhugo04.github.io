<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Iniciar Sesión | SiDiHos18</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <h2>¡Bienvenido al sistema!</h2>
            <div class="logo">
                <img src="user.jpg" alt="">
            </div>
            <h4>Inicia sesión aquí:</h4>
            <form method="POST" class="form-login">
                <input type="email" name="correo-electronico" placeholder="Correo electrónico" class="entry-var">
                <input type="password" id="password" name="password" class="entry-var" minlength="8" maxlength="15" placeholder="Contraseña">
                <div class="show-pass">
                    <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                    <label for="show-password">Mostrar Contraseña</label>
                    <script src="script-password.js"></script>
                </div>
                <div class="-info-">
                        <h5 id="info"></h5>
                    </div>
                <input type="submit" value="Acceder" class="button-login" id="click-login">
            </form>
        </div>
    </div>
    <?php 
    include("login-proc.php");
    ?>
</body>
</html>