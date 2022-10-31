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
            echo '<tr id="' . htmlspecialchars($fila['ID_pieza']) . '">';
            foreach ($fila as $celda) {
                echo '<td>' . htmlspecialchars($celda) . '</td>';
            }
            $botonActualizar = '<a href="#" class="btn btn-primary btn-sm rounded-0" style="margin-bottom: 1em;"> <i class="fa fa-edit"> </i> </a>';
            $botonEliminar = '<a href="#" class="btn btn-danger btn-sm rounded-0"> <i class="fas fa-trash-alt"> </i> </a>';
            echo '<td class="d-flex flex-column justify-content-between">' . $botonActualizar . ' ' . $botonEliminar . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="' . $res->getStatusCode() . '">No hay registros</td></tr>';
    }

    echo '<table>';
    /*

    echo '<table>';
    // Display table header
    echo '<thead>';
    echo '<tr>';
    foreach ($res->fetch_fields() as $column) {
        echo '<th>' . htmlspecialchars($column->name) . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    // If there is data then display each row
    if ($data) {
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="' . $res->field_count . '">No records in the table!</td></tr>';
    }
    echo '</table>';
    */
}
