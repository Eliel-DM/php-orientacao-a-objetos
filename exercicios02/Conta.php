<?php

require_once __DIR__ . "/TiposDeContas.php";

class Conta {
    public function __construct(
        public readonly string $nomeDoTitular,
        public float $saldo,
        public readonly TiposDeContas $tipoDeConta,

    ) {
    }

    public function calcularTaxas(TiposDeContas $conta): void {
        if ($conta == TiposDeContas::corrente  || $conta == TiposDeContas::investimento) {
            echo "O tipo de conta informado TEM taxas";
        } else {
            echo "O tipo de conta informado NÃO TEM taxas";
        }
    }

    public function depositar(float $saldoAserDepositado): void {
        if ($saldoAserDepositado <= 1) {
            echo "O valor depositado precisa ser maior que 1 R$ \n";
        } else {
            $this->saldo += $saldoAserDepositado;
            echo "Realizado o depósito no valor de {$saldoAserDepositado} \n";
        }
    }
}
