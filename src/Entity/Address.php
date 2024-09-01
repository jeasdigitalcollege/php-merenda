<?php

declare(strict_types=1);

namespace App\Entity;

class Address {
    public string $logradouro;
    public string $numero;
    public string $zipcode;
    public string $district;
    public string $city;
    public string $state;
}