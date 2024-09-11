<?php

declare(strict_types=1);

include '../src/Controller/AbstractController.php';
include '../src/Controller/ControllerInterface.php';
include '../src/Controller/CategoryController.php';

use App\Controller\AbstractController;
use App\Controller\ControllerInterface;
use App\Controller\CategoryController;


return [
    '/' => [CategoryController::class, 'list'],

    '/categorias/listar' => [CategoryController::class, 'list'],
    '/categorias/adicionar' => [CategoryController::class, 'add'],
    '/categorias/editar' => [CategoryController::class, 'edit'],
    '/categorias/remover' => [CategoryController::class, 'remove'],
];
