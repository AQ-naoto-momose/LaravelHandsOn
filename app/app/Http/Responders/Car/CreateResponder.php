<?php

declare(strict_types=1);

namespace App\Http\Responders\Car;

use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class CreateResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(): Response
    {
        return $this->responseFactory->view('cars.create');
    }
}
