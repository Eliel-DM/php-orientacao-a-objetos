<?php

include_once(__DIR__ . "/Exercicio01.php");

$contaBancaria = new Conta;

$contaBancaria->depositar(1000);
$contaBancaria->depositar(500);

echo $contaBancaria->getSaldoEmCentavos();
