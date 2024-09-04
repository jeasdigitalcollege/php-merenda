<?php

class ContaBancaria 
{
    public string $cliente;
    public string $conta;
    public string $agencia;
    public float $saldo = 0; 

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function deposito(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function retirada(float $valor): void
    {
        if($valor > $this->saldo)
        {
            throw new Exception('Saldo Insuficiente');
        }
        else
        {
            $this->saldo -= $valor;
        }
    }
}

$nubank = new ContaBancaria();
$nubank->cliente = "Jaime";
$nubank->agencia = "0001";
$nubank->deposito(1.90);

echo "Saldo atual-1: {$nubank->getSaldo()}" . PHP_EOL;

$nubank->deposito(998.99);
echo "Saldo atual-2: {$nubank->getSaldo()}" . PHP_EOL;

$nubank->retirada(200);
echo "Saldo atual-3: {$nubank->getSaldo()}" . PHP_EOL;

$nubank->retirada(5056);
echo "Saldo atual-4: {$nubank->getSaldo()}" . PHP_EOL;





