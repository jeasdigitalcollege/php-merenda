<?php

/* 
    Class: Product.php
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
    Definição da Classe "Product"
*/

class Product
{
    // Define propriedades privadas
    private string $name;
    private string $description;
    private string $image; // url da imagem
    private int $quantity;
    private float $price;
    private bool $available;
    // Uma das propriendades da Classe Product é o objeto $category da classe CAtegory
    private Category $category;

    // Método Construtor da classe "Product". 
    // O método é executado automaticamente ao instanciar um objeto
    public function __construct(string $name, string $description, string $image, int $quantity, float $price, bool $available)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->available = $available;
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

    //-----
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
    //-----
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    //-----
    public function getAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
    //-----

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }
}
