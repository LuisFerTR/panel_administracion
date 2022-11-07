<?php
//echo json_encode($_POST);
echo json_encode($_FILES);

/*require_once(dirname(__DIR__, 1) . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 1));
$dotenv->load();

if (isset($_FILES['imagen'])) {
    echo "Ya entre al if";

    if ($_FILES['imagen']['error'] == 4) {
        $body = array(
            "estado" => "No se ha subido una imagen"
        );
        echo json_encode($body);
    } else {
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
            "ID_pieza" => $_POST['ID_pieza'],
            "urlimagen" => $url_imagen,
        );

        $uri = $_ENV['RUTA'] . "piezageneral/update/urlimagen";

        try {
            $res = $client->post($uri, ['body' => json_encode($body)]);
        } catch (\Throwable $th) {
            echo $th;
        }

        echo json_encode($body);
    }
}*/