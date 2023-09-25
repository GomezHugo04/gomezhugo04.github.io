<?php 
$conn = mysqli_connect("localhost", "root", "", "registro");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$emailingresado = $_POST["correo-electronico"];
$passingresada = $_POST["password"];

$sql = "SELECT * FROM datos WHERE EMAIL = '".$emailingresado."' and CLAVE = '".$passingresada."'";

$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ocupa = $row["OCUPACIÓN"];
        if ($ocupa == "DOCTOR / A") {
            header("Location: doc/pagina_principal_DOC.html");
        } elseif ($ocupa == "ADMINISTRACIÓN") {
            header("Location: admin/pagina_principal_ADMIN.html");
        } else {
            header("Location: enf/pagina_principal_ENF.html");
        }
    }
} else {
    ?>
    <script>
        var botonMostrar = document.getElementById("click-info");
        var elementoMensaje = document.getElementById("info");

        botonMostrar.addEventListener("click", function() {
        var mensaje = "No se pudo ingresar.";

        elementoMensaje.textContent = mensaje;
        });
    </script>
                    <?php
}
$conn->close();
?>


