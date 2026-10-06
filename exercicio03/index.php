<?php

require_once __DIR__ . "/ContaBancaria.php";
require_once __DIR__ . "/ContaCorrente.php";

$contaCorrenteEliel = new ContaCorrente("Eliel", 0, TRUE);


echo "O valor base de saque para a conta informada é de: " . $contaCorrenteEliel->cobrarTarifaMensal() . "R$" . PHP_EOL;



$contaCorrenteEliel->depositar(100);
$contaCorrenteEliel->consultarSaldo();

$contaCorrenteEliel->sacar(10);
$contaCorrenteEliel->consultarSaldo();
