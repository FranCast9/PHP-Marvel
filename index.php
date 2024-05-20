
<?php 

    const API_URL = "https://whenisthenextmcufilm.com/api";
    # Inicializar una nueva sesion de cURL; ch cURL handle
    $ch = curl_init(API_URL);
    // Indicar que queremos recibir el resultado de la peticion y no mostrarla en panta
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Ejecutamos la peticion y guardamos el resultado
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);

    var_dump($data);
?>

<main>
    <h2>La proxima pelicula de Marvel</h2>
</main>