function buscar_datos(consulta) {
    $.ajax()

}

var search = document.querySelector(".SearchInput");
var table = document.querySelector("table");
var tbody = table.querySelector("tbody");
var filas = tbody.querySelectorAll("tr");

if (search){
search.addEventListener("input", function () {
    var filtro = search.value.toLowerCase();
    for (var i = 0; i < filas.length; i++) {
        var fila = filas[i];
        var celdas = fila.getElementsByTagName("td")
        var mostrarFila = false;

        for (var j = 0; j < celdas.length-2; j++) {
            var celda = celdas[j];
            var contenido = celda.innerHTML.toLowerCase();
            if (contenido.indexOf(filtro) > -1) {
                mostrarFila = true;
                break;
            }
        }

        if (mostrarFila) {
            fila.style.display = "";
        } else {
            fila.style.display = "none";
        }

    }
})
}