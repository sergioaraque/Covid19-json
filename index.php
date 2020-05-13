<?php
$fecha = date('Y-m-d');
if(isset($_GET['fecha'])) {
    // Comprobamos el pais que ha venido
    if(isset($_GET['fecha'])) {
        $fecha = $_GET['fecha'];
    }
}

$JSONData = file_get_contents('https://api.covid19tracking.narrativa.com/api/' . $fecha . '/country/spain');
header('Content-Type: application/json');
echo $JSONData;

  ?>

