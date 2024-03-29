<?php

require_once(dirname(__DIR__, 1) . '/vendor/autoload.php');


function dibujar_tabla(string $tabla)
{
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
    $dotenv->load();

    $recurso = $_ENV['RUTA'] . $tabla . '/all';

    $client = new GuzzleHttp\Client();
    $res = $client->get($recurso);
    $tablaSQL = json_decode($res->getBody(), true);

    $columnas = array_keys($tablaSQL[0]);
    array_push($columnas, 'Acciones');

    echo '<table id="piezas" class="table table-bordered table-hover table-responsive">';
    // Display table header
    echo '<thead>';
    echo '<tr>';
    foreach ($columnas as $columna) {
        echo '<th>' . htmlspecialchars($columna) . '</th>';
    }
    echo '</tr>';
    echo '</thead>';

    if ($tablaSQL) {
        foreach ($tablaSQL as $fila) {
            $id = $fila['ID_pieza'];

            echo '<tr id="' . htmlspecialchars($id) . '">';
            foreach ($fila as $celda) {
                echo '<td>' . htmlspecialchars($celda) . '</td>';
            }

            // Crear botón actualizar
            $botonActualizar = '<a href="./actualizar_pieza.php?id=' . htmlspecialchars($id) . '" class="btn btn-primary btn-sm rounded-0 btnActualizar" style="margin-bottom: 1em;" id="btnActualizar' . htmlspecialchars($id) . '"> <i class="fa fa-edit"> </i> </a>';

            // Crear botón eliminar
            $botonEliminar = '<a href="#" class="btn btn-danger btn-sm rounded-0 btnEliminar" id="btnEliminar' . htmlspecialchars($id) . '"> <i class="fas fa-trash-alt"> </i> </a>';

            echo '<td class="d-flex flex-column justify-content-between">' . $botonActualizar . ' ' . $botonEliminar . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="' . $res->getStatusCode() . '">No hay registros</td></tr>';
    }

    echo '<table>';
}
