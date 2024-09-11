<?php

/* 
    Arquivo: testContaBancária.php
*/

// Inclui o autoloader do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Importa a classe Address do namespace App\Entity
use App\Entity\ContaBancaria;

$nubank = new ContaBancaria();
$nubank->cliente = "Jaime";
$nubank->agencia = "0001";
$nubank->deposito(1.90);

echo "*****************************" . PHP_EOL;
echo "Resultado de ContaBancaria.php" . PHP_EOL;
echo "=============================" . PHP_EOL;
echo "Saldo Atual: {$nubank->getSaldo()}" . PHP_EOL;

$nubank->deposito(998.99);
echo "Saldo com Depósito (R$ 998,99): {$nubank->getSaldo()}" . PHP_EOL;

$nubank->retirada(200);
echo "Saldo com Retirada (R$ 200,00): {$nubank->getSaldo()}" . PHP_EOL;

$nubank->retirada(5056);
echo "Saldo Estourado: {$nubank->getSaldo()}" . PHP_EOL;
echo "*****************************" . PHP_EOL;
