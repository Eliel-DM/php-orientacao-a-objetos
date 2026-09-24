<?php

class Filme {
    private string $nome = 'Nome padrão';
    private int $anoLancamento = 2024;
    private string $genero = 'ação';
    private array $notas = [];

    function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function getAnoLancamento(): int {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $anoLancamento): void {
        $this->anoLancamento = $anoLancamento;
    }
}
