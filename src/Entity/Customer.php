<?php

/* 
    Class: Customer.php
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
    Definição da Classe "Customer"
*/

class Customer
{
    // Define propriedades privadas
    private string $name;
    private string $email;
    private string $phone;
    private string $photo;
    private bool $status;
    // Uma das propriendades da Classe Customer é o objeto $address da classe Address
    private Address $address;

    // Método Construtor da classe "Customer". 
    // O método é executado automaticamente ao instanciar um objeto
    public function __construct(string $name, string $email, string $phone, string $photo, bool $status)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->photo = $photo;
        $this->status = $status;
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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    // O método retorna um objeto address da Classe Address
    public function getAddress(): Address
    {
        return $this->address;
    }

    // O método altera valores do objeto $address
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }
}
