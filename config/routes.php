<?php
// Arquivo routes.php

/* 
   Define que o arquivo deve ser interpretado com tipos de dados estritos. 
   Isso ajuda a prevenir erros de tipo durante a execução do código.
*/

declare(strict_types=1);

// Importação dos namespaces dos controladores para poder usá-los diretamente no código.
use App\Controller\CategoryController;
use App\Controller\CustomerController;
use App\Controller\ProductController;

/* 
   Retorna um array associativo que define as rotas da aplicação.
   As chaves do array são as URLs, e os 
   valores são arrays com o nome da classe do controlador e o nome do método a ser executado.
*/

return [
    '/' => [CategoryController::class, 'list'],

    '/categorias/listar' => [CategoryController::class, 'list'],
    '/categorias/adicionar' => [CategoryController::class, 'add'],
    '/categorias/editar' => [CategoryController::class, 'edit'],
    '/categorias/remover' => [CategoryController::class, 'remove'],

    '/clientes/listar' => [CustomerController::class, 'list'],
    '/clientes/adicionar' => [CustomerController::class, 'add'],
    '/clientes/editar' => [CustomerController::class, 'edit'],
    '/clientes/remover' => [CustomerController::class, 'remove'],

    '/produtos/listar' => [ProductController::class, 'list'],
    '/produtos/adicionar' => [ProductController::class, 'add'],
    '/produtos/editar' => [ProductController::class, 'edit'],
    '/produtos/remover' => [ProductController::class, 'remove'],
];
