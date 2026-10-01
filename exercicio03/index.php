<?php

require_once __DIR__ . "/ContaBancaria.php";

$contaEliel = new ContaBancaria("Eliel", 0, false);
echo $contaEliel->consultarSaldo() . PHP_EOL;

$contaEliel->depositar(-1000);
echo $contaEliel->consultarSaldo() . PHP_EOL;

$contaEliel->sacar(-200);
echo $contaEliel->consultarSaldo() . PHP_EOL;
