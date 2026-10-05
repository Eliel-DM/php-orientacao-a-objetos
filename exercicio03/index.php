<?php

require_once __DIR__ . "/ContaBancaria.php";
require_once __DIR__ . "/ContaCorrente.php";

$contaCorrenteEliel = new ContaCorrente("Eliel", 0, TRUE);

// Caso a pessoa seja PCD ela receberá desconto e os saques não terão taxas;

if ()
    //if (get)
echo "O valor base de saque para a conta informada é de: " . $contaCorrenteEliel->cobrarTarifaMensal() . "R$" . PHP_EOL;



$contaCorrenteEliel->depositar(100);
$contaCorrenteEliel->consultarSaldo();

$contaCorrenteEliel->sacar(10);
$contaCorrenteEliel->consultarSaldo();
