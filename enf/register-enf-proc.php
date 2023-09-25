<?php 
    include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        if (strlen($_POST['name']) >= 1 && strlen($_POST['correo-electronico']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['confirm-password'])) {
            
            $pass1 = $_POST["password"];
            $pass2 = $_POST["confirm-password"];

            if ($pass1 == $pass2) {
                $name = trim($_POST['name']);
                $email = trim($_POST['correo-electronico']);
                $password = trim($_POST['password']);
                $surname = trim(" --- ");
                $esp = trim(" --- ");
                $dni = trim(" --- ");
                $ocup = trim("ENFERMERÍA");
                $fechareg = date("d/m/y");
                $consulta = "INSERT INTO datos(NOMBRE, APELLIDO, ESPECIALIDAD, DNI, EMAIL, CLAVE, OCUPACIÓN, FECHA_REG) VALUES ('$name', '$surname', '$esp', '$dni', '$email', '$password', '$ocup', '$fechareg')";
                $resultado = mysqli_query($conn, $consulta);

                if ($resultado) {
                    ?>
                    <script>
                        var botonMostrar = document.getElementById("click-info");
                        var elementoMensaje = document.getElementById("info");

                        botonMostrar.addEventListener("click", function() {
                        var mensaje = "Usted se registró exitosamente.";
                        
                        elementoMensaje.textContent = mensaje;
                    });
                    </script>
                    <?php
                    header("Location: ../login.php"); 
                }
            } else {
                ?>
                <script>
                        var botonMostrar = document.getElementById("click-info");
                        var elementoMensaje = document.getElementById("info");

                        botonMostrar.addEventListener("click", function() {
                        var mensaje = "Las contraseñas ingresadas no coinciden.";

                        elementoMensaje.textContent = mensaje;
                    });
                    </script>
                <?php    
            }   
        } else {
            ?>
            <script>
                        var botonMostrar = document.getElementById("click-info");
                        var elementoMensaje = document.getElementById("info");

                        botonMostrar.addEventListener("click", function() {
                        var mensaje = "Porfavor, complete los campos de texto.";

                        elementoMensaje.textContent = mensaje;
                    });
                    </script>
            <?php    
        }
    }
}  
?>