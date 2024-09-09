<?php

/* 
    Class: Address.php
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
    O comando namespace App\Entity; Define um espaço de nomes para o código que se segue, organizando-o em uma hierarquia lógica e evitando conflitos de nomes. É uma prática recomendada para projetos PHP de médio e grande porte.
*/

namespace App\Entity;

/*
    Definição da Classe "Address"
*/

class Address
{
    // Define propriedades privadas
    private string $street;
    private string $number;
    private string $zipcode;
    private string $district;
    private string $city;
    private string $state;

    // Método Construtor da classe "Address". 
    // O método é executado automaticamente ao instanciar um objeto
    public function __construct(string $street, string $number, string $zipcode, string $district, string $city, string $state)
    {
        // Inicializa as Propriedades da Classe
        $this->street = $street;
        $this->number = $number;
        $this->zipcode = $zipcode;
        $this->district = $district;
        $this->city = $city;
        $this->state = $state;
    }

    // Métodos de acesso e modificação às propriedades privadas da classe, 
    // Seguindo o padrão de encapsulamento. 
    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getZipCode(): string
    {
        return $this->zipcode;
    }

    public function setZipCode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    public function getdistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    public function getcity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getstate(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    // Método Público que retorna uma string formatada com o endereço completo
    public function full(): string
    {
        return "{$this->street}, {$this->number} - CEP: {$this->zipcode} {$this->district} {$this->city}-{$this->state}";
    }
}
