<?php

require_once __DIR__ . "/src/Modelo/Genero.php";
require_once __DIR__ . "/src/Modelo/Filme.php";
require_once __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";


echo "Bem vindo ao Screen-Match!";

$filme = new Filme(
    'Thor - Ragnarock',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(4);
$filme->avalia(2);
$filme->avalia(7.8);
$filme->avalia(7.2);


var_dump($filme);
echo $filme->media() . "\n";
echo $filme->nome . "\n";


$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

$duracao = $calculadora->duracao();

echo "Para maratornar, você preicsa de $duracao minutos";
