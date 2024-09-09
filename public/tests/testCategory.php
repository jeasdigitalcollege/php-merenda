<?php

/* 
    Arquivo: testCategory.php
*/

// Inclui o autoloader do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Importa a classe Address do namespace App\Entity
use App\Entity\Category;

/* Define os valores dos atributos para o Objeto $category utilizando o método set
   Cria uma instância da classe Address
   
$category = new Category();

$category->setName('Bebidas');
$category->setDescription('Seção de Bebidas');
$category->setImage('https://images.app.goo.gl/ucMgLvVcL5e6ZMhP9');
*/

// Utilizando o Método Construtor
$category = new Category("Bebidas", "Seção de Bebidas", "https://images.app.goo.gl/ucMgLvVcL5e6ZMhP9");

// Imprimir os valores dos atributos usando o método get de cada atributo
echo "*****************************" . PHP_EOL;
echo "Resultado de Category.php" . PHP_EOL;
echo "=============================" . PHP_EOL;
echo $category->getName() . "\n";  // Saída: Bebidas
echo $category->getDescription() . "\n";  // Saída: Bebidas
echo $category->getImage() . "\n\n";  // Saída: Bebidas

// Imprimir todos os atributos da Classe Category usando o método full()
echo "Categoria Completa: " . $category->full() . "\n";  // Saída: Bebidas, Seção de Bebidas, https://images.app.goo.gl/ucMgLvVcL5e6ZMhP9
echo "*****************************" . PHP_EOL;
