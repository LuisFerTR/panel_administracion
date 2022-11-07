
const form = document.getElementById('actualizar');
const url_fetch = document.getElementById('url_fetch').value;
const url_fetch_imagen = document.getElementById('url_fetch_imagen').value;
const idPieza = document.getElementById('idPieza').value;

form.addEventListener('submit', (e) => {

    e.preventDefault();

    //elementos del form que fueron modificados
    elementos = FormChanges(form);
    //en caso de que no se cambie nada, elementos será un arreglo vacio

    if (typeof elementos !== 'undefined' && elementos.length > 0) {
        console.log(elementos.length);
        for (var i = 0; i < elementos.length; i++) {
            //regresa el campo que cambio elementos[i].id
            console.log(elementos[i].id);
            //USAR .value y .id

            //to do FALTA el caso de la imagenders
            campo = elementos[i].id;
            nuevoValor = elementos[i].value;


            switch (campo) {

                case "nombre":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "nombre": nuevoValor
                    });
                    uri = url_fetch + "update/nombre"
                    break;

                case "cant_total":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "cant_total": parseInt(nuevoValor)
                    });
                    uri = url_fetch + "update/cantTotal"
                    break;

                case "cant_disponible":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "cant_disponible": parseInt(nuevoValor)
                    });
                    uri = url_fetch + "update/cantDisponible"
                    break;

                case "ubicacion":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "ubicacion": parseInt(nuevoValor)
                    });
                    uri = url_fetch + "update/ubicacion"
                    break;

                case "descripcion":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "descripcion": nuevoValor
                    });
                    uri = url_fetch + "update/descripcion"
                    break;

                case "observaciones":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "observaciones": nuevoValor
                    });
                    uri = url_fetch + "update/observaciones"
                    break;

                case "valor":
                    var datos = JSON.stringify({
                        "ID_pieza": parseInt(idPieza),
                        "valor": parseFloat(nuevoValor).toFixed(2)
                    });
                    uri = url_fetch + "update/valor"
                    break;

                case "imagen_pieza":
                    //alert("QUIETO")
                    let imagen = elementos[i].files;
                    imagen = imagen[0];
                    var datos = new FormData();
                    datos.append("ID_pieza", parseInt(idPieza))
                    datos.append("imagen", imagen);
                    uri = url_fetch_imagen
                    break;

                default:
                    console.log(campo);
                    console.log(nuevoValor);
            }


            var opcionesPeticion = {
                method: 'POST',
                body: datos
            };

            fetch(uri, opcionesPeticion)
                .then(response => response.text())
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        }
    }
    else {
        alert("No entro al if");
    }
});

function FormChanges(form) {
    if (typeof form == "string") form = document.getElementById(form);
    if (!form || !form.nodeName || form.nodeName.toLowerCase() != "form") return null;
    /*
        changed arreglo de elementso que cambiaron
        n nodo actual
        c bandera
        e cantidad de elementos 
    */
    var changed = [], n, c, def, o, ol, opt;

    for (var e = 0, el = form.elements.length; e < el; e++) {
        n = form.elements[e];
        c = false;

        switch (n.nodeName.toLowerCase()) {
            // select boxes
            case "select":
                def = 0;
                for (o = 0, ol = n.options.length; o < ol; o++) {
                    opt = n.options[o];
                    c = c || (opt.selected != opt.defaultSelected);
                    if (opt.defaultSelected) def = o;
                }
                if (c && !n.multiple) c = (def != n.selectedIndex);
                break;
            // input / textarea
            case "textarea":
            case "input":

                switch (n.type.toLowerCase()) {
                    case "checkbox":
                    case "radio":
                        // checkbox / radio
                        c = (n.checked != n.defaultChecked);
                        break;
                    default:
                        // standard values
                        c = (n.value != n.defaultValue);
                        break;
                }
                break;

        }

        if (c) changed.push(n);
    }
    return changed;
}