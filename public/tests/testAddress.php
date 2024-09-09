<?php

/* 
    Arquivo: testAddress.php
*/

// Inclui o autoloader do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Importa a classe Address do namespace App\Entity
use App\Entity\Address;

/* Define os valores dos atributos para o Objeto $address utilizando o método set
   Cria uma instância da classe Address
   
$address = new Address();

$address->setStreet('Rua das Flores');
$address->setNumber('123');
$address->setZipCode('60.170-040');
$address->setDistrict('Meireles');
$address->setCity('Fortaleza');
$address->setState('CE');
*/

// Utilizando o Método Construtor
// Cria uma instância da classe e envia os parâmetros para o método construtor
$address = new Address('Rua das Flores', '123', '60.170-040', 'Meireles', 'Fortaleza', 'CE');

// Imprimir os valores dos atributos usando o método get de cada atributo
echo "*****************************" . PHP_EOL;
echo "Resultado de Address.php" . PHP_EOL;
echo "=============================" . PHP_EOL;
echo $address->getStreet() . "\n";      // Saída: Rua das Flores
echo $address->getNumber() . "\n";      // Saída: 123
echo $address->getZipCode() . "\n";     // Saída: 60.170-040
echo $address->getDistrict() . "\n";    // Saída: Meireles
echo $address->getCity() . "\n";        // Saída: Fortaleza
echo $address->getState() . "\n\n";       // Saída: CE

// Imprimir todos os atributos da Classe Address usando o método full()
echo "Endereço Completo: " . $address->full() . "\n";  // Saída: Rua das Flores, 123 - CEP: 60.170-040 Meireles Fortaleza-CE
echo "*****************************" . PHP_EOL;
