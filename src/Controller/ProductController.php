<?php
// Programa ProductController.php

// Define que o arquivo deve ser interpretado com tipos de dados estritos, ajudando a prevenir erros de tipo.
declare(strict_types=1);

// Define o namespace da classe, organizando o código e evitando conflitos de nomes.
namespace App\Controller;

// Declara a classe ProductController, que estende a classe AbstractController e 
// implementa a interface ControllerInterface. 
// Isso significa que ela herda métodos da classe base e deve implementar os métodos definidos na interface.
class ProductController extends AbstractController implements ControllerInterface
{
    // Define métodos públicos da classe, correspondendo às ações que podem ser realizadas com as categorias.
    public function add(): void
    {
        $this->render('product/add');
    }

    public function list(): void
    {
        $this->render('product/list');
    }

    public function edit(): void
    {
        $this->render('product/edit');
    }

    public function remove(): void
    {
        echo "excluir...";
    }
}
