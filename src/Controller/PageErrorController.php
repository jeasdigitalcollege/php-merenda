<?php
// Programa PageErrorController.php

// Define que o arquivo deve ser interpretado com tipos de dados estritos, ajudando a prevenir erros de tipo.
declare(strict_types=1);

// Define o namespace da classe, organizando o código e evitando conflitos de nomes.
namespace App\Controller;

// Declara a classe PageErrorController, que estende a classe AbstractController e 
// implementa a interface ControllerInterface. 
// Isso significa que ela herda métodos da classe base e deve implementar os métodos definidos na interface.
class PageErrorController extends AbstractController
{
    // Define métodos públicos da classe, correspondendo às ações que podem ser realizadas com as categorias.

    public function notFound(): void
    {
        $this->render('pageerror/notFound');
    }
}
