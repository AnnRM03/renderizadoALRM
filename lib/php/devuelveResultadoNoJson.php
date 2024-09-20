<?php

require_once __DIR__ . "/INTERNAL_SERVER_ERROR.php";

// Asegúrate de que INTERNAL_SERVER_ERROR esté definido
if (!defined('INTERNAL_SERVER_ERROR')) {
    define('INTERNAL_SERVER_ERROR', 500);
}

function devuelveResultadoNoJson()
{
    http_response_code(INTERNAL_SERVER_ERROR);
    header("Content-Type: application/problem+json");

    // Coma añadida para corregir el formato JSON
    echo '{' .
        '"title": "El resultado no puede representarse como JSON.",' .
        '"type": "/error/resultadonojson.html"' .
        '}';
}
