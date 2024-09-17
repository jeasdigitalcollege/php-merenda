<?php
// Arquivo ControllerInterface.php

// Define que o arquivo deve ser interpretado com tipos de dados estritos, ajudando a prevenir erros de tipo.
declare(strict_types=1);

// Define o namespace da interface, organizando o código e evitando conflitos de nomes.
namespace App\Controller;

// Declara uma interface chamada ControllerInterface
// As interfaces definem um conjunto de métodos que as classes que as implementam devem conter.
interface ControllerInterface
{

    // Define métodos públicos. 
    // Esses métodos são genéricos e podem ser implementados de diferentes maneiras em cada controlador, 
    // dependendo da funcionalidade específica.
    public function add(): void;
    public function list(): void;
    public function edit(): void;
    public function remove(): void;
}
