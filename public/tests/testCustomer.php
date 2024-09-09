<?php

/* 
    Arquivo: testCustomer.php
*/

// Inclui o autoloader do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Importa as classes Customer e Address do namespace App\Entity
use App\Entity\Customer;
use App\Entity\Address;

/* Define os valores dos atributos para o Objeto $customerJorge utilizando o método set
   Cria uma instância da classe Customer
   
$customerJorge = new Customer();

// Define os valores dos atributos para o Objeto $customerJorge (Customer)
$customerJorge->setName("Jorge Eduardo");
$customerJorge->setEmail("jeas@uol.com.br");
$customerJorge->setPhone("85 9 8819-8765");
$customerJorge->setPhoto("https://netexperts.com.br/wp-content/uploads/2024/04/google-photos-optimized.webp");
$customerJorge->setStatus(false);
*/

// Utilizando o Método Construtor
$customerJorge = new Customer(
    "Jorge Eduardo",
    "jeas@uol.com.br",
    "85 9 8819-8765",
    "https://netexperts.com.br/wp-content/uploads/2024/04/google-photos-optimized.webp",
    true
);

/* Define os valores dos atributos para o Objeto $enderecoJorge utilizando os métodos "set"
   
//Cria uma instância da classe Address (Objeto $enderecoJorge)
$enderecoJorge = new Address();

// Define os valores dos atributos para o Objeto $enderecoJorge (Address)
$enderecoJorge->setStreet('Rua das Almas');
$enderecoJorge->setNumber('456');
$enderecoJorge->setZipCode('60.170-042');
$enderecoJorge->setDistrict('Fátima');
$enderecoJorge->setCity('Fortaleza');
$enderecoJorge->setState('CE');

// Utiliza Método "set" da Classe Customer para atribuir valores ao Objeto Address
$customerJorge->setAddress($enderecoJorge);
*/

// Utilizando o Método Construtor
// Constroi o Objeto $enderecoJorge utilizando o Construtor da Classe Address
$enderecoJorge = new Address("Rua Leonardo Mota", "350", "60.140-040", "Meireles", "Fortaleza", "CE");
// Seta o Objeto $enderecoJorge para Propriedade $address da Classe Address utilizando o método 
$customerJorge->setAddress($enderecoJorge);

echo "*****************************" . PHP_EOL;
echo "Resultado de Customer.php" . PHP_EOL;
echo "=============================" . PHP_EOL;
echo "== Nome: {$customerJorge->getName()}" . PHP_EOL;
echo "== Email: {$customerJorge->getEmail()}" . PHP_EOL;
echo "== Telefone: {$customerJorge->getPhone()}" . PHP_EOL;
echo "== Photo: {$customerJorge->getPhoto()}" . PHP_EOL;
echo "== Status: " . ($customerJorge->getStatus() ? "Ativo" : "Inativo") . PHP_EOL;

// Para conseguir o logradouro do Cliente: obtem o objeto endereço e dentro desse objeto ontem o logradouro
echo "== Rua: {$customerJorge->getAddress()->getStreet()}" . PHP_EOL;
echo "== Endereço Completo: {$enderecoJorge->full()}" . PHP_EOL;
echo "*****************************" . PHP_EOL;
