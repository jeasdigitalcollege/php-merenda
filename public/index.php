<?php
// Arquivo index.php

// Inclui o arquivo routes.php, que contém um array associativo com as rotas.
// As chaves do array são as URLs e os valores são arrays com o nome do controlador e o método.
$routes = include '../config/routes.php';

// Obtém a parte da URL solicitada pelo usuário a partir do superglobal $_SERVER.
$url = $_SERVER['REQUEST_URI'];

// Extrai o nome do controlador e o nome do método da rota correspondente.
$controller = $routes[$url][0];
$method = $routes[$url][1];

// Cria uma instância do controlador e chama o método especificado.
(new $controller())->$method();
