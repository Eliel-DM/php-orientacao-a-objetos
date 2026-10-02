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
            echo "Error: Valor inserido inválido! \n";
            return;
        }
        $this->saldo += $valorASerDepositado;
    }

    function sacar(int $valorASerSacado): void {
        if ($valorASerSacado <= 0 || $valorASerSacado > $this->saldo) {
            echo "Error: Valor inserido inválido! \n";
            return;
        }
        $this->saldo -= $valorASerSacado;
    }

    function consultarSaldo(): int {
        return $this->saldo;
    }
}
