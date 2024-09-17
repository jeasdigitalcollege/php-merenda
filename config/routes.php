<?php
// Arquivo routes.php

// Define que o arquivo deve ser interpretado com tipos de dados estritos. 
// Isso ajuda a prevenir erros de tipo durante a execução do código.
declare(strict_types=1);

// Incluem os arquivos necessários para o funcionamento dos controladores.
include '../src/Controller/AbstractController.php';
include '../src/Controller/ControllerInterface.php';
include '../src/Controller/CategoryController.php';
include '../src/Controller/CustomerController.php';

// Importam os namespaces dos controladores para poder usá-los diretamente no código.
use App\Controller\AbstractController;
use App\Controller\ControllerInterface;
use App\Controller\CategoryController;
use App\Controller\CustomerController;

// Retorna um array associativo que define as rotas da aplicação.
// As chaves do array são as URLs, e os 
// valores são arrays com o nome da classe do controlador e o nome do método a ser executado.
return [
    '/' => [CategoryController::class, 'add'],

    '/categorias/listar' => [CategoryController::class, 'list'],
    '/categorias/adicionar' => [CategoryController::class, 'add'],
    '/categorias/editar' => [CategoryController::class, 'edit'],
    '/categorias/remover' => [CategoryController::class, 'remove'],
];
