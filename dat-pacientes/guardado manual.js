        // ####################### SELECCIÓN DE FILA #######################

        var table = document.getElementById("miTabla");

    var rows = table.getElementsByTagName("tr");
    var selectedRow = null;
    var miBoton = document.getElementById("openModal");
    miBoton.disabled = true;

    for (var i = 0; i < rows.length; i++) {
        rows[i].addEventListener("dblclick", function() {
            selectedRow.classList.remove("seleccionada");
            this.classList.add("seleccionada");
            miBoton.disabled = false;
        });
    }
    for (var i = 0; i < rows.length; i++) {
        rows[i].addEventListener("click", function() {
            if (selectedRow) {
                var nombre = selectedRow.cells[1].textContent;
                nombreSeleccionado.textContent = "Paciente: " + nombre;
            }
            selectedRow = this;
        });
    }