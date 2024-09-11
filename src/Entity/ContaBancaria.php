<?php

/* 
    Class: ContaBancária.php
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
    Definição da Classe "ContaBancaria"
*/

class ContaBancaria
{
    public string $cliente;
    public string $conta;
    public string $agencia;
    public float $saldo = 0;

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function deposito(float $valor): void
    {
        $this->saldo += $valor;
    }

    public function retirada(float $valor): void
    {
        if ($valor > $this->saldo) {
            // O caractere "\"  antes de "Exception", indica que estamos buscando a classe Exception no namespace global.
            throw new \Exception('Saldo Estourado!!!!!');
        } else {
            $this->saldo -= $valor;
        }
    }
}
