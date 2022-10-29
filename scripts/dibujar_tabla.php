<?php

require(dirname(__DIR__, 1) . '/vendor/autoload.php');


function dibujar_tabla(string $tabla)
{
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
    $dotenv->load();

    $recurso = $_ENV['RUTA'] . $tabla . '/all';

    $client = new GuzzleHttp\Client();
    $res = $client->get($recurso);


    var_dump($recurso);
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

dibujar_tabla("piezageneral");
