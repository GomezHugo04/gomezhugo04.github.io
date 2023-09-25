<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-table.css">
    <title>Tabla de pacientes</title>
</head>
<body>
    <h1>Pacientes en el sistema:</h1>

    

    <div class="table-container">
        <table border="1" >
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>Nombre</th> 
                    <th>Apellido</th> 
                    <th>DNI</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Estado</th> 
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody id="miTabla">
                <?php

                include("../conn.php");

                $sql = "SELECT * FROM pacientes";
                $result = $conn->query($sql);
            
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["NOMBRE"] . "</td>";
                    echo "<td>" . $row["APELLIDO"] . "</td>";
                    echo "<td>" . $row["DNI"] . "</td>"; 
                    echo "<td>" . $row["EDAD"] . "</td>";
                    echo "<td>" . $row["SEXO"] . "</td>";
                    echo "<td>" . $row["ESTADO"] . "</td>";
                    echo "<td>" . $row["FECHA_REG"] . "</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <button id="openModal">Dar nuevo informe</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h4 id="nombreSeleccionado"></h4>
            <form class ="form-emergente">
                <input type="text" placeholder="Enfermero/Médico responsable del informe (Tú)" class="input-resp">
                <textarea name="informe" placeholder="Aquí se detalla en informe del paciente seleccionado en la tabla." id="text-a" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar Informe" class="submit-form">
            </form>
            <style>
                #nombreSeleccionado {
    text-align: center;
    margin: 0px auto 20px;
}
.input-resp {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    outline: none;
    border: 1.5px solid #0005;
    transition: all .2s;
}
.input-resp:focus {
    border: 1.5px solid #1ABC9C;
    color: #1ABC9C;
}
.form-emergente {
    display: flex;
    flex-direction: column;
}
#text-a {
    box-sizing: border-box;
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    height: 200px;
    min-height: 200px;
    max-height: 500px;
    margin-top: 20px;
    border: 1.5px solid #0005;
    border-radius: 20px;
    padding: 10px;
    outline: none;
    transition: all .2s;
}
#text-a:focus {
    border: 1.5px solid #1ABC9C;
    color: #1ABC9C;
}
.modal-content {
    background: linear-gradient(320deg, #e2e5e5, #1ABC9C);
    border: 3px solid #1ABC9C80;
    border-radius: 20px;
}
.close {
    width: 20px;
    font-size: 20px;
    padding: 5px;
    border-radius: 50%;
}
.submit-form {
    align-self: end;
    margin: 10px;
    padding: 10px;
    font-size: 16px;
    border-radius: 20px;
    background-color: #1ABC9C;
    border: 1.5px solid #1ABC9C;
    transition: all .5s;
    cursor: pointer;
}
.submit-form:hover {
    color: #1ABC9C;
    background-color: #fff;
}
            </style>
        </div>
    </div>
    <script src="script-table.js"></script>

</body>
</html>