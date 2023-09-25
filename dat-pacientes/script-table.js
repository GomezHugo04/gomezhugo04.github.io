    // ####################### ABRIR VENTANA EMERGENTE #######################

        document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'block';
    });

    // ####################### CERRAR VENTANA EMERGENTE CON LA CRUZ #######################

        document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'none';
    });

    // ####################### ABRIR VENTANA EMERGENTE PRESIONANDO FUERA DE LA VENTANA #######################

    window.addEventListener('click', function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
    var table = document.getElementById("miTabla");
    var rows = table.getElementsByTagName("tr");
    var selectedRow = null;
    openModal.disabled = true;

    for (var i = 0; i < rows.length; i++) {
        rows[i].addEventListener("dblclick", function() {
            openModal.disabled = false;
            if (selectedRow) {
                selectedRow.classList.remove("seleccionada");
            }
            this.classList.add("seleccionada");
            selectedRow = this;
            var nombre = selectedRow.cells[1].textContent;
            var apellido = selectedRow.cells[2].textContent;
            nombreSeleccionado.textContent = "Paciente: " + nombre + " " + apellido;
        });

    }
