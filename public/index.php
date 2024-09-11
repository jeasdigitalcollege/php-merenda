<?php

$routes = include '../config/routes.php';

$url = $_SERVER['REQUEST_URI'];

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();
