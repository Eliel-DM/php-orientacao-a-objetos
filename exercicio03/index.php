<?php

require_once __DIR__ . "/ContaBancaria.php";
require_once __DIR__ . "/ContaCorrente.php";

$contaCorrenteEliel = new ContaCorrente("Eliel", 0, FALSE);

$contaCorrenteEliel->depositar(1000);
$contaCorrenteEliel->consultarSaldo();

$contaCorrenteEliel->sacar(100);
$contaCorrenteEliel->consultarSaldo();

$contaCorrenteEliel->cobrarTarifaMensal();
$contaCorrenteEliel->consultarSaldo();

$contaCorrenteEliel->sacar(100);
$contaCorrenteEliel->consultarSaldo();

$contaPoupancaEliel = new ContaBancaria("ELIELZIN", 10, FALSE);

$contaPoupancaEliel->depositar(1000);
$contaPoupancaEliel->consultarSaldo();
$contaPoupancaEliel->sacar(100);
