<?php

/* 
    Class: Category.php
*/

/* 
    A declaração declare(strict_types=1); em PHP serve para ativar o modo de tipagem estrita em um arquivo PHP. Isso significa que o PHP passará a verificar de forma mais rigorosa a compatibilidade entre os tipos de dados declarados nas suas funções e os valores que você passa para elas.
    O valor "1" ativa o modo estrito (boleano).
    Recomenda-se colocar declare(strict_types=1); no início do arquivo PHP, antes de qualquer outra declaração. Dessa forma, o modo estrito será aplicado a todo o código do arquivo.
*/

declare(strict_types=1);

/* 
    Namespaces em PHP são mecanismos utilizados para organizar o código, evitando conflitos de nomes entre classes, funções e constantes, especialmente em projetos maiores. Eles criam um hierarquia de nomes, similar a um sistema de pastas em um computador.
    App = Aplicação Principal
    Entity = classes dentro no namespace que representam Entidades
    Em projetos grandes, é comum ter classes com o mesmo nome em diferentes partes do código. Os namespaces ajudam a evitar esses conflitos, garantindo que cada classe tenha um nome único no contexto do projeto.
    O comando namespace App\Entity; define um espaço de nomes para o código que se segue, organizando-o em uma hierarquia lógica e evitando conflitos de nomes. É uma prática recomendada para projetos PHP de médio e grande porte.
*/

namespace App\Entity;

/*
    Definição da Classe "Category"
*/

class Category
{
    // Define propriedades privadas
    private string $name;
    private string $description;
    private string $image;

    // Método Construtor da classe "Category". 
    // O método é executado automaticamente ao instanciar um objeto
    public function __construct(string $name, string $description, string $image)
    {
        // Inicializa as Propriedades da Classe
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }

    // Métodos de acesso e modificação às propriedades privadas da classe, 
    // Seguindo o padrão de encapsulamento. 
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    // Método Público que retorna uma string formatada com a Categoria completa
    public function full(): string
    {
        return "{$this->name}, {$this->description}, {$this->image}";
    }
}
