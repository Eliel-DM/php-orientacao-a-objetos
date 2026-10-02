<?php

class ContaCorrente extends ContaBancaria {
    public const VALOR_TARIFA = 5;
    public function __construct(
        string $nomeTitular,
        int $saldo,
        bool $pessoaComDeficiencia,
    ) {

        parent::__construct($nomeTitular, $saldo, $pessoaComDeficiencia);
    }


    public function cobrarTarifaMensal() {
        // $this->saldo -= self::VALOR_TARIFA;

            /*
            Implementar e validar uma forma para poder realizar a leitura de forma mensal com validações concretas.

            $dataArmazenada = new DateTime();
            var_dump($dataArmazenada);
    }       
            */
      
}
