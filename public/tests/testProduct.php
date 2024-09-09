<?php

/* 
    Arquivo: testProduct.php
*/

// Inclui o autoloader do Composer
require_once __DIR__ . '/../../vendor/autoload.php';

// Importa as classe Product e Category do namespace App\Entity
use App\Entity\Product;
use App\Entity\Category;

// Define os valores dos atributos para o Objeto $product (Product)
//$product->setImage("https://img.freepik.com/premium-photo/poster-with-book-that-says-happy-teachers-day_1271244-11648.jpg?w=740");

/*
// Cria uma instância da classe Category (Objeto $categoria)
$categoria = new Category();

// Define os valores dos atributos para o Objeto $category (Category)
$categoria->setName('Laticinios');
$categoria->setDescription('Seção de Leites, Queijos, Iogurtes');
$categoria->setImage('https://images.app.goo.gl/ucMgLvVcL5e6ZMhP9');

$product->setCategory($categoria);
*/

// Cria uma instância da classe Product usando o método Construtor da Classe (Objeto $product)
$product = new Product(
    "Coca Cola",
    "Coca Cola 2 litros",
    "https://img.freepik.com/premium-photo/poster-with-book-that-says-happy-teachers-day_1271244-11648.jpg?w=740",
    10,
    7.00,
    true
);

// Utilizando o Método Construtor
// Constroi o Objeto $enderecoJorge utilizando o Construtor da Classe Address
$categoria = new Category("Laticinios", "Seção Leite, Manteiga, Queijos", "https://images.app.goo.gl/ucMgLvVcL5e6ZMhP9");
// Seta o Objeto $enderecoJorge para Propriedade $address da Classe Address utilizando o método 
$product->setCategory($categoria);

echo "*****************************" . PHP_EOL;
echo "Resultado de Product.php" . PHP_EOL;
echo "=============================" . PHP_EOL;
echo "== Nome: {$product->getName()}" . PHP_EOL;
echo "== Descrição: {$product->getDescription()}" . PHP_EOL;
echo "== Imagem: {$product->getImage()}" . PHP_EOL;

// Para conseguir a Categoria do Produto: obtem o objeto Categoria e dentro desse objeto ontem o nome
echo "== Categoria: {$product->getCategory()->getName()}" . PHP_EOL;
echo "== Categoria Completa: {$categoria->full()}" . PHP_EOL;
echo "*****************************" . PHP_EOL;
