<?php

class ContaCorrente extends ContaBancaria {
    public const VALOR_TARIFA = 5;
    public const VALOR_TARIFA_MENSAL = 20;
    public function __construct(
        string $nomeTitular,
        int $saldo,
        bool $pessoaComDeficiencia,
    ) {

        parent::__construct($nomeTitular, $saldo, $pessoaComDeficiencia);
    }


    public function cobrarTarifaMensal(): int {

        if ($this->pessoaComDeficiencia) {
            return $this->saldo;
        }
        return $this->saldo -= self::VALOR_TARIFA_MENSAL;
    }

    public function sacar(int $valorASerSacado): void {
        $tarifa = 0;
        if (!$this->pessoaComDeficiencia) {
            $tarifa = self::VALOR_TARIFA;
        }
        $valorASerSacado += $tarifa;

        echo 'Valor da tarifa por saque: ' . $tarifa . PHP_EOL;
        parent::sacar($valorASerSacado);
    }
}
