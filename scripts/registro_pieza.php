<?php
//echo json_encode($_POST);
//echo json_encode($_FILES);

require_once(dirname(__DIR__, 1) . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();

if (isset($_FILES['imagen'])) {

    $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);

    $new_name = time() . '.' . $extension;

    move_uploaded_file($_FILES['imagen']['tmp_name'], $_ENV['RUTA_IMG'] . $new_name);

    $url_imagen = $_ENV['RUTA'] . "assets/img/" . $new_name;

    $client = new GuzzleHttp\Client([
        'headers' => [
            'Content-Type' => 'application/json'
        ]
    ]);

    $body = array(
        "nombre" => $_POST['nombre'],
        "cant_total" => intval($_POST['cantidad_total']),
        "cant_disponible" => intval($_POST['cantidad_disponible']),
        "ubicacion" => $_POST['ubicacion'],
        "urlimagen" => $url_imagen,
        "descripcion" => $_POST['descripcion'],
        "observaciones" => $_POST['observaciones'],
        "valor" => number_format((float) $_POST['valor'], 2, '.', ',')
    );

    $uri = $_ENV['RUTA'] . "piezageneral";

    try {
        $res = $client->post($uri, ['body' => json_encode($body)]);
    } catch (\Throwable $th) {
        echo $th;
    }



    $data = array(
        'image_source'        =>    $_ENV['RUTA_IMG'] . $new_name
    );

    echo json_encode($body);
}
