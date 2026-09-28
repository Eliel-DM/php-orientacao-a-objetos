<?php

require_once __DIR__ . "/src/Modelo/Genero.php";
require_once __DIR__ . "/src/Modelo/Filme.php";


echo "Bem vindo ao Screen-Match!";

$filme = new Filme(
    'Thor - Ragnarock',
    2021,
    Genero::SuperHeroi,
);

$filme->avalia(4);
$filme->avalia(2);
$filme->avalia(7.8);
$filme->avalia(7.2);


var_dump($filme);

echo $filme->media() . "\n";

echo $filme->nome . "\n";
