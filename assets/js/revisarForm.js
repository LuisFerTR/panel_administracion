
const form  = document.getElementById('actualizar');
const url_fetch = document.getElementById('url_fetch').value;
form.addEventListener('submit', (e) => {

    e.preventDefault();

    console.log(FormChanges('actualizar'));
    /*
    const nombre = form.elements['nombre'].value.trim();
    const cantidad_total = form.elements['cant_total'].value.trim();
    const cant_disponible = form.elements['cant_disponible'].value.trim();
    const ubicacion = form.elements['ubicacion'].value.trim();
    let imagen = form.elements['imagen_pieza'].files;
    const descripcion = form.elements['descripcion'].value.trim();
    const observaciones = form.elements['observaciones'].value.trim();
    const valor = form.elements['valor'].value.trim();

    if(nombre === "" || cant_disponible === "" || cantidad_total === "" || ubicacion === "" || descripcion === "" || observaciones === "" || valor === "" || imagen.length === 0)
    {
        return ;
    }

    imagen = imagen[0];
    
    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("cantidad_total", cantidad_total);
    datos.append("cantidad_disponible", cant_disponible);
    datos.append("ubicacion", ubicacion);
    datos.append("imagen", imagen);
    datos.append("descripcion", descripcion);
    datos.append("observaciones", observaciones);
    datos.append("valor", valor);

    fetch(url_fetch, {
        method:"POST",
        body : datos
    }).then(function(respuesta){
        return respuesta.json();
    }).then(resultado => console.log(resultado));
    */
    
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