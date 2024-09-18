<?php
// Arquivo index.php

/* 
   Inclui o arquivo autoload.php, que  é usado para carregar automaticamente as classes de um projeto sem que você precise 
   fazer require ou include manualmente de cada arquivo de classe. Ele é muito comum em projetos PHP que utilizam o Composer,
   que é um gerenciador de dependências.
*/

include '../vendor/autoload.php';

/* 
   Inclui o arquivo routes.php, que contém um array associativo com as rotas.
   As chaves do array são as URLs e os valores são arrays com o nome do controlador e o método.
*/

$routes = include '../config/routes.php';

// Importa namespace do controlador de Erro de Página.
use App\Controller\PageErrorController;

// Obtém a parte da URL solicitada pelo usuário a partir do superglobal $_SERVER.
$url = $_SERVER['REQUEST_URI'];

// Caso a rota não exista, chama uma página "notFound"
if (false === isset($routes[$url])) {
    (new PageErrorController())->notFound();
    exit;
}

// Extrai o nome do controlador e o nome do método da rota correspondente.
$controller = $routes[$url][0];
$method = $routes[$url][1];

// Cria uma instância do controlador e chama o método especificado.
(new $controller())->$method();
