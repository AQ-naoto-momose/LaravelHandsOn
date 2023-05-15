<?php

declare(strict_types=1);

namespace App\Http\Responders\Car;

use App\Models\Car;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class ShowResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(Car $car): Response
    {
        return $this->responseFactory->view('cars.show', compact('car'));
    }
}
