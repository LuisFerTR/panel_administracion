
const form  = document.getElementById('registro');
const url_fetch = document.getElementById('url_fetch').value;
form.addEventListener('submit', (e) => {

    e.preventDefault();
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
    
}); 