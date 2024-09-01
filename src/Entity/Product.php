<?php
declare(strict_types=1);

namespace App\Entity;

class Product {
    public Category $category;
    public string $name;
    public string $description;
    public string $image; // url da imagem
    public float $price;
    public bool $available;
    public int $quantity;
}