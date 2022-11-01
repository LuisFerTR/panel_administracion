// TODO: ¿Debería eliminar la imagen de la pieza del servidor?

// URL API
const url_fetch = document.getElementById('url_fetch').value;

// Botones de actualizar
var anchorsActualizar = document.querySelectorAll('.btnActualizar');
// Botones de eliminar
var anchorsEliminar = document.querySelectorAll('.btnEliminar');

// Recorrer botones de actualizar
for (var i = 0; i < anchorsActualizar.length; i++) {
    // Qué hacer cuando el usuario haga click sobre el botón
    anchorsActualizar[i].addEventListener('click', (e) => {
        e.preventDefault();

        fila = e.currentTarget.parentNode.parentNode;
        piezaID = fila.id;

    }, false);
}

// Recorrer botones de eliminar
for (var i = 0; i < anchorsEliminar.length; i++) {
    // Qué hacer cuando el usuario haga click sobre el botón
    anchorsEliminar[i].addEventListener('click', (e) => {
        e.preventDefault();

        fila = e.currentTarget.parentNode.parentNode;
        fila.parentNode.removeChild(fila);


        // Petición para eliminar pieza
        var headers = new Headers();
        headers.append("Content-Type", "application/json");

        var datos = JSON.stringify({
            "ID_pieza": parseInt(fila.id)
        });

        var opcionesRequest = {
            method: 'DELETE',
            headers: headers,
            body: datos
        };

        uri = url_fetch + "delete"

        fetch(uri, opcionesRequest)
            .then(function (respuesta) {
                return respuesta.json();
            }).then(resultado => console.log(resultado));

    }, false);
}
