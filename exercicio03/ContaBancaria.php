<?php

class ContaBancaria {

    public function __construct(

        public readonly string $nomeTitular,
        public int $saldo,
        public readonly bool $pessoaComDeficiencia,
    ) {
    }

    function depositar(int $valorASerDepositado): void {
        if ($valorASerDepositado <= 0) {
            echo "Error: Valor inserido inválido!" . PHP_EOL;
            return;
        }
        $this->saldo += $valorASerDepositado;
        echo "Sucess: Valor depositado com sucesso!" . PHP_EOL;
    }

    function sacar(int $valorASerSacado): void {
        if ($valorASerSacado <= 0 || $valorASerSacado > $this->saldo) {
            echo "Error: Valor inserido inválido!" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorASerSacado;
        echo "Sucess: Valor sacado com sucesso!" . PHP_EOL;
    }

    function consultarSaldo(): void {
        echo 'Saldo atual: ' .  $this->saldo . PHP_EOL;
    }
}
