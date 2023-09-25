<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-register-admin.css">
    <title>Regístro de Administración | SiDiHos18</title>
</head>
<body>
    <div class="main-container">
        <div class="container">
            <h2>¡Registro de administración!</h2>
            <h4>Regístra el sector aquí:</h4>
            <form method="post" class="form-login">
                <input type="text" name="name" placeholder="Nombre del sector de administración" class="entry-var" autocomplete="off" required>
                <input type="email" name="correo-electronico" placeholder="Correo electrónico" class="entry-var" autocomplete="off" required>
                <input type="password" name="password" class="entry-var" minlength="8" maxlength="15" placeholder="Contraseña" autocomplete="off" required>
                <input type="password" id="password" name="confirm-password" class="entry-var" minlength="8" maxlength="15" placeholder="Confirmar contraseña" autocomplete="off" required>
                <div class="show-pass">
                    <input type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                    <label for="show-password">Mostrar Contraseña</label>
                    <div class="-info-">
                        <h5 id="info"></h5>
                    </div>
                    <script src="../script-password.js"></script>
                </div>
                    <input type="submit" id="click-info" value="Registrar" class="button-login" name="register">
            </form>
        </div>
        <h6 class="go-to-login">¿Ya existe una cuenta para que puedas ingresar? <a href="../login.php"> Inicia Sesión.</a></h6>
    </div>
    <?php 
        include("register-admin-proc.php");
    ?>
</body>
</html>