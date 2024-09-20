<?php

require_once __DIR__ . "../lib/php/recuperaTexto.php";
require_once __DIR__ . "../lib/php/devuelveJson.php";

$genero = recuperaTexto("genero");

$artistaRecomendado = "";

switch ($genero) {
    case "pop":
        $artistaRecomendado = "Michael Jackson";
        break;
    case "rock":
        $artistaRecomendado = "Arctic Monkeys";
        break;
    case "mi":
        $artistaRecomendado = "Chase Atlantic";
        break;
    case "rb":
        $artistaRecomendado = "The Weeknd";
        break;
    case "banda":
        $artistaRecomendado = "Julión Álvarez";
        break;
}

if($artistaRecomendado==""){
    $resultado = "Por favor selecciona un género.";
}else{
    $resultado = "Te recomiendo escuchar a: {$artistaRecomendado}.";
}
devuelveJson($resultado);
?>
