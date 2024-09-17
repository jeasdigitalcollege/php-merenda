<?php
// Arquivo AbstractController.php

// Define que o arquivo deve ser interpretado com tipos de dados estritos, 
// ajudando a prevenir erros de tipo.
declare(strict_types=1);

// Define o namespace da classe, organizando o código e evitando conflitos de nomes.
namespace App\Controller;

// Declara uma classe abstrata chamada AbstractController 
// Classes abstratas não podem ser instanciadas diretamente, mas servem como base para outras classes.

abstract class AbstractController
{
    // Define um método protegido chamado render
    protected function render(string $view): void
    {
        // Incluem os arquivos das views correspondentes aos layouts e componentes da página.
        include '../views/_layouts/head.php';
        include '../views/_components/content.php';

        include "../views/{$view}.php";

        include '../views/_layouts/footer.php';
    }
}
