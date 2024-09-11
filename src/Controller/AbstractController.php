<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    protected function render(string $view): void
    {
        include '../views/_layouts/head.php';
        include '../views/_components/content.php';

        include "../views/{$view}.php";

        include '../views/_layouts/footer.php';
    }
}
