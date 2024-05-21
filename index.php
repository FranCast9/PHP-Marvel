
<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la peticion y guaramos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Web que muestra la siguiente peliculal de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima pelicula de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>

<main>
    <div>
        <h2>La próxima pelicula de Marvel</h2>
    </div>

    <div class="movie-info">
        <h2><?= $data["title"] ?> se estrena en <?= $data["days_until"]?> dias</h2>
        <img src="<?= $data["poster_url"] ?>" width= "300px";  alt="<?= $data["title"]?>">
        <div class="info-row">
            <p>Fecha de estreno: <?= $data["release_date"]?></p>
            <p>Tipo de producción: <?= $data["type"] ?></p>
        </div>
    </div>
</main>

<style>
    :root {
        color-scheme: light dark;    
    }

    main {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

    .movie-info {
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center;     
        height: 100%;         
        width: 100%;
    }

    img {
        max-width: 100%;
        height: auto;
        margin: 20px;
        border-radius: 20px;
    }

    .info-row {
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 400px;
    }

    P {
        font-size: 14px;
    }

</style>