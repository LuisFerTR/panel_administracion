// Botones de actualizar
var anchorsActualizar = document.querySelectorAll('.btnActualizar');
// Botones de eliminar
var anchorsEliminar = document.querySelectorAll('.btnEliminar');

// Recorrer botones de actualizar
for (var i = 0; i < anchorsActualizar.length; i++) {
    // Qué hacer cuando el usuario haga click sobre el botón
    anchorsActualizar[i].addEventListener('click', (e) => {
        e.preventDefault();

        fila = e.currentTarget.parentNode.parentNode
        console.log("Actualizar " + fila.id);

    }, false);
}

// Recorrer botones de eliminar
for (var i = 0; i < anchorsEliminar.length; i++) {
    // Qué hacer cuando el usuario haga click sobre el botón
    anchorsEliminar[i].addEventListener('click', (e) => {
        e.preventDefault();

        fila = e.currentTarget.parentNode.parentNode
        console.log("ELIMINAR " + fila.id);

    }, false);
}
