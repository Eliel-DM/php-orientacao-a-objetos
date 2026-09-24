<?php

/*
Como podemos torná-lo um pouco mais robusto, impedindo que o saldo seja manipulado livremente, por exemplo?
 Altere o código da classe para que o saldo seja alterado somente através das operações de saque e depósito.
*/


class Conta {
    private int $saldoEmCentavos = 0;
    private string $nomeTitular;
    private string $numeroConta;


    public function depositar(int $valorASerDepositado): void {
        $this->saldoEmCentavos += $valorASerDepositado;
    }

    public function getSaldoEmCentavos(): int {
        return $this->saldoEmCentavos;
    }

    public function setNomeTitular(string $nomeTitular): void {
        $this->nomeTitular = $nomeTitular;
    }

    public function getNomeTitular(): string {
        return $this->nomeTitular;
    }

    public function setNumeroConta(int $numeroConta): void {
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string {
        return $this->numeroConta;
    }
}
