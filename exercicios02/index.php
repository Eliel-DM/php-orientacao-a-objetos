<?php
require_once __DIR__ . "/TiposDeContas.php";
require_once __DIR__ . "/Conta.php";


/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.
1) Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;
2) Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas.
Você pode clicar no botão Opinião do instrutor para conferir as respostas.

*/

$contaEliel = new Conta("Eliel", 0, TiposDeContas::poupanca);

echo "
O nome da do titular é: {$contaEliel->nomeDoTitular},\n
o saldo atual é: {$contaEliel->saldo} \n
e o tipo da conta é: {$contaEliel->tipoDeConta->name}
";

$contaEliel->depositar(0.5);
$contaEliel->depositar(8000);
$contaEliel->calcularTaxas($contaEliel->tipoDeConta);
