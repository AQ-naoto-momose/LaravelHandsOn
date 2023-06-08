<?php

namespace App\Http\Actions\Car;

use App\Http\Responders\Car\CreateResponder;
use App\Usecase\Car\CreateUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class CreateAction extends Controller
{
    public function __construct(
        private CreateResponder $responder
    )
    {
    }

    public function __invoke(): Response
    {
        return $this->responder->handle();
    }
}
