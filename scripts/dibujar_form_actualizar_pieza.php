<?php

require_once(dirname(__DIR__, 1) . '/vendor/autoload.php');

function dibujar_form_actualizar_pieza()
{
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
    $dotenv->load();

    $uri = $_ENV['RUTA'] . 'piezageneral/id/' . $_GET['id'];

    $client = new GuzzleHttp\Client();
    $res = $client->get($uri);
    $pieza = json_decode($res->getBody(), true);

    echo '<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" value = "' . htmlspecialchars($pieza['nombre']) . '" placeholder="Nombre de la pieza"> </div>';

    echo '<div class="form-group">
    <label for="cant_total">Cantidad total</label>
    <input type="number" class="form-control" id="cant_total" value = "' . htmlspecialchars($pieza['cant_total']) . '" placeholder="Cantidad total" min="0" value="0" step="1"> </div>';

    echo '<div class="form-group">
    <label for="cant_disponible">Cantidad disponible</label>
    <input type="number" class="form-control" id="cant_disponible" value = "' . htmlspecialchars($pieza['cant_disponible']) . '" placeholder="Cantidad disponible" min="0" value="0" step="1"> </div>';

    echo '<div class="form-group">
    <label>Ubicación</label>
    <select class="form-control" id="ubicacion" value = "' . htmlspecialchars($pieza['ubicacion']) . '" >
        <!--- Generar con php --->
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select> </div>';

    echo '<div class="form-group">
    <label for="imagen-pieza">Imagen</label>

    <div class="custom-file">
        <input type="file" class="custom-file-input" id="imagen_pieza" accept="image/png, image/jpeg">
        <label class="custom-file-label" for="imagen_pieza">Subir imagen</label>
    </div> </div>';

    echo '<div class="form-group">
    <label>Descripción</label>
    <textarea class="form-control" id="descripcion" rows="3" placeholder="Describe la pieza">' . htmlspecialchars($pieza['descripcion']) . '</textarea> </div>';

    echo '<div class="form-group">
    <label>Observaciones</label>
    <textarea class="form-control" id="observaciones" rows="3" placeholder="Observaciones de la pieza">' . htmlspecialchars($pieza['observaciones']) . '</textarea> </div>';

    echo '<label for="valor">Valor</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">$</span>
        </div>
        <input type="number" class="form-control" id="valor"  value = "' . htmlspecialchars($pieza['valor']) . '" placeholder="Valor" min="0" value="0" step="0.01">
    </div> ';
}
