<?php

declare(strict_types=1);

namespace App\Controller;

class CustomerController extends AbstractController implements ControllerInterface
{
    public function add(): void
    {
        $this->render('customer/add');
    }

    public function list(): void
    {
        $this->render('customer/list');
    }

    public function edit(): void
    {
        $this->render('customer/edit');
    }

    public function remove(): void
    {
        echo "excluir...";
    }
}
